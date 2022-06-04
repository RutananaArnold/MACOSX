@extends('layouts.app')

@section('content')

    <!-- Main -->
      <main class="sidebar-fixed-enabled" style="padding-top: 4rem;">
        <section class="px-lg-3 pt-4">
          <div class="px-3 pt-2">

            @if ( (Auth::check()) && (Auth::user()->role_id != 1) )

                    <!-- Page title + breadcrumb-->
                    <nav class="mb-4" aria-label="breadcrumb">
                    <ol class="breadcrumb flex-lg-nowrap">
                        <li class="breadcrumb-item"><a class="text-nowrap" href="/"><i class="czi-home"></i>Welcome</a></li>
                        <li class="breadcrumb-item"><a class="text-nowrap" href="/products"><i class="czi-cart"></i>Products</a></li>
                        <li class="breadcrumb-item text-nowrap active" aria-current="page">Edit Product</li>
                    </ol>
                    </nav>
                    <!-- Content-->
                    <section class="d-md-flex justify-content-between align-items-center mb-4 pb-2">
                    <h1 class="h2 mb-3 mb-md-0 mr-3 text-primary"><strong> <i class="fa fa-edit text-primary"></i> Edit Product </strong></h1>
                    <div class="d-flex align-items-center">
                        <div class="d-none d-sm-block py-2 font-size-sm text-muted text-nowrap mr-2">
                            <a href="/products/{{$product->id}}"> <i class="fa fa-backward"></i> Back to Product </a>
                        </div>
                    </div>
                    </section>

                    <!-- Edit Product-->
                    <section class="mb-5">
                        <div class="container">
                            <header class="mb-5">
                                <span class="lead"> Make changes to the <strong class="text-primary"> {{$product->name}} </strong>
                                    <br/><small><strong>NB:</strong> Please note that the product image(s) cannot be changed.</small>
                                </span>
                            </header>
                            <div class="row">
                                <div class="col-md-12">
                                    <form method="post" action="{{ route('products.update', [$product -> id]) }}" class="custom-form form">
                                        {{ csrf_field() }}

                                        <input type="hidden" name="_method" value="put">

                                        <div class="controls">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                @if ($product->new_price != NULL)
                                                    <div class="form-group mb-0">
                                                        @csrf
                                                        <input type="hidden" name="percentage" class="form-control" id="percentage"/>
                                                    </div>
                                                @endif
                                                <div class="form-group">
                                                    <label for="name" class="form-label"> Name *</label>
                                                    <input type="text" name="name" id="name" placeholder="Enter product name" value="{{$product->name}}" required="required" class="form-control">
                                                </div>
                                                </div>
                                                <div class="col-sm-3">
                                                <div class="form-group">
                                                    <label for="orig_price" class="form-label">Original Price * </label>
                                                    <input type="integer" name="orig_price" id="orig_price" placeholder="Enter original price" value="{{$product->orig_price}}" required="required" class="form-control">
                                                </div>
                                                </div>
                                                <div class="col-sm-3">
                                                <div class="form-group">
                                                    <label for="new_price" class="form-label">New Price <code class="small text-primary">(Optional)</code> </label>
                                                    <input type="integer" name="new_price" id="new_price" placeholder="Enter discounted or fresh price" value="{{$product->new_price}}" class="form-control">
                                                </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-3">
                                                <div class="form-group">
                                                    <label for="brand" class="form-label">Brand <code class="small text-primary">(Optional)</code> </label>
                                                    <input type="text" name="brand" id="brand" placeholder="e.g Generic, Adidas, Philips, CK, Zara" value="{{$product->brand}}" class="form-control">
                                                </div>
                                                </div>
                                                <div class="col-sm-3">
                                                <div class="form-group">
                                                    <label for="status" class="form-label">Status <code class="small text-primary">(Optional)</code> </label>
                                                    <input type="text" name="status" id="status" placeholder="e.g New, Cool Offer, Week Deal" value="{{$product->status}}" class="form-control">
                                                </div>
                                                </div>
                                                <div class="col-sm-3">
                                                <div class="form-group">
                                                    <label for="sizes" class="form-label"> Available Sizes <code class="small text-primary">(Optional)</code> </label>
                                                    <input type="text" name="sizes" id="sizes" placeholder="e.g. Small, Medium, Large, All" value="{{$product->sizes}}" class="form-control">
                                                </div>
                                                </div>
                                                <div class="col-sm-3">
                                                <div class="form-group">
                                                    <label for="colors" class="form-label"> Available Colors <code class="small text-primary">(Optional)</code> </label>
                                                    <input type="text" name="colors" id="colors" placeholder="e.g. Red, Blue, Black, All" value="{{$product->colors}}" class="form-control">
                                                </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-3">
                                                <div class="form-group">
                                                    <label for="material" class="form-label">Material <code class="small text-primary">(Optional)</code> </label>
                                                    <input type="text" name="material" id="material" placeholder="e.g Cotton, Steel, Leather, Rubber" value="{{$product->material}}" class="form-control">
                                                </div>
                                                </div>
                                                <div class="col-sm-3">
                                                <div class="form-group">
                                                    <label for="reviews" class="form-label"> Number of Reviews * </label>
                                                    <input type="text" name="reviews" id="reviews" placeholder="e.g. 239, 52, 174" value="{{$product->reviews}}" required="required" class="form-control">
                                                </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <label for="stock" class="form-label"> Stock Available <code class="small text-primary">(Optional)</code> </label>
                                                        <input type="number" name="stock" id="stock" placeholder="e.g. 20, 250, 1500" value="{{$product->stock}}" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <label for="leadtime" class="form-label"> Lead Time <code class="small text-primary">(Optional)</code> </label>
                                                        <input type="number" name="leadtime" id="leadtime" placeholder="e.g. 3, 14, 28" value="{{$product->leadtime}}" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="apps" class="form-label">Applications <code class="small text-primary">(Optional)</code> </label>
                                                        <input type="text" name="apps" id="apps" placeholder="What are some of its uses?" value="{{$product->apps}}" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="deliverables" class="form-label">Edit Deliverables <code class="small text-primary">(Optional)</code> </label>
                                                    <input name="deliverables" id="deliverables" placeholder="Change your list of deliverables" value="{{$product->deliverables}}" spellcheck="true" class="form-control">
                                                </div>
                                                </div>
                                                <div class="col-sm-12">
                                                <div class="form-group">
                                                    <label for="description" class="form-label">Edit Description *</label>
                                                    <input name="description" id="description" placeholder="Re-describe this product" value="{{$product->description}}" spellcheck="true" class="form-control">
                                                </div>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-primary wide"><i class="fa fa-save"></i> Save Changes </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Edit Product-->

                @else

                    <div class="container py-5 mb-lg-3">
                        <div class="row justify-content-center pt-lg-4 text-center">
                            <div class="col-lg-5 col-md-7 col-sm-9">
                            <h1 class="display-404">404</h1>
                            <h2 class="h3 mb-4">Sorry, we can&apos;t find the page you are looking for.</h2>
                            <p class="font-size-md mb-4">
                                <u>Some Helpful Links</u>
                            </p>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-xl-8 col-lg-10">
                            <div class="row">
                                <div class="col-sm-4 mb-3"><a class="card h-100 border-0 box-shadow-sm" href="/">
                                    <div class="card-body">
                                    <div class="media align-items-center"><i class="czi-home text-primary h4 mb-0"></i>
                                        <div class="media-body pl-3">
                                        <h5 class="font-size-sm mb-0">Home</h5><span class="text-muted font-size-ms">Start from home</span>
                                        </div>
                                    </div>
                                    </div></a></div>
                                <div class="col-sm-4 mb-3"><a class="card h-100 border-0 box-shadow-sm" href="#">
                                    <div class="card-body">
                                    <div class="media align-items-center"><i class="czi-search text-primary h4 mb-0"></i>
                                        <div class="media-body pl-3">
                                        <h5 class="font-size-sm mb-0">Search</h5><span class="text-muted font-size-ms">Find with ease</span>
                                        </div>
                                    </div>
                                    </div></a></div>
                                <div class="col-sm-4 mb-3"><a class="card h-100 border-0 box-shadow-sm" href="/contact-us">
                                    <div class="card-body">
                                    <div class="media align-items-center"><i class="czi-phone text-primary h4 mb-0"></i>
                                        <div class="media-body pl-3">
                                        <h5 class="font-size-sm mb-0">Contact Us</h5><span class="text-muted font-size-ms">Get assistance here</span>
                                        </div>
                                    </div>
                                    </div></a></div>
                            </div>
                            </div>
                        </div>
                    </div>    
            @endif

        </div>
    </section>

  </main>
<!-- Main -->

@endsection