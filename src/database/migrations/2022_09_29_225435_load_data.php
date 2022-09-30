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
        $scrap      = new CurrencyScrapService();
        $dataLoad   = $scrap->collectData();
        $currencies = [];
        $locations  = [];
        
        foreach( $dataLoad as $row ) {
            $currencies[] = $row["currency"];
            
            for($i = 0; $i < count($row["location"]); $i++) {
                $locations[]  = $row["location"][$i];
            }
        }

        DB::table('currencies')->insert($currencies);
        DB::table('currency_locations')->insert($locations);
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
