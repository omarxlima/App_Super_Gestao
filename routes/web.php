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

Route::get('/', 'PrincipalController@index');

Route::get('/sobrenos', 'SobreNosController@sobreNos');

Route::get('/contato', 'contatoController@contato');





// Route::get('/', function () {
//     return 'Olá seja bem vindo!';
// });

// Route::get('/sobre-nos', function () {
//     return 'sobre nós';
// });

// Route::get('/contato', function () {
//     return 'Contato';
// });

