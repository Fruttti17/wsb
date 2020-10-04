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

Route::get('/address/{city?}/{street?}/{zipcode?}', function(String $city = 'Brak danych', String $street = ' - ', int $zipCode = null){
    $zipCode = substr($zipCode, 0, 2).'-'.substr($zipCode, 2 , 3);
    echo <<<LABEL
        Kod pocztowy: $zipCode<br>
        Miasto: $city<br>
        Ulica: $street
        <hr>
LABEL;
});

Route::get('/student/glowna/{name?}', function(String $name){
    echo "witaj na stronie glownej $name";
})->where(['name' => '[A-Za-z]+']);
