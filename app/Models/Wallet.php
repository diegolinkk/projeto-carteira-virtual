<?php

namespace App\Models;

use App\Services\MoneyConverter;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wallet extends Model
{
    use HasFactory;
    protected $appends = ['balance_in_reais'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }

    protected function balanceInReais() : Attribute
    {
        return Attribute::make(
            get: function($value,$attributes){
                $reais =  MoneyConverter::convertCentavosToReais($attributes['balance']);
                return number_format($reais,2);
            }
        );
    }

}
