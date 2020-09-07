<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;

class InvoiceController extends Controller
{
    public function index(){

    }


    public function show(Request $request, $id){

        if ($request->user()->can('list-invoice')) {

            $invoice = Invoice::findOrFail($id);

            return view('invoices.show', compact('invoice'));
        }else{
            abort(401);
        }

    }

    public function create(Request $request){
        if ($request->user()->can('create-invoice')) {
            return view('invoices.create');
        }else{
            abort(401);
        }
    }

    public function store(Request $request){

        if ($request->user()->can('create-invoice')) {

            $this->validate($request, [
                'number'=>'required',
                'invoice_date'=>'required',
                'supply_date'=>'required',
                'comment'=>'required',
            ]);

            $invoice = new Invoice();
            $invoice->number = $request->number;
            $invoice->invoice_date = Carbon::parse($request->invoice_date);
            $invoice->supply_date = Carbon::parse($request->supply_date);
            $invoice->comment = $request->comment;
            $invoice->save();
            Session::flash('flash_message', 'Invoice was  successfully added!');
            return redirect()->route('home');

        }
        else{
            abort(401);
        }
    }

    public function edit(Request $request, $id){
        if ($request->user()->can('update-invoice')) {

            $invoice = Invoice::findOrFail($id);

            return view('invoices.edit', compact('invoice'));
        }else{
            abort(401);
        }

    }

    public function update(Request $request, $id){

        if ($request->user()->can('update-invoice')) {

            $this->validate($request, [
                'number'=>'required',
                'invoice_date'=>'required',
                'supply_date'=>'required',
                'comment'=>'required',
            ]);

            $invoice = Invoice::findOrFail($id);
            $invoice->number = $request->number;
            $invoice->invoice_date = Carbon::parse($request->invoice_date);
            $invoice->supply_date = Carbon::parse($request->supply_date);
            $invoice->comment = $request->comment;
            $invoice->save();
            Session::flash('flash_message', 'Invoice was  successfully updated!');
            return redirect()->route('home');
        }
        else{
            abort(401);
        }

    }

    public function destroy(Request $request,$id){

        if ($request->user()->can('delete-invoice')) {
        $invoice = Invoice::findOrFail($id);
        $invoice->delete();
        Session::flash('flash_message', 'Invoice was successfully deleted!');
        return redirect()->route('home');
        }else{
            abort(401);
        }
    }



}
