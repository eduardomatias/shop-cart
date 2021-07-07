<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
	/**
	 * Obtem um carrinho ou todos os carrinhos
	 *
	 * @param Int $cart_id ID do carrinho
	 * @return JSON
	 * @throws Validator
	 **/
	public function get($cart_id = null)
	{
		# code...
		return response()->json([]);
	}

	/**
	 * Cria um carrinho
	 *
	 * @param Request
	 * @return JSON
	 * @throws Validator
	 **/
	public function create(Request $request)
	{
		# code...
		return response()->json([]);
	}

	/**
	 * Adiciona itens ao carrinho
	 *
	 * @param Request
	 * @param Int $cart_id ID do carrinho
	 * @return JSON
	 * @throws Validator
	 **/
	public function addItem(Request $request, $cart_id)
	{
		# code...
		return response()->json([]);
	}

	/**
	 * Altera um item do carrinho
	 *
	 * @param Request
	 * @param Int $cart_id ID do carrinho
	 * @param Int $item_id ID do item
	 * @return JSON
	 * @throws Validator
	 **/
	public function updateItem(Request $request, $cart_id, $item_id)
	{
		# code...
		return response()->json([]);
	}

	/**
	 * Remove um item do carrinho
	 *
	 * @param Int $cart_id ID do carrinho
	 * @param Int $item_id ID do item
	 * @return JSON
	 * @throws Validator
	 **/
	public function removeItem($cart_id, $item_id)
	{
		# code...
		return response()->json([]);
	}

	/**
	 * Exclui o carrinho
	 *
	 * @param Int $cart_id ID do carrinho
	 * @return JSON
	 * @throws Validator
	 **/
	public function delete($cart_id)
	{
		# code...
		return response()->json([]);
	}

}
