<?php

namespace App\Services;

use App\Services\CrawlerService;

class CurrencyScrapService
{
    const TEST_LIMIT = 20;
    public function collectData(){
        $client      = new CrawlerService("https://pt.wikipedia.org/wiki/ISO_4217");
        $crawler     = $client->crawlingPage();
        $images      = [];
        $table       = $crawler->filter("table")->filter("tr")->each(function ($tr, $i) use ($images) {
            $tdNode  = $tr->filter('td');
            $counter = 0;
            return $tdNode->each(function ($td, $i) use (&$counter) {
                
                if(++$counter == 5){
                    $itemTd     = $td->text();
                    $quantity   = count(explode(",", $itemTd));
                    $image      = $this->scrapImageFromTable($td, $quantity);

                    return (Object)["td" => trim($td->text()), "img" => $image];
                }
                return (Object)["td" => trim($td->text())];
            });
        });

        return $this->migrateData($table);
    }

    private function createDataTable($table) {
        $dataTable = [];

        foreach( $table as $row ) {
            if( count($row) == 5 ) {
                $dataTable[] = (Object)["codigo" => $row[0]->td, "number" => $row[1]->td, "decimal" => $row[2]->td, "currency" => $row[3]->td, 
                "location" => trim($row[4]->td), "img" => $row[4]->img];
            }
        }

        return $dataTable;
    }

    private function migrateData(Array $table) {
        $dataTable  = $this->createDataTable($table);
        $currency   = [];
        $counter    = 1;
        $steps      = 0;

        foreach( $dataTable as $row ) {
            if( ++$steps == self::TEST_LIMIT ) break; //limitando a quantidade em 20 registros para finalidade de teste

            $locations  = explode(",", $row->location);
            $location   = [];
            if( count($locations) == 1 )
            {
                $location[] = [
                    'currency_id'   => $counter,
                    'location'      => trim($locations[0]),
                    'icon'          => "https:" . $row->img[0],
                ];
            }
            else{
                for( $i = 0; $i < count($locations); $i++ ) {
                    if( is_array($row->img) == false ) continue;

                    $img        = (array_key_exists($i,$row->img)) ? $row->img[$i] : $row->img[0];
                    $location[] = [
                            'currency_id'   => $counter,
                            'location'      => trim($locations[$i]),
                            'icon'          => "https:" . $img,
                    ];
                }

            }

            $currency[] = ["currency" => [
                    'id'        => $counter++,
                    'code'      => $row->codigo,
                    'number'    => $row->number,
                    'decimal'   => $row->decimal,
                    'currency'  => $row->currency,
                ], 
                "location" => $location
            ];
        }

        return $currency;
    }

    private function scrapImageFromTable($table, $quantity) {
        try{
            $imgs = [];
            for( $i= 0; $i < $quantity; $i++ ) {
                $imgs[] = $table->filter("img")->eq($i)->attr("src");
            }

            return $imgs;
        }
        catch(\Exception $t ){
            return;
        }
    }
}