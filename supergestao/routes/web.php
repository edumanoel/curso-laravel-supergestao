<?php

use App\Http\Controllers\HomeController;
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

Route::get('/', 'HomeController@index')->name('site.home');

Route::get('/sobre', 'AboutController@index')->name('site.about');

Route::get('/contato', 'ContactController@index')->name('site.contact');

Route::post('/contato', 'ContactController@index')->name('site.contact');

Route::get('/login', function () {
    return '<h1>Login</h1>';
})->name('site.login');

Route::prefix('/app')->group(function () {
    Route::get('/clientes', function () {
        return '<h1>Clientes</h1>';
    })->name('app.customers');

    Route::get('/fornecedores', function () {
        return '<h1>Fornecedores</h1>';
    })->name('app.suppliers');

    Route::get('/produtos', function () {
        return '<h1>Produtos</h1>';
    })->name('app.products');
});

Route::fallback(function () {
    return 'A rota acessada não existe. <a href="' . route('site.home') . '">Clique aqui</a> para ir para a página inicial.';
});
