<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use App\CategoryProduct;
use App\Tag;
use App\ProductTag;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $products = Product::all()->sortByDesc('created_at');
        //$products = Product::paginate(4)->sortBy('name');     PAGINATION
        return view('products.index', ['products'=>$products]);
    }

    //Searching For A Product
    public function search(Request $request)
    {
        $query = $request->input('query');
        $products = Product::where('name', 'like', "%$query%")->get();
        return view('search-results')->with('products', $products);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('add-product');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Product $product)
    {
        //
        if(Auth::check()) {

            $request->validate([
                'imagefile1' => 'image|nullable|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'imagefile2' => 'image|nullable|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'imagefile3' => 'image|nullable|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);

            // Handle Image1 Upload
            if($request->hasFile('imagefile1')){
                // Get filename with the extension
                $imagenameWithExt1 = $request->file('imagefile1')->getClientOriginalName();
                // Get just filename
                $imagename1 = pathinfo($imagenameWithExt1, PATHINFO_FILENAME);
                // Get just ext
                $extension = $request->file('imagefile1')->getClientOriginalExtension();
                // Filename to store
                $imageNameToStore1= $imagename1.'_'.time().'.'.$extension;
                // Upload Image 
                $path = $request->file('imagefile1')->move(public_path('uploads/products'), $imageNameToStore1);
            } else {
                $imageNameToStore1 = 'noimage1.png';
            }
            ////////////////////////////////////////////////////////////////////////////////////////////////
            // Handle Image2 Upload
            if($request->hasFile('imagefile2')){
                // Get filename with the extension
                $imagenameWithExt2 = $request->file('imagefile2')->getClientOriginalName();
                // Get just filename
                $imagename2 = pathinfo($imagenameWithExt2, PATHINFO_FILENAME);
                // Get just ext
                $extension = $request->file('imagefile2')->getClientOriginalExtension();
                // Filename to store
                $imageNameToStore2= $imagename2.'_'.time().'.'.$extension;
                // Upload Image 
                $path = $request->file('imagefile2')->move(public_path('uploads/products'), $imageNameToStore2);
            } else {
                $imageNameToStore2 = 'noimage2.png';
            }
            ////////////////////////////////////////////////////////////////////////////////////////////////
            // Handle Image3 Upload
            if($request->hasFile('imagefile3')){
                // Get filename with the extension
                $imagenameWithExt3 = $request->file('imagefile3')->getClientOriginalName();
                // Get just filename
                $imagename3 = pathinfo($imagenameWithExt3, PATHINFO_FILENAME);
                // Get just ext
                $extension = $request->file('imagefile3')->getClientOriginalExtension();
                // Filename to store
                $imageNameToStore3= $imagename3.'_'.time().'.'.$extension;
                // Upload Image 
                $path = $request->file('imagefile3')->move(public_path('uploads/products'), $imageNameToStore3);
            } else {
                $imageNameToStore3 = 'noimage3.png';
            }

            // Add Product
            $product = new Product;
            $product->name = $request->input('name');
            $product->orig_price = $request->input('orig_price');
            $product->new_price = $request->input('new_price');
            $product->percentage = 100-(request()->input('new_price'))/(request()->input('orig_price'))*100;
            $product->stock = $request->input('stock');
            $product->leadtime = $request->input('leadtime');
            $product->brand = $request->input('brand');
            $product->status = $request->input('status');
            $product->sizes = $request->input('sizes');
            $product->colors = $request->input('colors');
            $product->material = $request->input('material');
            $product->reviews = $request->input('reviews');
            $product->apps = $request->input('apps');
            $product->description = $request->input('description');
            $product->deliverables = $request->input('deliverables');
            $product->user_id = Auth::user()->id;
            $product->imagefile1 = $imageNameToStore1;
            $product->imagefile2 = $imageNameToStore2;
            $product->imagefile3 = $imageNameToStore3;
            $product->save();

            //if($product){ 
            //    return redirect()->route('products.show', ['product' => $product -> id]) 
            //    -> with('success', 'New product added successfully!');
            //}
            if($product){
                return back()->with('success', 'Product successfully added!');
            }

        }
        return back()->withInput()->with('errors', 'Sorry! Product could not be created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
        //$query = 'Cool Offer';
        $product = Product::find($product->id);
        $coolProducts = Product::where('status', 'like', "%Cool Offer%")
                    ->inRandomOrder()
                    //->take(16)
                    ->get();
        return view('products.show', ['product'=>$product], ['coolProducts'=>$coolProducts]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
        $product = Product::find($product->id);
        return view('products.edit', ['product'=>$product]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //save updated data
        $productUpdate = Product::where('id', $product->id)
            ->update([
                'name' => $request -> input('name'),
                'orig_price' => $request -> input('orig_price'),
                'new_price' => $request -> input('new_price'),
                'percentage' => 100-(request()->input('new_price'))/(request()->input('orig_price'))*100,
                'stock' => $request -> input('stock'),
                'leadtime' => $request -> input('leadtime'),
                'brand' => $request -> input('brand'),
                'status' => $request -> input('status'),
                'sizes' => $request -> input('sizes'),
                'colors' => $request -> input('colors'),
                'material' => $request -> input('material'),
                'reviews' => $request -> input('reviews'),
                'apps' => $request -> input('apps'),
                'description' => $request -> input('description'),
                'deliverables' => $request -> input('deliverables'),
            ]);

            if($productUpdate) {
                return redirect()->route('products.show', ['product' => $product -> id]) 
                -> with('success', 'Your changes have been made successfully!');
            }

        //redirect if update fails
        return back()->withInput()-> with('errors', 'Sorry! Your changes couldn\'t be made.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
        if(Auth::check()) {
            $findProduct = Product::find($product -> id);
            if($findProduct -> delete()){
                return redirect() -> route('products.index')
                -> with('success', 'Product has been successfully deleted!');
            }
        }
        return back()->withInput()->with('errors', 'Sorry! Product could not be deleted!');
    }
}
