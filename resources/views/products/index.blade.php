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
                    <li class="breadcrumb-item text-nowrap active" aria-current="page"> Shop </li>
                  </ol>
                </nav>
                <!-- Content-->
                <section class="d-md-flex justify-content-between align-items-center mb-4 pb-2">
                  <h1 class="h2 mb-3 mb-md-0 mr-3"><strong> Products Listing </strong> <small class="text-primary">({{ count($products) }})</small> </h1>
                </section>

                  <!-- Partials -->
                  @include('partials.errors')
                  @include('partials.success')

                    <div class="container">
                      <div class="row">
                        <!-- Grid -->
                        <div class="products-grid col-12 sidebar-none">
                          <div class="row">
                            <!-- item-->
                            @foreach ($products as $product)
                              <!-- Product-->
                              <div class="col-lg-3 col-6 px-2 px-sm-2 mb-sm-4 mb-3">
                                <div class="card product-card card-static pb-3">
                                  @if($product->new_price != NULL)
                                    <span class="badge badge-primary badge-shadow"> - {{ $product->percentage }}% </span>
                                  @endif
                                  <a class="card-img-top d-block overflow-hidden" href="/products/{{$product->id}}"><img src="/uploads/products/{{$product->imagefile1}}" alt="{{$product->name}}"></a>
                                  <div class="card-body py-2">
                                    @if($product->status != NULL)
                                      <a href="/products/{{$product->id}}" class="product-meta d-block font-size-xs pb-1">
                                        <i class="fa fa-tag"></i> {{$product->status}} 
                                      </a>
                                    @endif
                                    <h3 class="product-title font-size-sm text-truncate"><a href="/products/{{$product->id}}"> {{$product->name}} </a></h3>
                                    @if($product->new_price != NULL)
                                          <div class="product-price"><span class="text-accent"><strong> <small>UGX</small> {{$product->new_price}} </strong></span>
                                            <del class="font-size-sm text-muted"><small>UGX</small> {{$product->orig_price}}</del>
                                          </div>
                                        @else
                                          <div class="product-price"><span class="text-accent"><strong> <small>UGX</small> {{$product->orig_price}} </span> </strong></div>
                                    @endif
                                  </div>
                                  <div class="product-floating-btn">
                                    <a href="/products/{{$product->id}}" class="btn btn-primary btn-shadow btn-sm">+<i class="czi-cart font-size-base ml-1"></i></a>
                                  </div>
                                </div>
                              </div>
                              <!-- Product -->
                            @endforeach
                            <!-- item -->
                          </div>
                        </div>
                        <!-- / Grid End-->
                      </div>
                    </div>

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