<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use phpDocumentor\Reflection\File;

class Invoice extends Model
{
    public function customer(){
        return $this->belongsTo(Customer::class);
    }

    public function lines(){
        return $this->hasMany(Line::class);
    }

    public function generate()
    {
        Storage::put("invoices/{$this->id}.txt", $this->subject);
    }
}
