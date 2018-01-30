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
		return view('registration.supplier');
	}

	public function registerBuyer(Request $request) {
		return view('registration.buyer');
	}

}
