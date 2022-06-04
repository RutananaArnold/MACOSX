@extends('layouts.app')

@section('content')

    <!-- Main -->
      <main class="sidebar-fixed-enabled" style="padding-top: 4rem;">
        <section class="px-lg-3 pt-4">
            <div class="px-3 pt-2">

                <!-- Partials -->
                @include('partials.errors')
                @include('partials.success')

                <nav class="mb-4" aria-label="breadcrumb">
                    <ol class="breadcrumb flex-lg-nowrap">
                    <li class="breadcrumb-item"><a class="text-nowrap" href="/"><i class="czi-home"></i> @lang('header.welcome') </a></li>
                    <li class="breadcrumb-item"><a class="text-nowrap" href="/categories"><i class="czi-cart"></i> @lang('header.shop') </a></li>
                    <li class="breadcrumb-item text-nowrap active" aria-current="page">{{$product->name}}</li>
                    </ol>
                </nav>

                <!-- Product -->
                <section class="row no-gutters mx-n2 pb-5 mb-xl-3">
                    <div class="col-xl-7 px-2 mb-3">
                        <div class="h-100 bg-light rounded-lg p-4">
                            <div class="cz-product-gallery">
                            <div class="cz-preview order-sm-2">
                                @if($product->new_price != NULL)
                                    <span class="badge badge-primary badge-shadow"> - {{ $product->percentage }}% </span>
                                @endif
                                <div class="cz-preview-item active" id="first"><img src="/uploads/products/{{$product->imagefile1}}" alt=""></div>
                                @if($product->imagefile2 != 'noimage2.png')
                                    <div class="cz-preview-item" id="second"><img src="/uploads/products/{{$product->imagefile2}}" alt=""></div>
                                @endif
                                @if($product->imagefile3 != 'noimage3.png')
                                    <div class="cz-preview-item" id="third"><img src="/uploads/products/{{$product->imagefile3}}" alt=""></div>
                                @endif
                            </div>
                            <div class="cz-thumblist order-sm-1">
                                <a class="cz-thumblist-item active" href="#first"><img src="/uploads/products/{{$product->imagefile1}}" alt=""></a>
                                @if($product->imagefile2 != 'noimage2.png')
                                <a class="cz-thumblist-item" href="#second"><img src="/uploads/products/{{$product->imagefile2}}" alt=""></a>
                                @endif
                                @if($product->imagefile3 != 'noimage3.png')
                                <a class="cz-thumblist-item" href="#third"><img src="/uploads/products/{{$product->imagefile3}}" alt=""></a>
                                @endif
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 px-2 mb-3">
                        <div class="h-100 bg-light rounded-lg py-5 px-4 px-sm-5">
                            <a class="product-meta d-block font-size-sm pb-2" href="" data-toggle="modal" data-target="#">
                                <i class="fa fa-tag"></i>
                                @if($product->brand != NULL)
                                    {{$product->brand}}
                                    @else
                                    Generic
                                @endif
                                &nbsp;&nbsp;&nbsp;
                                <i class="fa fa-heart"></i> {{$product->reviews}}
                                &nbsp;&nbsp;&nbsp;
                                @if($product->stock != NULL)
                                    <strong>{{$product->stock}}</strong> <small>in stock</small>
                                @endif
                            </a>
                            <h1 class="h2"> {{$product->name}} </h1>
                            @if($product->new_price != NULL)
                                <div> 
                                    <span class="h3 font-weight-strong text-accent"> UGX {{$product->new_price}} </span>
                                    <del class="h4 font-weight-normal text-muted"> <small> UGX {{$product->orig_price}} </small> </del>
                                </div>
                                @else
                                    <div> <span class="h3 font-weight-strong text-accent"> UGX {{$product->orig_price}} </span> </div>
                            @endif

                            <div class="form-group d-flex flex-wrap align-items-center pt-4 pb-2">

                                @if ( (Auth::check()) && (Auth::user()->role_id != 1) )
                                    <div class="row">
                                        <div class="col-6">
                                            <a href="/products/{{$product->id}}/edit" class="btn btn-success btn-shadow mr-3 mb-3"><i class="fa fa-edit font-size-lg mr-2"></i> Edit Product </a>
                                        </div>
                                        <div class="col-6">
                                            <a class="btn btn-primary btn-shadow mr-3 mb-3" href="#"
                                                onclick="
                                                var result = confirm('Are you sure you want to delete this product?'); 
                                                if (result){
                                                    event.preventDefault();
                                                    document.getElementById('delete-form').submit();
                                                }
                                                ">
                                                <i class="fa fa-trash font-size-lg mr-2"></i> Delete
                                            </a>
                                            <form id="delete-form" action="{{ route('products.destroy', [$product -> id])}}"
                                                method="POST" style="display:none;">
                                                <input type="hidden" name="_method" value="delete">
                                                {{ csrf_field() }}
                                            </form>
                                        </div>
                                    </div>
                                    <!-- <a class="btn btn-primary btn-shadow mr-3 mb-3" data-toggle="modal" data-target="#order"><i class="czi-cart font-size-lg mr-2"></i>Order Now</a> -->
                                    <!-- <a href="tel:+256706530756" class="btn btn-icon btn-secondary col-2 mb-3" type="button" data-toggle="tooltip" title="Call to Order"><i class="fa fa-phone font-size-lg"></i></a> -->
                                    
                                    @else

                                    <form action="{{ route('cart.store') }}" method="POST">
                                        {{ csrf_field() }}
                                        <div class="row">
                                            <input type="hidden" value="{{ $product->id }}" id="id" name="id">
                                            <input type="hidden" value="{{ $product->name }}" id="name" name="name">
                                            <input type="hidden" value="{{ $product->imagefile1 }}" name="img" id="img"/>
                                            @if ($product->new_price == NULL)
                                                <div class="form-group mb-0">
                                                    @csrf
                                                    <input type="hidden" name="price" class="form-control" value="{{ $product->orig_price }}"/>     
                                                </div>
                                            @else
                                                <!-- discounted product -->
                                                <div class="form-group mb-0">
                                                    @csrf
                                                    <input type="hidden" name="price" class="form-control" value="{{ $product->new_price }}"/>     
                                                </div>
                                                <!-- discounted product -->
                                            @endif

                                            <input type="text" name="quantity" id="quantity" value="1" class="form-control col-2 mr-3 mb-2">
                                            <button class="btn btn-primary btn-shadow col-6 mr-3 mb-3" type="submit"><i class="czi-cart font-size-lg mr-2"></i> @lang('header.add_to_cart') </button>
                                            <a href="tel:+256703195072" class="btn btn-icon btn-secondary col-2 mb-3" type="button" data-toggle="tooltip" title="Call to Order">
                                                <i class="fa fa-phone font-size-lg"></i>
                                            </a>
                                        </div>
                                    </form>

                                @endif
                            
                            </div>
                            <h6 class="mb-1">Description</h6>
                            <span class="font-size-sm mb-1"> {{$product->description}} </span>
                            <ul class="list-unstyled font-size-sm">
                                @if($product->sizes != NULL)
                                    <li><i class="czi-check-circle mr-2"></i><strong>@lang('header.sizes'):</strong> {{$product->sizes}} </li>
                                @endif
                                @if($product->brand != NULL)
                                    <li><i class="czi-check-circle mr-2"></i><strong>@lang('header.brand'):</strong> {{$product->brand}} </li>
                                @endif
                                @if($product->colors != NULL)
                                    <li><i class="czi-check-circle mr-2"></i><strong>@lang('header.colors'):</strong> {{$product->colors}} </li>
                                @endif
                                @if($product->material != NULL)
                                    <li><i class="czi-check-circle mr-2"></i><strong>@lang('header.material'):</strong> {{$product->material}} </li>
                                @endif
                            </ul>
                            @if($product->leadtime != NULL)
                                <h6 class="mb-1">Delivery Info</h6>
                                <span class="font-size-sm"> Ready for delivery by {{ date('l, d-M-Y', strtotime("+$product->leadtime day")) }} which is about {{$product->leadtime}} days from now. </span>
                                <br>
                            @endif
                            <h6 class="d-inline-block align-middle font-size-base my-2 mr-2">Share this on</h6>
                            <a href="https://www.facebook.com/sharer/sharer.php?u=www.beisie.com/products/{{$product->id}}&display=popup" target="_blank" class="share-btn sb-facebook mr-2 my-2" data-toggle="tooltip" title="Facebook"><i class="czi-facebook"></i></a>    
                            <a href="https://twitter.com/intent/tweet?url=This is cool. Check out www.beisie.com/products/{{$product->id}}" target="_blank" class="share-btn sb-twitter mr-2 my-2" data-toggle="tooltip" title="Twitter"><i class="czi-twitter"></i></a>
                        </div>
                    </div>
                </section>
                <!-- Product -->
				
				<!-- Modal: Order Request -->
                <div class="modal fade" id="order" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
            
                            <div class="modal-header mb-1 py-1">
                                <div class="media flex-fill">
                                    <div class="mr-2">
                                        <h1 class="text-danger"> <i class="fa fa-shopping-cart"></i> </h1>
                                    </div>
                                    <div class="media-body align-self-center">
                                        <h4 class="modal-title text-primary"> @lang('header.order_now') </h4>
                                        <strong style="font-size:1.2rem;" class="text-muted"> {{$product->name}} </strong> 
                                    </div>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            </div>
            
                            <form action="{{ route('orders.store') }}" method="post">
                            {{ csrf_field() }}
            
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="color"><strong> @lang('header.quantity') </strong> </label>
                                        <select name="qty" class="custom-select mr-3 mb-3" style="width: 5rem;">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
                                        </select>
                                    </div>
                                    <div class="form-group mb-0">
                                        <label for="note"><strong> @lang('header.order_note') </strong> <code class="text-primary">(@lang('header.optional'))</code> </label>
                                        <input type="text" class="form-control" name="note" id="note" placeholder="@lang('header.extra_info')">
                                    </div>
                                    @if ($product->new_price == NULL)
                                        <div class="form-group mb-0">
                                            @csrf
                                            <input type="hidden" name="price" class="form-control" value="{{ $product->orig_price }}"/>     
                                        </div>
                                    @else
                                        <!-- discounted product -->
                                        <div class="form-group mb-0">
                                            @csrf
                                            <input type="hidden" name="price" class="form-control" value="{{ $product->new_price }}"/>     
                                        </div>
                                        <!-- discounted product -->
                                    @endif

                                    <div class="form-group mb-0">
                                        @csrf
                                        <input type="hidden" name="product_id" class="form-control" value="{{ $product->id }}"/>
                                    </div>
                                    <div class="form-group mb-0">
                                        @csrf
                                        <input type="hidden" name="product_name" class="form-control" value="{{ $product->name }}"/>
                                    </div>
                                    <div class="form-group mb-0">
                                        @csrf
                                        <input type="hidden" name="product_image" class="form-control" value="{{ $product->imagefile1 }}"/>
                                    </div>
                            </div>
            
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-block btn-primary align-items-center">
                                <strong> @lang('header.proceedtocheckout2') <i class="fa fa-long-arrow-right"></i> </strong>
                                </button>
                            </div>
                        </form>
            
                        </div>
                    </div>
                </div>
                <!-- Modal: Order Request -->

                <!-- Related Products-->
                <section class="pb-5 mb-2 mb-xl-4">
                    <h2 class="h3 pb-2 mb-grid-gutter text-center"> @lang('header.similar_products') </h2>
                    <div class="cz-carousel cz-controls-static cz-controls-outside cz-dots-enabled">
                        <div class="cz-carousel-inner" data-carousel-options="{&quot;items&quot;: 2, &quot;gutter&quot;: 16, &quot;controls&quot;: true, &quot;nav&quot;: false, &quot;autoplay&quot;: true, &quot;autoHeight&quot;: true, &quot;responsive&quot;: {&quot;0&quot;:{&quot;items&quot;:2}, &quot;480&quot;:{&quot;items&quot;:2}, &quot;720&quot;:{&quot;items&quot;:3}, &quot;991&quot;:{&quot;items&quot;:2}, &quot;1140&quot;:{&quot;items&quot;:3}, &quot;1300&quot;:{&quot;items&quot;:4}, &quot;1500&quot;:{&quot;items&quot;:5}}}">
                            @foreach ($coolProducts as $product)
                                <!-- Product -->
                                <div class="col-lg-4 col-6 px-2 px-sm-2 mb-sm-4 mb-3">
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
                    </div>
                </section>
                <!-- Related Products -->

            </div>
        </section>
    
        <!-- Footer-->
        @include('layouts.footer')
    
      </main>
    <!-- Main -->
    
@endsection