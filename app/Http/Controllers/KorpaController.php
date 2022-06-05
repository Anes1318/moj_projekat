<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Cart;
use App\Models\Product;

class KorpaController extends Controller
{
  public function viewkorpa()
  {
    if(!Session::has('cart')){
      return view('products.korpa');
    }
    $oldCart = Session::get('cart');
    $cart = new Cart($oldCart);
    return view('products.korpa', ['products' => $cart -> items, 'totalPrice' => $cart -> totalPrice]);
  }
  public function dodajkorpa(Request $request)
  {
    $id = $request->id;
    $product = Product::findOrFail($id);
    $oldCart = Session::has('cart') ? Session::get('cart') : null;
    $cart = new Cart($oldCart);
    $cart->add($product, $product->id);
    $request->session()->put('cart', $cart);
    // dd($request->session()->get('cart'));
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
