<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Line extends Model
{
    public function invoice(){
        return $this->belongsTo(Invoice::class);
    }
}
