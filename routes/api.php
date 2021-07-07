<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::group(['prefix' => 'cart'], function () {

	// obtem carrinho ou todos os carrinhos
	Route::get('/{cart_id?}', [CartController::class, 'get']);

	// cria o carrinho
	Route::post('/', [CartController::class, 'create']);
	
	// adiciona itens no carrinho
	Route::post('/{cart_id}/add', [CartController::class, 'addItem']);

	// altera item do carrinho
	Route::put('/{cart_id}/{item_id}', [CartController::class, 'updateItem']);

	// remove item do carrinho
	Route::delete('/{cart_id}/{item_id}/remove', [CartController::class, 'removeItem']);

	// exclui o carrinho
	Route::delete('/{cart_id}', [CartController::class, 'delete']);

});
