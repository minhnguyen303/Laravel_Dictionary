<?php

use Illuminate\Http\Request;
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
Route::post('/', function (Request $request){
    $dictionary = [
        'dog'=>'chó',
        'cat'=>'mèo',
        'home'=>'nhà'
    ];

    $word = $request->word;

    $result = (isset($dictionary[$word])) ? ("$word => ".$dictionary[$word]) : 'Không dịch được từ này!';

    return view('welcome', compact('result'));
});
