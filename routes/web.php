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

// index
Route::get("/admin", "AdminController@index")->name("admin.index");

// show
Route::get("/admin/pizzas/{pizza}", "AdminController@show")->name("admin.show");

// create
Route::get("/admin/create", "AdminController@create")->name("admin.create");
Route::post("/admin", "AdminController@store")->name("admin.store");

// edit
Route::get("/admin/{pizza}/edit", "AdminController@edit")->name("admin.edit");
Route::put("/admin/{pizza}", "AdminController@update")->name("admin.update");

// delate
Route::delete("/admin/{pizza}", "AdminController@destroy")->name("admin.destroy");
