<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/coffees', function () {
    $coffees = [
        ['name' => 'caffuccino', 'price' => 15, 'temp' => 'hot'],
        ['name' => 'americano', 'price' => 10, 'temp' => 'hot'],
        ['name' => 'espresso', 'price' => 20, 'temp' => 'cold'],
    ];
    return view('coffees', ['coffees' => $coffees]);
    // return 'coffee';
    // return ['name'=>'caffuccino', 'temp'=>'hot'];
});
