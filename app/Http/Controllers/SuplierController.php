<?php

namespace App\Http\Controllers;

use App\Suplier;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class SuplierController extends Controller
{
    public function create()
    {
        return view('Suplier.create');
    }

    public function store(Request $request)
    {
        $Suplier = new Suplier();
        $Suplier->name = $request->get('name');
        $Suplier->address = $request->get('address');
        $Suplier->phone = $request->get('phone');
        $Suplier->save();
        return redirect('Suplier')->with('success', 'Information has been added');
    }

    public function index()
    {
        $Suplier = Suplier::all();
        return view('Suplier.index', compact('Suplier'));
    }

    public function edit($id)
    {
        $Suplier = Suplier::find($id);
        return view('Suplier.edit', compact('Suplier', 'id'));
    }

    public function update(Request $request, $id)
    {
        $Suplier = Suplier::find($id);
        $Suplier->name = $request->get('name');
        $Suplier->address = $request->get('address');
        $Suplier->phone = $request->get('phone');
        $Suplier->save();
        return redirect('Suplier');
    }

    public function destroy($id)
    {
        $Suplier = Suplier::find($id);
        $Suplier->delete();
        return redirect('Suplier')->with('success', 'Information has been  deleted');
    }
}
