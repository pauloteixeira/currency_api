<?php

namespace App\Services;

use App\Services\CrawlerService;

class CurrencyScrapService
{
    use \App\Helpers\Utils;

    const TEST_LIMIT = 20;
    
    public function collectData()
    {
        $client      = new CrawlerService("https://pt.wikipedia.org/wiki/ISO_4217");
        $crawler     = $client->crawlingPage();
        $table       = $crawler->filter("table")->filter("tr")->each(function ($tr, $i) {
            $tdNode  = $tr->filter('td');
            $counter = 0;
            return $tdNode->each(function ($td, $i) use (&$counter) {

                if (++$counter == 5) {
                    $itemTd     = $td->text();
                    $quantity   = count(explode(",", $itemTd));
                    $image      = $this->scrapImageFromTable($td, $quantity);

                    return (object)["td" => $this->preventSingleQuotes($td->text()), "img" => $image];
                }
                return (object)["td" => $this->preventSingleQuotes($td->text())];
            });
        });

        return $this->serializeData($table);
    }

    private function scrapImageFromTable($td, $quantity)
    {
        try {
            $imgs = [];
            for ($i = 0; $i < $quantity; $i++) {
                $imgs[] = $td->filter("img")->eq($i)->attr("src");
            }

            return $imgs;
        } catch (\Exception $t) {
            return;
        }
    }

    private function serializeData(array $table)
    {
        $dataTable = $this->createDataTable($table);
        $currency = [];
        $counter = 1;
        $steps = 0;

        foreach ($dataTable as $row) {
            if (++$steps == self::TEST_LIMIT) {
                //break; //limitando a quantidade em 20 registros para finalidade de teste
            }

            $locations = explode(",", $row->location);
            $location = [];

            for ($i = 0; $i < count($locations); $i++) {
                if (is_array($row->img) == false) {
                    continue;
                }

                $img = (array_key_exists($i, $row->img)) ? $row->img[$i] : $row->img[0];
                $location[] = [
                        'currency_id' => $counter,
                        'location' => $this->preventSingleQuotes($locations[$i]),
                        'icon' => "https:" . $img,
                ];
            }

            $currency[] = ["currency" => [
                    'id' => $counter++,
                    'code' => $row->codigo,
                    'number' => $row->number,
                    'decimal' => intval($row->decimal),
                    'currency' => $row->currency,
                ],
                "location" => $location
            ];
        }

        return $currency;
    }

    private function createDataTable($table)
    {
        $dataTable = [];

        foreach ($table as $row) {
            if (count($row) == 5) {
                $dataTable[] = (object)["codigo" => $row[0]->td, "number" => $row[1]->td, "decimal" => $row[2]->td, "currency" => $row[3]->td,
                "location" => $this->preventSingleQuotes($row[4]->td), "img" => $row[4]->img];
            }
        }

        return $dataTable;
    }
}
