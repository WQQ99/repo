<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterBuyerSellerController extends Controller
{
	public function registerSelection() {
		return view('registration-selection');
	}

}
