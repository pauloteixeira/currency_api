<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Services\CurrencyScrapService;

class LoadData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $currencyData = $this->scrapData();

        DB::table('currencies')->insert($currencyData->currency);
        DB::table('currency_locations')->insert($currencyData->location);
    }

    private function scrapData()
    {
        $scrap      = new CurrencyScrapService();
        $dataLoad   = $scrap->collectData();
        $currencies = [];
        $locations  = [];

        foreach ($dataLoad as $row) {
            $currencies[] = $row["currency"];

            for ($i = 0; $i < count($row["location"]); $i++) {
                $locations[]  = $row["location"][$i];
            }
        }

        return (object)["currency" => $currencies, "location" => $locations];
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
