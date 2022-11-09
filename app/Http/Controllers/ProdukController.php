<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    //
    public function index(){
        //Ambil data
        $foods = Produk::where("type", "food")->get();
        $drinks = Produk::where("type", "drink")->get();
        $sides = Produk::where("type", "side")->get();
        return view('menu', compact(['foods', 'drinks', 'sides']));
    }

    public function food(){
        //Ambil data
        $foods = Produk::where("type", "food")->get();
        return view('foods', compact('foods'));
    }

    public function drink(){
        //Ambil data
        $drinks = Produk::where("type", "drink")->get();
        return view('drinks', compact('drinks'));
    }

    public function side(){
        //Ambil data
        $sides = Produk::where("type", "side")->get();
        return view('sides', compact('sides'));
    }
}
