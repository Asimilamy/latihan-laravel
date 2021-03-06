<?php

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

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Models\Example;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/example', function () {
    $result = Example::all()->where('id', '5');
    return $result;
});

Route::view('latihan_crud', 'pages.test');

Route::name('item')->group(function () {
    Route::get('item', ['uses' => 'Master\ItemController@index']);
    Route::get('item/getDataTable', ['uses' => 'Master\ItemController@getDataTable', 'as' => '.getDataTable']);
    Route::get('item/form', ['uses' => 'Master\ItemController@form', 'as' => '.form']);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
