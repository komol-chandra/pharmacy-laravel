<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;

class AppMainController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('Backend.dashboard');
    }
    public function company_data()
    {
        $customer = Company::where('status',1)->count('');
        return response()->json($customer, 200);
    }
}
