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
// route defaut

//use Illuminate\Routing\Route;

Route::get('/','usuariosController@index');

//-------------------Login --------------------------------------------------
Route::get('usuario_frm_login','usariosController@frmLogin');
Route::post('usuario_executar_login','usuariosController@execurtarLogin');


//----------------logout---------------------------------------------------
//ususario logut
Route::get('usuario_logout', 'usuariosController@logout');

//-------------------recuperar senha -------------------------------------------

Route::get('/usuario_frm_recuperar_senha','usuariosController@frmRecupararSenha');
Route::post('/usuario_executar_recuperar_senha','usuariosController@executarRecuperarSenha');

Route::get('/usuario_email_enviado','usuariosController@emeailenviado');

//--------------------criar conta -------------------------------------------------------

Route::get('/usuario_frm_criar_nova_conta','usuariosController@frmCriarNovaConta');
Route::post('/usuario_executar_criar_conta','usuariosController@executarCriarNovaConta');

// routes interior do sistema
Route::get('aplicacao_index','aplicacaoControler@apresentarPaginaInicial');

// video parou no incio do 83 tempo 17:40