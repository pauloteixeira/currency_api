<?php

namespace App\Http\Controllers\Api\V1;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Currencies;

class HealthCheckController extends Controller {
    use \App\Helpers\Utils;

    public function hc( Request $request ){
        $err    = [];
        $result = ["retorno" => [
            "hc"        => "OK",
            "timestamp" => $this->currentTimeStamp()
        ]];
        
        try{
            $model = Currencies::first();
        }
        catch( \Throwable $t ){
            $err[] = ["message" => $t->getMessage()];
        }

        if( count($err) > 0 ){
            $result = ["retorno" => [
                "hc"        => "NOT OK",
                "timestamp" => $this->currentTimeStamp(),
                "problem"   => $err
            ]];
        }

        return $result;
    }
}

