<?php

namespace App\Http\Controllers;

use App\Product;
use App\Tag;
use App\ProductTag;
use App\Category;
use App\CategoryProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TagsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $tags = Tag::all()->sortBy('name');
        $categories = Category::all()->sortBy('name');
        //$products = Product::all()->sortByDesc('created_at');
        return view('welcome', ['tags'=>$tags], ['categories'=>$categories]);
    }


    public function addproduct(Request $request, Tag $tag){
        //add product to tag
        if( Auth::check() ){
            
            //take a tag, add a product to it
            $tag = Tag::find($request->input('tag_id'));
            $product = Product::find($request->input('product_id'));

                //check if product is already added to the tag
                $productTag = productTag::where('product_id',$product->id)
                            ->where('tag_id',$tag->id)
                            ->first();
                                        
                if($productTag){
                    //if product already exists, exit
                    return redirect()->route('tags.show', ['tag' => $tag -> id]) 
                        -> with('success', 'This product is already attached to this tag!');         
                }


                if($product && $tag){
                    $tag->products()->attach($product->id);
                    return redirect()->route('tags.show', ['tag' => $tag -> id]) 
                        -> with('success', 'Product successfully added to this tag!');
                }

        }

        return redirect()->route('tags.show', ['tag'=> $tag->id])
        ->with('errors', 'Ooops! Product could\'t be added to this tag!');
        
    }

    public function removeproduct(Request $request, Tag $tag){
        //remove product from tag
        if( Auth::check() ){
            
            //take a tag, remove a product from it
            $tag = tag::find($request->input('tag_id'));
            $product = Product::find($request->input('product_id'));

                //check if product is already added to the tag
                $productTag = productTag::where('product_id',$product->id)
                            ->where('tag_id',$tag->id)
                            ->first();
                                        
                if(!$productTag){
                    //if product doesn't belong to this tag, exit
                    return redirect()->route('tags.show', ['tag' => $tag -> id]) 
                        -> with('success', 'Sorry! You can\'t remove that product because it doesn\'t even belong to this tag!');         
                }


                if($product && $tag){
                    $tag->products()->detach($product->id);
                    return redirect()->route('tags.show', ['tag' => $tag -> id]) 
                        -> with('success', 'Product successfully removed from this tag!');
                }

        }

        return redirect()->route('tags.show', ['tag'=> $tag->id])
        ->with('errors', 'Ooops! Product could\'t be removed from this tag!');
        
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Tag $tag)
    {
        //
        $tag = Tag::find($tag->id);
        //$products = Product::all()->sortBy('name');
        $products = Product::all()->sortByDesc('created_at');
        return view('tags.show', ['tag'=>$tag], ['products'=>$products]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
