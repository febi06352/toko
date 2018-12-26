<?php

namespace App\Http\Controllers;

use App\T_Return;
use Illuminate\Http\Request;

class TReturnController extends Controller
{
    public function create()
    {
        return view('Retur.create');
    }

    public function store(Request $request)
    {
        $Returns = new T_Return();
        $Returns->transaction_id = $request->get('transaction_id');
        $Returns->total = $request->get('total');
        $Returns->note = $request->get('note');
        $Returns->save();
        return redirect('Returns')->with('success', 'Information has been added');
    }

    public function index()
    {
        $Returns = T_Return::all();
        return view('Retur.index', compact('Returns'));
    }

    public function edit($id)
    {
        $Returns = T_Return::find($id);
        return view('Retur.edit', compact('Returns', 'id'));
    }

    public function update(Request $request, $id)
    {
        $Returns = T_Return::find($id);
        $Returns->transaction_id = $request->get('transaction_id');
        $Returns->total = $request->get('total');
        $Returns->note = $request->get('note');
        $Returns->save();
        return redirect('Returns');
    }

    public function destroy($id)
    {
        $Returns = T_Return::find($id);
        $Returns->delete();
        return redirect('Returns')->with('success', 'Information has been  deleted');
    }
}
