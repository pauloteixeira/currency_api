<?php

namespace App\Http\Controllers\Api\V1;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Currencies;

class HealthCheckController extends Controller {
    use \App\Helpers\Utils;

    public function hc( Request $request ){
        $result = ["retorno" => [
            "hc"        => "OK",
            "timestamp" => $this->currentTimeStamp()
        ]];
        
        try{
            $model = Currencies::first();
        }
        catch( \Throwable $t ){
            $result = ["retorno" => [
                "hc"        => "NOT OK",
                "timestamp" => $this->currentTimeStamp(),
                "problem"   => ["message" => $t->getMessage()]
            ]];
        }
        
        return $this->encodeResult($result);
    }
}

