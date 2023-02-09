<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $data = Product::all();
        return view('kplayananadmin', compact('data'), [
            "title" => "List Layanan"
        ]);
    }
    public function addlayanan(){
        return view('kpaddlayanan',[
            "title" => "Tambah Layanan"
        ]);
    }
    public function insertdata(Request $request){
        Product::create($request->all());
        return redirect('layanan/admin');
    }
    public function updatedata($id){
        $data = Product::find($id);
        return view('kplayananchange', compact('data'), [
            "title" => "Ubah Layanan"
        ]);
    }
    public function layananchange(Request $request, $id){
        $data = Product::find($id);
        $data->update($request->all());
        return redirect('layanan/admin');
    }
    public function deletedata($id){
        $data = Product::find($id);
        $data->delete();
        return redirect('layanan/admin');
    }
}
