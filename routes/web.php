<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Http\Controllers\HomeController@index')->name("home.index");

Route::get('/about', function () {
    $data1 = "About us - Online Store";
    $data2 = "About us";
    $description = "This is an about page ...";
    $author = "Developed by: Your Name";
    return view('home.about')->with("title", $data1)
        ->with("subtitle", $data2)
        ->with("description", $description)
        ->with("author", $author);
})->name("home.about");

Route::get('/contact', function () {
    $data1 = "Contact us - Online Store";
    $data2 = "Contact us";
    $email = "contact@example.com";
    $phone = "(555) 555-5555";
    $address = "123 Fake Street, Springfield, USA";
    return view('home.contact')->with("title", $data1)
        ->with("subtitle", $data2)
        ->with("email", $email)
        ->with("phone", $phone)
        ->with("address", $address);
})->name("home.contact");

Route::get('/products', 'App\Http\Controllers\ProductController@index')->name("product.index");
Route::get('/products/create', 'App\Http\Controllers\ProductController@create')->name("product.create");
Route::post('/products/save', 'App\Http\Controllers\ProductController@save')->name("product.save");
Route::get('/products/success', function () {
    return view('product.success');
})->name('product.success');
Route::get('/products/{id}', 'App\Http\Controllers\ProductController@show')->name("product.show");



