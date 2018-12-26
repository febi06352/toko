<?php

namespace App\Http\Controllers;

use App\ItemCategory;
use App\Student;
use Illuminate\Support\Facades\Hash;

class CobaController extends Controller
{
    public function tes()
    {
        $febi = new Student();
        $febi->name = 'tes';
        $febi->username = 'user1';
        $febi->password = Hash::make('password');
        $febi->save();
    }

    public function index()
    {
        dd(ItemCategory::all()->toArray());
    }

}
