<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Line extends Model
{
    public function invoice()
    {
        return $this->belongsTo(Invoice::class);
    }

    public function getTotalPriceInCentsAttribute()
    {
        return $this->unit_price_in_cents * $this->quantity;
    }

    public function getUnitPriceInEurosAttribute()
    {
        return $this->unit_price_in_cents / 100;
    }

    public function setUnitPriceInEurosAttribute($euros)
    {
        $this->unit_price_in_cents = $euros * 100;
    }

    public function getTotalPriceInEurosAttribute()
    {
        return $this->total_price_in_cents / 100;
    }



    public function getUnitPriceAsStringAttribute()
    {
        return number_format($this->unit_price_in_euros, 2, '.', ' ') . ' €';
    }

    public function getTotalPriceAsStringAttribute()
    {
        return number_format($this->total_price_in_euros, 2, '.', ' ') . ' €';
    }
}
