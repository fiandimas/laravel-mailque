<?php

use App\Jobs\SendEmailJob;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function(){
    SendEmailJob::dispatch()->delay(now()->addSeconds(5));

    return 'Email is queued!';
});
