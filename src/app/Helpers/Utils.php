<?php

namespace App\Helpers;

use  Carbon\Carbon;

trait Utils
{
    public function formatCode($valor, $isArray = false)
    {
        if ($isArray === true) {
            return $this->formatCodeArray($valor);
        }
        if (true == empty($valor)) {
            return $this->notFound();
        }

        return strtoupper($valor);
    }

    private function formatCodeArray($valor)
    {
        return array_map('strtoupper', $valor);
    }

    public function currentTimeStamp()
    {
        return Carbon::now()->toDateTimeString();
    }

    /**
     * se o test unitário retornar falhas mesmo estando ok, será necessário usar esta função no retorno
     */
    public function encodeResult(array $data)
    {
        return mb_convert_encoding($data, "UTF-8", "auto");
    }

    /**
     * Verifica se existe aspas simples e remove ela caso exista
     */
    public function preventSingleQuotes($value) {
        return str_replace("`", "", $value);
    }
}
