<?php

namespace App\Models;

use App\Services\MoneyConverter;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    protected $appends = ['value_in_reais'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function wallet()
    {
        return $this->belongsTo(Wallet::class);
    }

    protected function valueInReais() : Attribute
    {
        return Attribute::make(
            get: fn($value,$attributes) => number_format(MoneyConverter::convertCentavosToReais($attributes['value']),2),
        );
    }
}
