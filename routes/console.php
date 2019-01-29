<?php

use Illuminate\Foundation\Inspiring;
/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command('test', function () {
    Schema::table('invoices', function ($table) {

        $table->unsignedInteger('payment_id')->nullable();
        $table->foreign('payment_id')->references('id')->on('payments');
    });


})->describe('Display an inspiring quote');
