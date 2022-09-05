<?php

namespace App\Services;

class MoneyConverter
{
    public static function convertCentavosToReais($centavos):float
    {
        $reais = $centavos / 100;
        return (float) $reais;
    }

    public static function convertReaisToCentavos($reais):int
    {
        $centavos = $reais * 100;
        return (int) $centavos;
    }
}