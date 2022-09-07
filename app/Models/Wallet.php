<?php

namespace App\Models;

use App\Services\MoneyConverter;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wallet extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }

    protected function balance():Attribute
    {
        return new Attribute(
            //balance é um atributo da Model
            get: function($balance){
                $reais_balance = MoneyConverter::convertCentavosToReais($balance);
                return number_format($reais_balance,2);
            },
        );
    }

}
