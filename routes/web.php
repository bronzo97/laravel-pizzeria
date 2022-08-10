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

// index

Route::get('/', function () {
    return view('pizzas.index');
});

Route::get("/", "PizzaController@index")->name("pizzas.index");
Route::get("/pizzas/{pizza}", "PizzaController@show")->name("pizzas.show");


// Admin

Route::get('/admin', function () {
    return view('admin.index');
});

Route::get("/admin", "AdminController@index")->name("admin.index");
// Route::get("/admin/pizzas/{pizza}", "PizzaController@show")->name("admin.show");

