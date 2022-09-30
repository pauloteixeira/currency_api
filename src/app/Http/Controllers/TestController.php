<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\CurrencyScrapService as Scrap;

class TestController extends Controller {
    use \App\Helpers\Utils;

    public function test(Request $request) {
        $scrap = new Scrap();
        $dataLoad = $scrap->collectData();

        dd($dataLoad);
    }
}



