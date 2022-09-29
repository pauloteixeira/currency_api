<?php

namespace App\Http\Controllers\Api\V1;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Currencies;
use Illuminate\Support\Facades\Cache;


class CurrencyController extends Controller {
    use \App\Helpers\Utils;

    const IS_ARRAY_PARAMS        = true;
    const SIXTY_SECONDS_DURATION = 60;

    public function code( Request $request ){
        if( !$request->isMethod("post") ) {
            return ["retorno" => [
                "errorCode" => "500",
                "problem"   => ["message" => "Wrong verb request."],
                "timestamp" => $this->currentTimeStamp()
                ]];    
        }
        
        try{
            $code   = $this->formatCode($request->post("code"));
            $model  = Cache::remember('byCode', self::SIXTY_SECONDS_DURATION, function () use ($code) {
                return Currencies::where(["code" => $code])->with(["locations"])->get();
            });

            $result = ["retorno" => [
                "body" => $model
            ]];
        }
        catch( \Throwable $t ){
            $result = ["retorno" => [
                "hc"        => "NOT OK",
                "timestamp" => $this->currentTimeStamp(),
                "problem"   => ["message" => $t->getMessage()]
            ]];
        }

        return $result;
    }

    public function codeList( Request $request ){
        if( !$request->isMethod("post") ) {
            return ["retorno" => [
                "errorCode" => "500",
                "problem"   => ["message" => "Wrong verb request."],
                "timestamp" => $this->currentTimeStamp()
                ]];    
        }
        
        try{
            $codeList   = $this->formatCode($request->post("code_list"), self::IS_ARRAY_PARAMS);
            $model      = Cache::remember('byCodeList', self::SIXTY_SECONDS_DURATION, function () use ($codeList) {
                return Currencies::whereIn("code", $codeList)->with(["locations"])->get();
            });

            $result     = ["retorno" => [
                "body" => $model
            ]];
        }
        catch( \Throwable $t ){
            $result = ["retorno" => [
                "hc"        => "NOT OK",
                "timestamp" => $this->currentTimeStamp(),
                "problem"   => ["message" => $t->getMessage()]
            ]];
        }

        return $result;
    }

    public function number( Request $request ){
        if( !$request->isMethod("post") ) {
            return ["retorno" => [
                "errorCode" => "500",
                "problem"   => ["message" => "Wrong verb request."],
                "timestamp" => $this->currentTimeStamp()
                ]];    
        }
        
        try{
            $number = $this->formatCode($request->post("number"));
            $model  = Cache::remember('byNumber', self::SIXTY_SECONDS_DURATION, function () use ($number) {
                return Currencies::where(["number" => $number])->with(["locations"])->get();
            });

            $result = ["retorno" => [
                "body" => $model
            ]];
        }
        catch( \Throwable $t ){
            $result = ["retorno" => [
                "hc"        => "NOT OK",
                "timestamp" => $this->currentTimeStamp(),
                "problem"   => ["message" => $t->getMessage()]
            ]];
        }

        return $result;
    }

    public function numberList( Request $request ){
        if( !$request->isMethod("post") ) {
            return ["retorno" => [
                "errorCode" => "500",
                "problem"   => ["message" => "Wrong verb request."],
                "timestamp" => $this->currentTimeStamp()
                ]];    
        }
        
        try{
            $numberList = $this->formatCode($request->post("number_list"), self::IS_ARRAY_PARAMS);
            $model      = Cache::remember('byNumberList', self::SIXTY_SECONDS_DURATION, function () use ($numberList) {
                return Currencies::whereIn("number", $numberList)->with(["locations"])->get();
            });
            
            $result     = ["retorno" => [
                "body" => $model
            ]];
        }
        catch( \Throwable $t ){
            $result = ["retorno" => [
                "hc"        => "NOT OK",
                "timestamp" => $this->currentTimeStamp(),
                "problem"   => ["message" => $t->getMessage()]
            ]];
        }

        return $result;
    }
}

