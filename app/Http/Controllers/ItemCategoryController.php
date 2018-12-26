<?php

namespace App\Http\Controllers;

use App\ItemCategory;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ItemCategoryController extends Controller
{
    public function create()
    {
        return view('ItemCategory.create');
    }

    public function store(Request $request)
    {
        $itemCategory = new ItemCategory();
        $itemCategory->item_name = $request->get('name');
        $itemCategory->save();
        return redirect('items_category')->with('success', 'Information has been added');
    }

    public function index()
    {
        $item_category=ItemCategory::all();
        return view('ItemCategory.index',compact('item_category'));
    }

    public function edit($id)
    {
        $item_category = ItemCategory::find($id);
        return view('ItemCategory.edit',compact('item_category','id'));
    }

    public function update(Request $request, $id)
    {
        $itemCategory= ItemCategory::find($id);
        $itemCategory->item_name=$request->get('name');
        $itemCategory->save();
        return redirect('items_category');
    }

    public function destroy($id)
    {
        $itemCategory = ItemCategory::find($id);
        $itemCategory->delete();
        return redirect('items_category')->with('success','Information has been  deleted');
    }
}
