<?php

namespace App\Http\Controllers;

use App\Medicine;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MedicineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listData= DB::select(DB::raw('select * from medicines'));
        //dd($listData);

        return view('medicine.index', compact('listData'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('medicine.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        $data= new Medicine();

        $file=$request->file('logo');
        $imgFolder='images';
        $imgFile=time()."_".$file->getClientOriginalName();
        $file->move($imgFolder,$imgFile);
        $data->logo=$imgFile;

        $data->name=$request->get('name');
        $data->description=$request->get('description');
        $data->save();
        return redirect()->route('medicine.index')->with('status','medicine baru berhasil disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //$res = Product::find($product);
        // dd($product);
        $data = $product;
        return view('medicine.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }

    public function showInfo()
    {
    // return response()->json(array(
    //     'status'=>'oke',
    //     'msg'=>"<div class='alert alert-info'>
    //             Did you know? <br>This message is sent by a Controller.'</div>"
    // ),200);

    $result=Medicine::orderBy('price','DESC')->first();
        return response()->json(array(
            'status'=>'oke',
            'msg'=>"<div class='alert alert-info'>
            Did you know? <br>The most expensive product is ". $result->generic_name . "</div>"
        ),200);
    }

    
    public function front_index(){
        $medicine = Medicine::all();
        return view('frontend.medicine',compact('medicine'));
    }

    public function addToCart($id)
    {
        // session()->forget('cart');
        $c = Medicine::find($id);
        $cart = session()->get('cart');
        if(!isset($cart[$id])){
            $cart[$id]=[
                "name"=>$c->name,
                "quantity"=>1,
                "price"=>$c->price,
                "description"=>$c->description
            ];
        } else {
            $cart[$id]['quantity']++;
        }
        session()->put('cart',$cart);
        return redirect()->back()->with('success', 'Product Added to Cart Successfully!');
    }

    public function cart(){
        return view('frontend.cart');
    }

    public function saveDataField(Request $request)
    {
        $id=$request->get('id');
        $fname=$request->get('fname');
        $value=$request->get('value');

        $Medicine = Medicine::find($id);
        $Medicine->$fname=$value;
        $Medicine->save();
        return response()->json(array(
            'status'=>'ok',
            'msg'=>'medicine data updated'
        ),200);
    }

    
}
