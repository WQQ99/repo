<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterBuyerSellerController extends Controller
{
	public function registerSelection()
	{
		return view('registration-selection');
	}

	public function registerSupplier(Request $request) {
		return view('register.supplier');
	}

	public function registerBuyer(Request $request) {
		return view('register.buyer');
	}

	public function processRegisterSupplier(Request $request) {

	}

	public function processRegisterBuyer(Request $request) {

	}
}
