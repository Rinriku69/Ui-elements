<?php

use App\Http\Controllers\AreaController;
use App\Http\Controllers\ExampleController;
use App\Http\Controllers\MulController;
use App\Http\Controllers\PayController;
use Illuminate\Support\Facades\Route;
use PHPUnit\TextUI\XmlConfiguration\Group;

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


Route::controller(AreaController::class)
    ->prefix('/area')
    ->name('area.')
    ->group(static function(){
      route::get('','showForm') ->name('form');
      route::post('','showResult') ->name('result');
    });
    
Route::controller(ExampleController::class)
 ->prefix('/example')
 ->name('example.')
 ->group(static function(){
    route::get('','showForm')->name('form');
    route::post('','showResult')->name('result');
 });

Route::controller(MulController::class)
 ->prefix('/multiply')
 ->name('multiply.')
 ->group(static function(){
route::get('','showForm')->name('form');
route::get('/result','showResult')->name('result');
 });


 Route::controller(PayController::class)
 ->prefix('/payment')
 ->name('payment.')
 ->group(static function(){
    route::get('','showForm')->name('form');
    route::post('','showResult')->name('result');
 });
 