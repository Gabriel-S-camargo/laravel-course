<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // $person = [
    //     "name" => "Gabriel",
    //     "email" => "teste@teste.com"
    // ];    
    // dump($person);
    return view('welcome');
});

Route::view('/about', 'about');

Route::get('/product/{id}', function(string $id){
    return "Product ID=$id";
});
