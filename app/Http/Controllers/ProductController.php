<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ArtikalCreateRequest;
use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return view('products.index');
    }
    public function pocetna()
    {
      $products = Product::all();
      return view('products.pocetna', compact('products'));
    }
    public function artikli()
    {
      $products = Product::all();
      return view('products.artikli', compact('products'));
    }
    public function kontakt()
    {
      return view('products.kontakt');
    }
  

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ArtikalCreateRequest $request)
    {
      // return $request;
      $user = Auth::user();
      // return $user;
      $input = $request->all();
      $input['user_id'] = $user->id;
      $file = $request->photo;
      $name = $file->getClientOriginalName();
      $file->move('images', $name);
      $input['photo'] = $name;
      Product::create($input);
      Session::flash('artikal-created-message', 'Artikal uspjesno napravljen!');
      return redirect('/artikli');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $product = Product::findOrFail($id);
      return view('products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $product = Product::findOrFail($id);
      $input = $request->all();
      if ($request->photo) {
        $file = $request->photo;
        $name = $file->getClientOriginalName();
        $file->move('images', $name);
        $input['photo'] = $name;
      }
      $product->update($input);
      Session::flash('artikal-updated-message', 'Artikal je uspjesno uredjen!');
      return redirect('/artikli');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      if($product)
      $product = Product::findOrFail($id);
      unlink(public_path('\images\\' . $product->photo));
      $product->delete();
      Session::flash('artikal-deleted-message', 'Artikal je uspjesno izbrisan!');
      return redirect('/artikli');
    }
}
