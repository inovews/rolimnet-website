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
	Route::post('enviar', ['as' => 'enviar', 'uses' => 'Front\FiberController@store']);
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
	Route::post('whatsapp', ['as' => 'whatsapp', 'uses' => 'Front\SupportController@whatsapp']);
});
Route::group(['prefix' => 'planos', 'as' => 'planos.'], function() // SUPORTE
{
	Route::get('/', ['as' => 'index', 'uses' => 'Front\PlanController@index']);
	Route::get('cidade/{slug}',['as' => 'cidade', 'uses' => 'Front\PlanController@show'])->where('slug', '[A-Za-z0-9-_]+');
	Route::get('city/{id}', function($id = null){
	    return Response()->json(\App\Front\Plan::where('plan_city_id', $id)->orderBy('name')->get());
	    //return Response()->json(\App\Front\Plan::pluck('id','name')->all()); 
	});
});

// BLACK CENTRAL-DO-CLIENTE
Auth::routes();
//Route::get('/home', 'HomeController@index');

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
	Route::resource('planscities', 'Black\Sys\PlanCityController');

});


// BLACK ADMIN
Route::group(['prefix' => 'central-cliente', 'as' => 'centralcliente.'], function()
{

	Route::get('/', ['as' => 'index', 'uses' => 'Front\CentralCliente\DashboardController@index']);
	Route::get('home', ['as' => 'home', 'uses' => 'Front\CentralCliente\DashboardController@index']);
	Route::post('login', ['as' => 'login', 'uses' => 'Auth\LoginController@login']);
	Route::get('login', ['as' => 'login', 'uses' => 'Auth\LoginController@showLoginForm']);

	Route::get('register', ['as' => 'register', 'uses' => 'Auth\RegisterController@showRegistrationForm']);
	Route::post('register', ['as' => 'register', 'uses' => 'Auth\RegisterController@register']);

	Route::post('logout', ['as' => 'logout', 'uses' => 'Auth\LoginController@logout']);

	Route::group(['prefix' => 'password', 'as' => 'password.'], function()
	{
		Route::post('email', ['as' => 'email', 'uses' => 'Auth\ForgotPasswordController@sendResetLinkEmail']);
		Route::get('reset', ['as' => 'reset', 'uses' => 'Auth\ForgotPasswordController@showLinkRequestForm']);
		Route::post('reset', ['as' => 'reset', 'uses' => 'Auth\ResetPasswordController@reset']);
		Route::get('reset/{token}', ['as' => 'reset', 'uses' => 'Auth\ResetPasswordController@showResetForm']);
	});

	Route::resource('tickets', 'Front\CentralCliente\TicketsController');
	Route::resource('account', 'Front\CentralCliente\AccountController');
	//Route::resource('finance', 'Front\CentralCliente\FinanceController');

	Route::group(['prefix' => 'finance', 'as' => 'finance.'], function()
	{
		Route::get('/', ['as' => 'index', 'uses' => 'Front\CentralCliente\FinanceController@index']);

		Route::get('contract', ['as' => 'contract', 'uses' => 'Front\CentralCliente\FinancesContractController@index']);
		Route::get('cancel', ['as' => 'cancel', 'uses' => 'Front\CentralCliente\FinanceController@cancel']);
	});
});