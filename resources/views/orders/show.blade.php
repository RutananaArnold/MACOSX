@extends('layouts.app')

@section('content')

    <!-- Main -->
    <main class="sidebar-fixed-enabled" style="padding-top: 4rem;">
        <section class="px-lg-3 pt-4">
            <div class="px-3 pt-2">

                @if(Auth::check())
                    @if(Auth::user()->role_id == 0)
                        <!-- Intro Section-->
                        <section class="hero hero-page gray-bg padding-small  mb-4">
                            <div class="container">
                                <div class="row justify-content-center">
                                    <header class="mb-5 text-center">
                                        <!-- <a href="/" class="navbar-brand"><img src="{{ asset('images/_logo.jpg') }}" alt="OUR LOGO" height="120px"></a> -->
                                        <a href="/" class="navbar-brand"> <strong class="text-primary h3"> BEISIE, Inc. </strong> </a>
                                        <div class="text-center">
                                                <h5>Client Invoice 
                                                    <h6 class="text-primary">
                                                        @if ($order->status == 'completed')
                                                            (PAID)
                                                            @else
                                                            (UNPAID)
                                                        @endif
                                                    </h6> 
                                                </h5>
                                                <hr/>
                                                <address>
                                                    <a class="text-dark" href="/">www.beisie.com</a> <br/>
                                                    <a class="text-dark" href="mailto:buy@beisie.com?subject=PAID INVOICE FOR ORDER {{$order->order_id}}">buy@beisie.com</a> <br>
                                                    <a class="text-dark" href="tel:+256703195072">0703-195072</a> | <a class="text-dark" href="tel:+256770784879">0770-784879</a> <br>
                                                </address>
                                        </div>
                                        <h6 class="lead" style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">Enjoy top notch shopping experiences</h6>
                                    </header>
                                </div>
                                <div class="row d-flex">
                                    <div class="col-lg-9 order-2 order-lg-1">
                                        <h1 class="text-primary" style="font-size:2.4rem;">
                                            <span class="icon icon-bag"></span> Order {{$order->order_id}}
                                        </h1>
                                        <p class="lead" style="font-size:1.2rem;">
                                            Customer: <strong>{{$order->name}}</strong> <br/>
                                            Phone: <strong>{{$order->phone}}</strong> <br/>
                                            Email Address: <strong>{{$order->email}}</strong> <br/>
                                            Delivery Mode: <strong>{{$order->delivery}}</strong> <br/> 
                                            Order Date: <strong>{{ date('M j, Y', strtotime($order->created_at)) }} at {{ date('h:i A', strtotime($order->created_at)) }}</strong> <br/>
                                            Payment Mode: <strong>{{$order->pay_method}}</strong> <br/>
                                            Delivery Address: <strong>{{$order->street}}, {{$order->town}}, {{$order->district}}</strong>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <!-- Main Orders' Grid-->
                        <section class="container py-4">
                            <div class="container-fluid">
                                <div class="row">
                                    
                                    <!-- Ordered Products -->
                                    <div class="col-lg-12 col-xl-12 pl-lg-3">
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
                                                    @foreach($order->products as $product)
                                                        <!-- Product-->
                                                        <div class="item mb-2">
                                                            <div class="row d-flex align-items-center">
                                                                <div class="col-4">
                                                                    <div class="align-items-center">
                                                                        <div class="title">
                                                                            <a href="/products/{{ $product->id }}" target="_blank" rel="noopener" class="mb-0 h6"><strong> {{ $product->name }} </strong></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-3"><span> UGX {{ $product->pivot->price }} </span></div>
                                                                <div class="col-2">
                                                                    <div class="d-flex align-items-center">
                                                                        <span> {{ $product->pivot->qty }} </span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-3 text-right"><span> UGX {{ (($product->pivot->price)*($product->pivot->qty)) }} </span></div>
                                                            </div>
                                                        </div>
                                                        <!-- Product-->
                                                    @endforeach
                                                </div>
                                                <div class="basket-footer">
                                                    <div class="item">
                                                        <div class="row">
                                                        <div class="offset-md-6 col-4"> <strong> @lang('header.quantity') </strong></div>
                                                        <div class="col-2 text-right"><strong class="h6"> {{$order->qty}} </strong></div>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="row">
                                                        <div class="offset-md-6 col-4"> <strong> @lang('header.taxes_delivery_fee') (VAT) </strong></div>
                                                        <div class="col-2 text-right"><strong class="h6"> UGX {{ (18/100) * ($order->total) }} </strong></div>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="row">
                                                        <div class="offset-md-6 col-4"> <strong> @lang('header.overalltotal') </strong></div>
                                                        <div class="col-2 text-right"><strong class="text-primary h6"> UGX {{$order->total}} </strong></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <h6 class="lead text-center">
                                            <i class="fa fa-handshake-o text-primary">
                                            <small>Thank you for shopping with BEISIE. See you next time.</small> </i>
                                        </h6>
                                    </div>

                                    
                    
                                </div>
                            </div>
                        </section>

                        <!-- <script type="text/javascript"> 
                            window.addEventListener("load", window.print());
                        </script> -->

                        @else
                        
                            @if(Auth::user()->id == $order->user_id)
                                <!-- Intro Section-->
                                <section class="hero hero-page gray-bg padding-small mb-4">
                                    <div class="container">
                                        <div class="row d-flex">
                                            <div class="col-lg-9 order-2 order-lg-1">
                                                <h1 class="text-primary" style="font-size:3rem;">
                                                    <span class="icon icon-bag"></span> @lang('header.order') {{$order->order_id}}
                                                </h1>
                                                <p class="lead" style="font-size:1.2rem;">

                                                    @if ($order->status == 'completed')
                                                        @lang('header.order') {{$order->order_id}} @lang('header.was_placed_on') <strong> {{ date('M j, Y', strtotime($order->created_at)) }} @lang('header.at') {{ date('h:i A', strtotime($order->created_at)) }} </strong> @lang('header.and_was') <strong> {{$order->status}}.</strong>
                                                        @lang('header.we_believe'), <a href="/contact-us">@lang('header.contactus')</a> @lang('header.please_lc').
                                                        @lang('header.seeyou').
                                                    @elseif ($order->status == 'cancelled')
                                                        @lang('header.order') {{$order->order_id}} @lang('header.was_placed_on') <strong> {{ date('M j, Y', strtotime($order->created_at)) }} @lang('header.at') {{ date('h:i A', strtotime($order->created_at)) }} </strong> @lang('header.and_was') <strong> {{$order->status}}. </strong>
                                                        @lang('header.cancel_note').
                                                        @lang('header.wish_to_replace') <a href="/contact-us">@lang('header.contactus')</a>
                                                    @else
                                                        @lang('header.order') {{$order->order_id}} @lang('header.was_placed_on') <strong> {{ date('M j, Y', strtotime($order->created_at)) }} @lang('header.at') {{ date('h:i A', strtotime($order->created_at)) }} </strong> @lang('header.and_is_currently') <strong> {{$order->status}}.</strong>
                                                        @lang('header.incase_enquiries') <a href="/contact-us">@lang('header.contact_team').</a>
                                                    @endif

                                                </p>
                                            </div>
                                            <div class="col-lg-3 text-right order-1 order-lg-2">
                                                <ul class="breadcrumb justify-content-lg-end">
                                                <li class="breadcrumb-item"><a href="/categories"> @lang('header.home') </a></li>
                                                <li class="breadcrumb-item"><a href="/home"> @lang('header.orders') </a></li>
                                                <li class="breadcrumb-item active">@lang('header.order') {{$order->order_id}}</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <a href="/categories" class="btn btn-outline-primary wide shop-now">
                                            <strong> @lang('header.continue_shopping') <i class="fa fa-shopping-cart"></i></strong>
                                        </a>
                                    </div>
                                </section>

                                <!-- Partials -->
                                @include('partials.errors')
                                @include('partials.success')

                                <!-- Main Orders' Grid-->
                                <section class="container py-4">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <!-- Customer Sidebar-->
                                            <div class="customer-sidebar text-center col-xl-3 col-lg-4 mb-md-5 mb-4">
                                                <div class="customer-profile mb-3">
                                                    <a class="d-inline-block mb-2">
                                                        <img src="{{ asset('/images/avatar.png')}}" class="img-fluid rounded-circle customer-image">
                                                    </a>
                                                    <h5 class="mb-0"> {{Auth::user()->name}} </h5>
                                                    <small class="text-muted text-small"> @lang('header.esteemed_customer') </small>
                                                </div>
                                                <nav class="list-group customer-nav">
                                                    <a href="/home" class="active list-group-item d-flex justify-content-between align-items-center">
                                                        <span><i class="fa fa-shopping-bag"></i> @lang('header.orders') </span><small class="badge badge-pill badge-light"> {{ count($orders) }} </small>
                                                    </a>
                                                    <a href="/profile" class="list-group-item d-flex justify-content-between align-items-center"><span><i class="fa fa-user-circle"></i> @lang('header.my_prof') </span></a>
                                                    <a href="/categories" class="list-group-item d-flex justify-content-between align-items-center"><span><i class="fa fa-shopping-cart"></i> @lang('header.gotoshop') </span></a>
                                                    <a href="{{ route('logout') }}"
                                                        class="list-group-item d-flex justify-content-between align-items-center"
                                                        onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                                        <span><span class="fa fa-sign-out"></span> @lang('header.logout') </span>
                                                    </a>
                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                        @csrf
                                                    </form>
                                                </nav>
                                            </div>
                                            <!-- Customer Sidebar-->

                                            <!-- Order Details Table -->
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
                                                            @foreach($order->products as $product)
                                                                <!-- Product-->
                                                                <div class="item mb-2">
                                                                    <div class="row d-flex align-items-center">
                                                                        <div class="col-4">
                                                                            <div class="align-items-center">
                                                                                <div class="title">
                                                                                    <a href="/products/{{ $product->id }}" target="_blank" rel="noopener" class="mb-0 h6"><strong> {{ $product->name }} </strong></a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-3"><span> UGX {{ $product->pivot->price }} </span></div>
                                                                        <div class="col-2">
                                                                            <div class="d-flex align-items-center">
                                                                                <span> {{ $product->pivot->qty }} </span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-3 text-right"><span> UGX {{ (($product->pivot->price)*($product->pivot->qty)) }} </span></div>
                                                                    </div>
                                                                </div>
                                                                <!-- Product-->
                                                            @endforeach
                                                        </div>
                                                        <div class="basket-footer">
                                                            <div class="item">
                                                                <div class="row">
                                                                <div class="offset-md-6 col-4"> <strong> @lang('header.quantity') </strong></div>
                                                                <div class="col-2 text-right"><strong class="h6"> {{$order->qty}} </strong></div>
                                                                </div>
                                                            </div>
                                                            <div class="item">
                                                                <div class="row">
                                                                <div class="offset-md-6 col-4"> <strong> @lang('header.taxes_delivery_fee') (VAT) </strong></div>
                                                                <div class="col-2 text-right"><strong class="h6"> UGX {{ (18/100) * ($order->total) }} </strong></div>
                                                                </div>
                                                            </div>
                                                            <div class="item">
                                                                <div class="row">
                                                                <div class="offset-md-6 col-4"> <strong> @lang('header.overalltotal') </strong></div>
                                                                <div class="col-2 text-right"><strong class="text-primary h6"> UGX {{$order->total}} </strong></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <hr>

                                                <div class="row addresses py-3">
                                                    <div class="col-sm-6">
                                                        <div class="block-header">
                                                        <h6 class="text-uppercase text-primary"> @lang('header.account_address') </h6>
                                                        </div>
                                                        <div class="block-body">
                                                        <p>
                                                            {{Auth::user()->name}} <br>
                                                            {{Auth::user()->phone}} <br/>
                                                            {{Auth::user()->email}} <br>
                                                            {{Auth::user()->street}}, {{Auth::user()->town}}, {{Auth::user()->district}}
                                                        </p>
                                                        </div>
                                                    </div>
                                                <div class="col-sm-6">
                                                    <div class="block-header">
                                                    <h6 class="text-uppercase text-primary"> @lang('header.delivery_address') </h6>
                                                    </div>
                                                    <div class="block-body">
                                                    <p>
                                                        {{$order->name}} <br>
                                                        {{$order->phone}} <br/>
                                                        {{$order->email}} <br>
                                                        {{$order->street}}, {{$order->town}}, {{$order->district}}
                                                    </p>
                                                    </div>
                                                </div>
                                                </div>
                                                <!-- /.addresses -->
                                            </div>
                            
                                        </div>
                                    </div>
                                </section>
                            
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

                    @endif
                @endif

            </div>
        </section>

    </main>
    <!-- Main -->

@endsection