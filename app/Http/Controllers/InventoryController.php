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
        return redirect()->route('datatable')->with('success','Data Berhasil di ditambahkan');
    }

    public function edit($id){

        $data = Inventory::find($id);
        // dd($data);
        return view ('edit', compact('data'));
    }

    public function update(Request $request , $id){
        $data =Inventory::find($id);
        $data->update($request -> all());
        return redirect()->route('datatable')->with('success','Data Berhasil di Update');
    }

    public function delete($id)
    {
        $data = Inventory::find($id);
        $data->delete();
        return redirect()->route('datatable')->with('success', 'Data telah berhasil di hapus');
    }

    public function details($id){

        $data = Inventory::find($id);
        return view ('details',compact ('data'));
    }

}