<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use Illuminate\Http\Request;

class DemoController extends Controller
{

    public function index(){
        $invoices = Invoice::all();
            return view('welcome', compact('invoices'));
    }

}
