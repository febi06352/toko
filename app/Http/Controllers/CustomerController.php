<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class CustomerController extends Controller
{
    public function create()
    {
        return view('Customer.create');
    }

    public function store(Request $request)
    {
        $Customer = new Customer();
        $Customer->name = $request->get('name');
        $Customer->address = $request->get('address');
        $Customer->phone = $request->get('phone');
        $Customer->save();
        return redirect('Customer')->with('success', 'Information has been added');
    }

    public function index()
    {
        $Customer = Customer::all();
        return view('Customer.index', compact('Customer'));
    }

    public function edit($id)
    {
        $Customer = Customer::find($id);
        return view('Customer.edit', compact('Customer', 'id'));
    }

    public function update(Request $request, $id)
    {
        $Customer = Customer::find($id);
        $Customer->name = $request->get('name');
        $Customer->address = $request->get('address');
        $Customer->phone = $request->get('phone');
        $Customer->save();
        return redirect('Customer');
    }

    public function destroy($id)
    {
        $Customer = Customer::find($id);
        $Customer->delete();
        return redirect('Customer')->with('success', 'Information has been  deleted');
    }
}
