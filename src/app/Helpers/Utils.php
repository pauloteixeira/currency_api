<?php

namespace App\Helpers;

use  \Carbon\Carbon;

trait Utils {
    public function formatCode ( $valor, $isArray = false ) {
        if( $isArray === true ) return $this->formatCodeArray($valor);
        if( true == empty($valor) ) return $this->notFound();

        return strtoupper($valor);
    }

    private function formatCodeArray($valor) {
        return array_map('strtoupper', $valor);
    }

    public function currentTimeStamp() {
        return Carbon::now()->toDateTimeString();
    }
}