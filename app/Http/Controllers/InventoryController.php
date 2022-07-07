<?php

namespace App\Http\Controllers;

use App\Models\Inventory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class InventoryController extends Controller
{
    public function index(){

        return view('input');
    }

    public function data(){
        $data = Inventory::all();
        // dd($data);
        return view('datatable', compact('data'));
    }

    public function insert(Request $request){

        // dd($request->all());
        Inventory::create($request->all());
        return redirect()->route('datatable');
    }


}
