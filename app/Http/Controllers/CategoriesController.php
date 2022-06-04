<?php

namespace App\Http\Controllers;

use App\Product;
use App\Tag;
use App\ProductTag;
use App\Category;
use App\CategoryProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //$categories = Category::all()->sortByDesc('id');
        //return view('categories.index', ['categories'=>$categories]);
        
        /*
        $productsCount = Product::all();
        $products = Product::inRandomOrder()->paginate(16);
        return view('categories.index',compact('products'), ['productsCount'=>$productsCount]);
        */

        $tags = Tag::all()->sortBy('name');
        $categories = Category::all()->sortBy('name');
        //$products = Product::all()->sortByDesc('created_at');
        return view('welcome', ['tags'=>$tags], ['categories'=>$categories]);

    }


    public function addproduct(Request $request, Category $category){
        //add product to category
        if( Auth::check() ){
            
            //take a category, add a product to it
            $category = Category::find($request->input('category_id'));
            $product = Product::find($request->input('product_id'));

                //check if product is already added to the category
                $categoryProduct = categoryProduct::where('product_id',$product->id)
                            ->where('category_id',$category->id)
                            ->first();
                                        
                if($categoryProduct){
                    //if product already exists, exit
                    return redirect()->route('categories.show', ['category' => $category -> id]) 
                        -> with('success', 'This product is already attached to this category!');         
                }


                if($product && $category){
                    $category->products()->attach($product->id);
                    return redirect()->route('categories.show', ['category' => $category -> id]) 
                        -> with('success', 'Product successfully added to this category!');
                }

        }

        return redirect()->route('categories.show', ['category'=> $category->id])
        ->with('errors', 'Ooops! Product could\'t be added to this category!');
        
    }

    public function removeproduct(Request $request, Category $category){
        //remove product from category
        if( Auth::check() ){
            
            //take a category, remove a product from it
            $category = Category::find($request->input('category_id'));
            $product = Product::find($request->input('product_id'));

                //check if product is already added to the category
                $categoryProduct = categoryProduct::where('product_id',$product->id)
                            ->where('category_id',$category->id)
                            ->first();
                                        
                if(!$categoryProduct){
                    //if product doesn't belong to this category, exit
                    return redirect()->route('categories.show', ['category' => $category -> id]) 
                        -> with('success', 'Sorry! You can\'t remove that product because it doesn\'t even belong to this category!');         
                }


                if($product && $category){
                    $category->products()->detach($product->id);
                    return redirect()->route('categories.show', ['category' => $category -> id]) 
                        -> with('success', 'Product successfully removed from this category!');
                }

        }

        return redirect()->route('categories.show', ['category'=> $category->id])
        ->with('errors', 'Ooops! Product could\'t be removed from this category!');
        
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
    public function show(Category $category)
    {
        //
        $category = Category::find($category->id);
        //$products = Product::all()->sortBy('name');
        $products = Product::all()->sortByDesc('created_at');
        return view('categories.show', ['category'=>$category], ['products'=>$products]);
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
