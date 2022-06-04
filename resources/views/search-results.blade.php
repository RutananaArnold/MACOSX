@extends('layouts.app')

@section('content')

    <!-- Main -->
      <main class="sidebar-fixed-enabled" style="padding-top: 4rem;">
        <section class="px-lg-3 pt-4">
          <div class="px-3 pt-2">
        
            <!-- Page title + breadcrumb-->
            <nav class="mb-4" aria-label="breadcrumb">
              <ol class="breadcrumb flex-lg-nowrap">
                <li class="breadcrumb-item"><a class="text-nowrap" href="/"><i class="czi-home"></i> @lang('header.welcome') </a></li>
                <li class="breadcrumb-item text-nowrap active" aria-current="page"> @lang('header.searchresults') </li>
              </ol>
            </nav>
            <!-- Content-->
            <section class="d-md-flex justify-content-between align-items-center mb-4 pb-2">
              <h1 class="h2 mb-3 mb-md-0 mr-3">@lang('header.searchresults') <strong>  </strong></h1>
              <div class="d-flex align-items-center">
                @if (count($products) == 0)
                  <div class="d-none d-sm-block py-2 font-size-sm text-muted text-nowrap mr-2"> 0 @lang('header.products_found')</div>
                  @else
                    <div class="d-none d-sm-block py-2 font-size-sm text-muted text-nowrap mr-2"> {{ $products->count() }} @lang('header.products_found')</div>
                @endif
              </div>
            </section>

            <!-- Partials -->
            @include('partials.errors')
            @include('partials.success')

            <main>
                <div class="container">
                    <div class="row">
                      <!-- Grid -->
                      <div class="products-grid col-12 sidebar-none">

                        @if (count($products) == 0)
                          <header class="d-flex justify-content-between align-items-start mb-5">
                              <span class="visible-items lead"> 
                                @lang('header.noproducts_found') <strong> "{{ request()->input('query') }}" </strong> 
                              </span>
                          </header>

                        @else
                          <header class="d-flex justify-content-between align-items-start mb-4"><span class="visible-items lead"> 
                            <strong> {{ $products->count() }} </strong> @lang('header.products_found') @lang('header.for') <strong> "{{ request()->input('query') }}" </strong> </span>
                          </header>

                          <div class="row">
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
                          </div>
                        
                        @endif
                      </div>
                      <!-- / Grid End-->
                    </div>
                </div>
            </main>
  
          </div>
        </section>
    
        <!-- Footer-->
        @include('layouts.footer')
    
      </main>
    <!-- Main -->
    
@endsection