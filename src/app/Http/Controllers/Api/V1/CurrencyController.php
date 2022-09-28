<?php

namespace App\Http\Controllers\Api\V1;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Currencies;


class CurrencyController extends Controller {
    use \App\Helpers\Utils;

    const IS_ARRAY_PARAMS = true;

    public function code( Request $request ){
        if( !$request->isMethod("post") ) {
            return ["retorno" => [
                "errorCode" => "500",
                "problem"   => ["message" => "Wrong verb request."],
                "timestamp" => $this->currentTimeStamp()
                ]];    
        }
        
        $err    = [];
        
        try{
            $code   = $this->formatCode($request->post("code"));
            $model  = Currencies::where(["code" => $code])->with(["locations"])->get();
            $result = ["retorno" => [
                "body"      => $model,
                "timestamp" =>$this->currentTimeStamp()
            ]];
        }
        catch( \Throwable $t ){
            $err[] = ["message" => $t->getMessage()];
        }

        if( count($err) > 0 ){
            $result = ["retorno" => [
                "errorCode" => "500",
                "timestamp" => $this->currentTimeStamp(),
                "problem"   => $err
            ]];
        }

        return $this->encodeResult($result);
    }

    public function codeList( Request $request ){
        if( !$request->isMethod("post") ) {
            return ["retorno" => [
                "errorCode" => "500",
                "problem"   => ["message" => "Wrong verb request."],
                "timestamp" => $this->currentTimeStamp()
                ]];    
        }
        
        $err    = [];
        
        try{
            $codeList   = $this->formatCode($request->post("code_list"), self::IS_ARRAY_PARAMS);
            $model      = Currencies::whereIn("code", $codeList)->with(["locations"])->get();
            $result     = ["retorno" => [
                "body"      => $model,
                "timestamp" =>$this->currentTimeStamp()
            ]];
        }
        catch( \Throwable $t ){
            $err[] = ["message" => $t->getMessage()];
        }

        if( count($err) > 0 ){
            $result = ["retorno" => [
                "errorCode" => "500",
                "timestamp" => $this->currentTimeStamp(),
                "problem"   => $err
            ]];
        }

        return $this->encodeResult($result);
    }

    public function number( Request $request ){
        if( !$request->isMethod("post") ) {
            return ["retorno" => [
                "errorCode" => "500",
                "problem"   => ["message" => "Wrong verb request."],
                "timestamp" => $this->currentTimeStamp()
                ]];    
        }
        
        $err    = [];
        
        try{
            $number = $this->formatCode($request->post("number"));
            $model  = Currencies::where(["number" => $number])->with(["locations"])->get();
            $result = ["retorno" => [
                "body"      => $model,
                "timestamp" =>$this->currentTimeStamp()
            ]];
        }
        catch( \Throwable $t ){
            $err[] = ["message" => $t->getMessage()];
        }

        if( count($err) > 0 ){
            $result = ["retorno" => [
                "errorCode" => "500",
                "timestamp" => $this->currentTimeStamp(),
                "problem"   => $err
            ]];
        }

        return $this->encodeResult($result);
    }

    public function numberList( Request $request ){
        if( !$request->isMethod("post") ) {
            return ["retorno" => [
                "errorCode" => "500",
                "problem"   => ["message" => "Wrong verb request."],
                "timestamp" => $this->currentTimeStamp()
                ]];    
        }
        
        $err    = [];
        
        try{
            $numberList = $this->formatCode($request->post("number_list"), self::IS_ARRAY_PARAMS);
            $model      = Currencies::whereIn("number", $numberList)->with(["locations"])->get();
            $result     = ["retorno" => [
                "body"      => $model,
                "timestamp" =>$this->currentTimeStamp()
            ]];
        }
        catch( \Throwable $t ){
            $err[] = ["message" => $t->getMessage()];
        }

        if( count($err) > 0 ){
            $result = ["retorno" => [
                "errorCode" => "500",
                "timestamp" => $this->currentTimeStamp(),
                "problem"   => $err
            ]];
        }

        return $this->encodeResult($result);
    }
}

