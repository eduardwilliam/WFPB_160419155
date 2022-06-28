<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listcategory= DB::select(DB::raw('select * from categories'));
        //dd($listData);

        return view('category.index', compact('listcategory'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=new Category();
        $data->name=$request->get('name');
        $data->description=$request->get('description');
        $data->save();

        return redirect()->route('kategori.index')->with('status','Category is added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        $data = Category::find($id);
        // dd($data);
        return view('category.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $category = Category::find($id);
        $category->name=$request->get('name');
        $category->description=$request->get('description');
        $category->save();
        return redirect()->route('kategori.index')->with('status','Category data is changed');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        $category = Category::find($id);
        try {
            $category->delete();
            return redirect()->route('kategori.index')->with('status','Category data is deleted');
        } catch (\PDOException $e) {
            $msg="Data gagal dihapus";

            return redirect()->route('kategori.index')->with('error',$msg);
        }
    }
    
    public function getEditForm(Request $request){
        $id=$request->get('id');
        $data=Category::find($id);
        return response()->json(array(
            'status'=>'oke',
            'msg'=>view('category.getEditForm',compact('data'))->render()
        ),200);
    }

}
