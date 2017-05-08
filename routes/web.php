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

// FRONT
Route::get('/', ['as' => 'welcome.index', 'uses' => 'Front\WelcomeController@index']);
Route::group(['prefix' => 'empresa', 'as' => 'empresa.'], function() // EMPRESA
{
	Route::get('/', ['as' => 'index', 'uses' => 'Front\AboutController@index']);
});
Route::group(['prefix' => 'produtos', 'as' => 'produtos.'], function() // PRODUTOS
{
	Route::get('/', ['as' => 'index', 'uses' => 'Front\ProductController@index']);
});

//Route::get('/fibra', ['as' => 'fibra.index', 'uses' => 'Front\FiberController@index']); // FIBRA
Route::group(['prefix' => 'fibra', 'as' => 'fibra.'], function() // FIBRA
{
	Route::get('/', ['as' => 'index', 'uses' => 'Front\FiberController@index']);
	Route::post('enviar', ['as' => 'enviar', 'uses' => 'Front\ContactController@store']);
});

Route::group(['prefix' => 'contato', 'as' => 'contato.'], function() // CONTATO
{
	Route::get('/', ['as' => 'index', 'uses' => 'Front\ContactController@index']);
	Route::post('enviar', ['as' => 'enviar', 'uses' => 'Front\ContactController@send']);
});

Route::group(['prefix' => 'documentos-publicos', 'as' => 'documentos.'], function() // DOCUMENTOS PUBLICOS
{
	Route::get('/', ['as' => 'index', 'uses' => 'Front\DocumentController@index']);
});

Route::group(['prefix' => 'faq', 'as' => 'faq.'], function() // FAQ
{
	Route::get('/', ['as' => 'index', 'uses' => 'Front\FaqController@index']);
	Route::get('/{slug}', ['as' => 'slug', 'uses' => 'Front\FaqController@show'])->where('slug', '[\w\d\-\_]+');
});

Route::group(['prefix' => 'ouvidoria', 'as' => 'ouvidoria.'], function() // OUVIDORIA
{
	Route::get('/', ['as' => 'index', 'uses' => 'Front\OmbudsmanController@index']);
	Route::post('enviar', ['as' => 'enviar', 'uses' => 'Front\OmbudsmanController@send']);
});

Route::group(['prefix' => 'suporte', 'as' => 'suporte.'], function() // SUPORTE
{
	Route::get('/', ['as' => 'index', 'uses' => 'Front\SupportController@index']);
	Route::post('enviar', ['as' => 'enviar', 'uses' => 'Front\SupportController@send']);
});

// BLACK CENTRAL-DO-CLIENTE
Auth::routes();
Route::get('/home', 'HomeController@index');

// BLACK ADMIN
Route::group(['prefix' => 'admin', 'as' => 'admin.'], function()
{
	Route::get('/', 'Black\AdminController@index');
	Route::get('home', ['as' => 'home', 'uses' => 'Black\AdminController@index']);
	Route::post('login', ['as' => 'login', 'uses' => 'Black\LoginController@login']);
	Route::get('login', ['as' => 'login', 'uses' => 'Black\LoginController@showLoginForm']);
	Route::post('logout', ['as' => 'logout', 'uses' => 'Black\LoginController@logout']);

	Route::group(['prefix' => 'password', 'as' => 'password.'], function()
	{
		Route::post('email', ['as' => 'email', 'uses' => 'Black\ForgotPasswordController@sendResetLinkEmail']);
		Route::get('reset', ['as' => 'reset', 'uses' => 'Black\ForgotPasswordController@showLinkRequestForm']);
		Route::post('reset', ['as' => 'reset', 'uses' => 'Black\ResetPasswordController@reset']);
		Route::get('reset/{token}', ['as' => 'reset', 'uses' => 'Black\ResetPasswordController@showResetForm']);
	});

	/*Route::group(['prefix' => 'banners', 'as' => 'banners.'], function() // BANNERS-ADMIN 
	{
		Route::get('/', ['as' => 'index', 'uses' => 'Black\Sys\BannerController@index']);
		Route::post('enviar', ['as' => 'enviar', 'uses' => 'Black\Sys\BannerController@send']);
	});*/
	Route::resource('banners', 'Black\Sys\BannerController');
	Route::resource('faqs', 'Black\Sys\FaqController');
	Route::resource('files', 'Black\Sys\FileController');
	Route::resource('fibers', 'Black\Sys\FiberController');
	Route::resource('supports', 'Black\Sys\SupportController');
	Route::resource('documents', 'Black\Sys\DocumentController');
	Route::resource('plans', 'Black\Sys\PlanController');

});
