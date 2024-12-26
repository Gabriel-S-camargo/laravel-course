<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // Agora 'about' refere-se a uma rota nomeada.
    $aboutPageUrl = route('about');

    dd($aboutPageUrl);

    return view('welcome');
});

// Nomeando a rota '/about'
Route::view('/about', 'about')->name('about');



// Exemplo de definição de rota no laravel
/*
Route::get('/product/{id}', function(string $id){
    return "Product ID=$id";
});
*/

// Definindo parametros opicionais em uma rota
/*
Route::get('/product/{category?}', function(string $category = null){
    return "Product for category = $category";
});
*/

// Aqui nessa rota ela apenas sera direcionado a pagina quando o id for um numero, senão ele da 404
Route::get('/product/{id}', function(string $id){
    return "works! $id";
})-> whereNumber('id');

// Nessa Rota o User esta usando um where com uma expressão REGEX(Regular expression)
/*
Route::get('/user/{username}', function(string $username){
    // ...
})-> where('username', '[a-z]+'); 
*/
//Basicamente o user name pode ser de A a Z mas contendo apenas caracteres minusculos

// Aqui Nessa rota tem dois parametos que irão ser usados no where
Route::get('{lang}/product/{id}', function(string $lang, string $id){
    // ...
})-> where(['lang' => '[a-z]{2}', 'id' => '\d{4,}']);
// Aqui o where esta falando que a variavel $lang pode ser de A a Z com até 2 caracteres e a variável $id pode apenas Dígitos(\d) e com no minimo 4 digitos para mais

// Aqui nessa rota é para retornar o que foi pesquisado
Route::get('/search/{search}', function(string $search){
    return $search;
})-> where ("search", '.+');
// Nessa expressão regex basicamente diz que o . deixa que contenha qualquer caracter especial como Barras 

// Aqui vamos mostrar como fazer redirect de rota de uma rota para outra
Route::get('user/profile', function(){}) -> name('profile');

// Quando eu acessar a rota current-user a url ira mudar imediatamente para a '/user/profile'
Route::get('/current-user', function(){
    // return redirect()->route('profile');
    return to_route('profile');
});


// Aqui vamos definir as rotas em grupos todas as rotas devem ter um prefixo de 'admin' + a rota
Route::prefix('admin')->group((function(){

    Route::get('/users', function(){
        return '/admin/users';
    });

}));

// Aqui também é uma definição de Grupo mas apenas o nome da rota que levara o admin
Route::name('admin.')->group(function(){

    Route::get('/users', function(){
        return '/users'; // Aqui vai ter a routa de users mas o nome da rota sera admin.users
    })->name('users');

});

Route::fallback(function(){
    return 'FallBack';
});


Route::get('/calculate/{number1}/{number2}', function(float $number1, float $number2){
    $result = $number1 + $number2;
    return "Sum: $result";
})-> whereNumber(['number1', 'number2']);