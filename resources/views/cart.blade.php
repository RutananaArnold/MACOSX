@extends('layouts.app')

@section('content')

    <!-- Main -->
      <main class="sidebar-fixed-enabled" style="padding-top: 4rem;">
        <section class="px-lg-3 pt-4">
          <div class="px-3 pt-2">
            
            @if(Auth::check())

                <!-- My Cart Title -->
                <nav class="mb-4" aria-label="breadcrumb">
                    <ol class="breadcrumb flex-lg-nowrap">
                        <li class="breadcrumb-item"><a class="text-nowrap" href="/categories"><i class="czi-home"></i> @lang('header.shop') </a></li>
                        <li class="breadcrumb-item text-nowrap active" aria-current="page"> @lang('header.shoppingcart') </li>
                    </ol>
                </nav>
                <section class="d-md-flex justify-content-between align-items-center mb-4 pb-2">
                    <h1 class="h2 mb-3 mb-md-0 mr-3 text-primary"><strong> 
                        <i class="fa fa-shopping-cart text-primary"></i> @lang('header.mycart') <small>({{ \Cart::getTotalQuantity()}})</small> </strong>
                        @if(\Cart::getTotalQuantity()>0)
                            <div class="">
                                <strong class="lead font-size-sm">
                                    (@lang('header.update_cart_note'))
                                </strong>
                            </div>
                        @endif
                    </h1>
                    <div class="d-flex align-items-center">
                        <div class="d-none d-sm-block py-2 font-size-sm text-muted text-nowrap mr-2">
                            <strong> {{ \Cart::getTotalQuantity()}} </strong> products in your cart
                        </div>
                    </div>
                </section>

                <!-- Partials -->
                @include('partials.errors')
                @include('partials.success')

                @if(\Cart::getTotalQuantity()>0)
                
                    <!-- My Cart Content -->
                    <div class="col-lg-8 col-xl-9 pl-lg-3">
                        <div class="basket basket-customer-order mb-4">
                            <div class="basket-holder">
                                <div class="basket-header">
                                    <div class="row mb-3">
                                        <div class="col-4"> @lang('header.product') </div>
                                        <div class="col-3"> @lang('header.price') </div>
                                        <div class="col-2"> @lang('header.quantity') </div>
                                        <div class="col-3 text-right"> @lang('header.total') </div>
                                    </div>
                                </div>
                                <div class="basket-body mb-5">
                                    @foreach($cartCollection as $item)
                                        <!-- Product-->
                                        <div class="item mb-2">
                                            <div class="row d-flex align-items-center">
                                                <div class="col-4">
                                                    <div class="align-items-center">
                                                        <div class="title">
                                                            <a href="/products/{{ $item->id }}" target="_blank" rel="noopener" class="mb-0 h6"><strong> {{ $item->name }} </strong></a>
                                                            <form action="{{ route('cart.remove') }}" method="POST">
                                                                {{ csrf_field() }}
                                                                <input type="hidden" value="{{ $item->id }}" id="id" name="id">
                                                                <button class="btn btn-sm text-primary"><strong> <i class="fa fa-trash"></i> @lang('header.remove') </strong></button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-3"><span> UGX {{ $item->price }} </span></div>
                                                <div class="col-2">
                                                    <div class="d-flex align-items-center">
                                                        <div class="quantity d-flex align-items-center">
                                                            <form action="{{ route('cart.update') }}" method="POST">
                                                                {{ csrf_field() }}
                                                                <input type="hidden" value="{{ $item->id }}" id="id" name="id">
                                                                <input type="text" value="{{ $item->quantity }}" id="quantity" name="quantity" class="form-control mr-3 mb-0">
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-3 text-right"><span> UGX {{ \Cart::get($item->id)->getPriceSum() }} </span></div>
                                            </div>
                                        </div>
                                        <!-- Product-->
                                    @endforeach
                                </div>
                                <div class="container">
                                    <div class="d-flex flex-column flex-md-row">
                                        @if(count($cartCollection)>0)
                                            <form action="{{ route('cart.clear') }}" method="POST">
                                                {{ csrf_field() }}
                                                <button class="btn btn-outline-primary wide" type="submit"><i class="fa fa-trash"></i> @lang('header.clear_cart') </button>
                                            </form>
                                        @endif
                                        &nbsp; <a href="/categories" class="btn btn-primary wide"><i class="fa fa-shopping-cart"></i> @lang('header.continue_shopping') </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- My Cart Content -->

                    <hr/>

                    <!-- My Order Details -->
                    <section class="order-details no-padding-top py-4"> 
                        <div class="container table-responsive">
                            <div class="row">
                                <div class="col-lg-6">
                                    @if(count($cartCollection)>0)
                                        <div class="block">
                                            <div class="block-header">
                                            <h6 class="text-uppercase text-primary"><strong> @lang('header.order_summary') </strong></h6>
                                            </div>
                                            <div class="block-body">
                                            <p> @lang('header.free_delivery') </p>
                                            <ul class="order-menu list-unstyled">
                                                <li class="d-flex justify-content-between"><span>@lang('header.subtotal') </span><strong> UGX {{ \Cart::getTotal() }} </strong></li>
                                                <li class="d-flex justify-content-between"><span>@lang('header.delivery_taxes') (VAT) </span><strong> UGX {{ (18/100) * (\Cart::getTotal()) }} </strong></li>
                                                <li class="d-flex justify-content-between"><span>@lang('header.shipping_delivery') </span><strong> UGX 0 </strong></li>
                                                <li class="d-flex justify-content-between"><span>@lang('header.overalltotal') </span><strong class="text-primary price-total"> UGX {{ \Cart::getTotal() }} </strong></li>
                                            </ul>
                                            </div>
                                        </div>
                                    @endif
                                    <div class="col-lg-12 text-center CTAs">
                                            <a href="/cart/checkout" class="btn btn-block btn-primary btn-md wide">
                                                @lang('header.proceedtocheckout') <i class="fa fa-long-arrow-right"></i>
                                            </a>
                                        
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </section>
                    <!-- My Order Details -->

                    @else

                    <h4>Your cart is empty</h4>
                    <a href="/categories" class="btn btn-outline-primary">
                        <strong> Start Shopping Now <i class="fa fa-shopping-cart"></i> </strong>
                    </a>

                @endif
        
            @endif

        </div>
    </section>

  </main>
<!-- Main -->

@endsection