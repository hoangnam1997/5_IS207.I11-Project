<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ManageCustomerController extends Controller
{
	public function GetCustomers(){
		return view('ManageCustomer.index');
	}
}
