<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Korpa;
use App\Models\Product;

class KorpaController extends Controller
{
  public function viewkorpa()
  {

    $products = Product::all();
    $korpa = request()->session()->get('korpa');

    return view('products.korpa', compact('products', 'korpa'));
  }
  public function dodajkorpa(Request $request)
  {
    $korpa = request()->korpa;
    // $product = Product::findOrFail($id);

    Session::push('korpa', $korpa);
    // dd(session()->all());
    Session::flash('productKorpa-added-message', 'Uspjesno dodato u korpu!');
    return back();
  }
  public function smanji(Request $request)
  {

  }
  public function uklonikorpasve()
  {
    session()->flush();
    Session::flash('korpa-uklonjeno-message', 'Uspjesno uklonjeno iz korpe!');
    return back();
  }
  public function ukloni_korpa(Request $request)
  {

  }
}
