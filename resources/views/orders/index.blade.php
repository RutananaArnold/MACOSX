@extends('layouts.app')

@section('content')

    <!-- Main -->
      <main class="sidebar-fixed-enabled" style="padding-top: 4rem;">
        <section class="px-lg-3 pt-4">
          <div class="px-3 pt-2">

                @if ( (Auth::check()) && (Auth::user()->role_id == 0) )

                    <!-- Page title + breadcrumb-->
                    <nav class="mb-4" aria-label="breadcrumb">
                    <ol class="breadcrumb flex-lg-nowrap">
                        <li class="breadcrumb-item"><a class="text-nowrap" href="/"><i class="czi-home"></i>Welcome</a></li>
                        <li class="breadcrumb-item text-nowrap active" aria-current="page">Orders</li>
                    </ol>
                    </nav>
                    <!-- Content-->
                    <section class="d-md-flex justify-content-between align-items-center mb-4 pb-2">
                    <h1 class="h2 mb-3 mb-md-0 mr-3 text-primary">
                        <strong> <i class="fa fa-shopping-cart text-primary"></i> Orders ({{count($orders)}}) </strong>
                    </h1>
                    <div class="d-flex align-items-center">
                        <div class="d-none d-sm-block py-2 font-size-sm text-muted text-nowrap mr-2">
                            <a> <i class="fa fa-shopping-cart"></i> @lang('header.happyshopping') </a>
                        </div>
                    </div>
                    </section>
                    
                    <!-- Partials -->
                    @include('partials.errors')
                    @include('partials.success')

                            <!-- Orders -->
                            <section class="product-description no-padding">
                                <div class="container mb-3">
                                    <header class="mb-4">
                                        <h6 class="lead">Analyze all newly pending and complete orders.</h6>
                                        <!-- <h6 class="lead">Analyze all pending, complete and cancelled orders.</h6> -->
                                    </header>
                                    <ul role="tablist" class="nav nav-tabs flex-column flex-sm-row">
                                        <li class="nav-item"><a data-toggle="tab" href="#pending" role="tab" class="nav-link active">PENDING </a></li>
                                        <li class="nav-item"><a data-toggle="tab" href="#complete" role="tab" class="nav-link">COMPLETE</a></li>
                                        <!-- <li class="nav-item"><a data-toggle="tab" href="#cancelled" role="tab" class="nav-link">CANCELLED</a></li> -->
                                    </ul>
                                    <div class="tab-content">

                                        <div id="pending" role="tabpanel" class="tab-pane active">
                                            <div class="row">
                                                <div class="col-xl-9">

                                                    @foreach ($orders as $order)
                                                        @if ( ($order->status == 'being processed') && ($order->order_id != NULL) )
                                                            <div class="row review mb-5">
                                                                <div class="col-3 text-center">
                                                                    <a>
                                                                        <img src="{{ asset('images/order-pic.jpg')}}" alt="" style="display:block;width:120px;max-width:100%;border-radius:25%;padding:0.5rem;margin:0 auto .5rem;background:#fff;border:solid 1px rgba(0,0,0,0.125);">
                                                                    </a>
                                                                    <span class="text-uppercase text-muted text-small">
                                                                        <a href="tel:{{$order->phone}}" title="Call Customer" class="btn btn-sm btn-outline-primary"> 
                                                                            <i class="fa fa-phone"></i>
                                                                        </a>
                                                                        <a href="mailto:{{$order->email}}" title="Send Email" class="btn btn-sm btn-outline-primary"> 
                                                                            <i class="fa fa-envelope"></i>
                                                                        </a>
                                                                    </span>
                                                                </div>
                                                                <div class="col-9 review-text">
                                                                    <h5 class="text-primary">Order {{$order->order_id}} <small><a href="/orders/{{$order->id}}" target="_blank" rel="noopener">(Print Invoice)</a></small></h5>
                                                                    <p class="text-muted text-small mb-0">
                                                                        Customer: <strong>{{$order->name}}</strong> <br/>
                                                                        Order Date: <strong>{{ date('M j, Y', strtotime($order->created_at)) }} at {{ date('h:i A', strtotime($order->created_at)) }}</strong> <br/>
                                                                        Delivery Mode: <strong>{{$order->delivery}}</strong> <br/>
                                                                        @if ($order->note == NULL)
                                                                            Order Status: <strong> None </strong> <br/>
                                                                        @else
                                                                            Order Status: <strong>{{$order->note}}</strong> <br/>
                                                                        @endif
                                                                    </p>
                                                                    
                                                                    <form method="post" action="{{ route('orders.update', [$order -> id]) }}">
                                                                        {{ csrf_field() }}
                                                                        <input type="hidden" name="_method" value="put">

                                                                        <div class="input-group">
                                                                            <input class="form-control" name="order_id" id="order_id" value="{{$order->order_id}}" type="hidden">
                                                                            <input class="form-control" name="price" id="price" value="{{$order->price}}" type="hidden">
                                                                            <input class="form-control" name="total" id="total" value="{{$order->total}}" type="hidden">
                                                                            <input class="form-control" name="name" id="name" value="{{$order->name}}" type="hidden">
                                                                            <input class="form-control" name="email" id="email" value="{{$order->email}}" type="hidden">
                                                                            <input class="form-control" name="phone" id="phone" value="{{$order->phone}}" type="hidden">
                                                                            <input class="form-control" name="street" id="street" value="{{$order->street}}" type="hidden">
                                                                            <input class="form-control" name="town" id="town" value="{{$order->town}}" type="hidden">
                                                                            <input class="form-control" name="district" id="district" value="{{$order->district}}" type="hidden">
                                                                            <input class="form-control" name="delivery" id="delivery" value="{{$order->delivery}}" type="hidden">
                                                                            <input class="form-control" name="pay_method" id="pay_method" value="{{$order->pay_method}}" type="hidden">
                                                                            <input class="form-control" name="user_id" id="user_id" value="{{$order->user_id}}" type="hidden">
                                                                            <!-- Completion Mark -->
                                                                            <input class="form-control" name="status" id="status" value="completed" type="hidden">
                                                                            <!-- Completion Mark -->
                                                                            <div class="input-group-append">
                                                                                <button class="btn btn-sm btn-primary btn-minimal" type="submit">
                                                                                    Mark as complete <i class="fa fa-check"></i>
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        @endif
                                                    @endforeach

                                                </div>
                                            </div>
                                        </div>    

                                        <div id="complete" role="tabpanel" class="tab-pane">
                                            <div class="row">
                                                <div class="col-xl-9">

                                                    @foreach ($orders as $order)
                                                        @if ( ($order->status == 'completed') && ($order->order_id != NULL) )
                                                            <div class="row review mb-3">
                                                                <div class="col-3 text-center">
                                                                    <a>
                                                                        <img src="{{ asset('images/order-pic.jpg')}}" alt="" style="display:block;width:120px;max-width:100%;border-radius:25%;padding:0.5rem;margin:0 auto .5rem;background:#fff;border:solid 1px rgba(0,0,0,0.125);">
                                                                    </a>
                                                                    <span class="text-uppercase text-muted text-small">
                                                                        <a href="tel:{{$order->phone}}" title="Call Customer" class="btn btn-sm btn-outline-primary"> 
                                                                            <i class="fa fa-phone"></i>
                                                                        </a>
                                                                        <a href="mailto:{{$order->email}}" title="Send Email" class="btn btn-sm btn-outline-primary"> 
                                                                            <i class="fa fa-envelope"></i>
                                                                        </a>
                                                                    </span>
                                                                </div>
                                                                <div class="col-9 review-text">
                                                                    <h5 class="text-primary">Order {{$order->order_id}} <small><a href="/orders/{{$order->id}}" target="_blank">(See Paid Invoice)</a></small></h5>
                                                                    <p class="text-muted text-small">
                                                                        Customer: <strong>{{$order->name}}</strong> <br/>
                                                                        Delivery Mode: <strong>{{$order->delivery}}</strong> <br/>
                                                                        Order Date: <strong>{{ date('M j, Y', strtotime($order->created_at)) }} at {{ date('h:i A', strtotime($order->created_at)) }}</strong> <br/>
                                                                        <strong class="text-success">Order completed on {{ date('M j, Y', strtotime($order->updated_at)) }} at {{ date('h:i A', strtotime($order->updated_at)) }} </strong>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        @endif
                                                    @endforeach
                                                    
                                                </div>
                                            </div>
                                        </div>

                                        <!--
                                        <div id="cancelled" role="tabpanel" class="tab-pane">
                                            <div class="row">
                                                <div class="col-xl-9">

                                                    @foreach ($orders as $order)
                                                        @if ($order->status == 'cancelled')
                                                            <div class="row review">
                                                                <div class="col-3 text-center">
                                                                    <img src="/uploads/products/{{$order->product_image}}" alt="" style="display:block;width:120px;max-width:100%;border-radius:25%;padding:0.5rem;margin:0 auto .5rem;background:#fff;border:solid 1px rgba(0,0,0,0.125);">
                                                                    <span class="text-uppercase text-muted text-small">
                                                                        <a href="tel:{{$order->phone}}" title="Call Customer" class="btn btn-template-outlined"> 
                                                                            <i class="fa fa-phone"></i>
                                                                        </a>
                                                                        <a href="mailto:{{$order->email}}" title="Send Email" class="btn btn-template-outlined"> 
                                                                            <i class="fa fa-envelope"></i>
                                                                        </a>
                                                                    </span>
                                                                </div>
                                                                <div class="col-9 review-text">
                                                                    <h5 class="text-primary">Order {{$order->order_id}} <small><a href="/orders/{{$order->id}}" target="_blank">(See Details)</a></small></h5>
                                                                    <p class="text-muted text-small">
                                                                        Customer: <strong>{{$order->name}}</strong> <br/>
                                                                        Order Date: <strong>{{ date('M j, Y', strtotime($order->created_at)) }} at {{ date('h:i A', strtotime($order->created_at)) }}</strong> <br/>
                                                                        Delivery Mode: <strong>{{$order->delivery}}</strong> <br/>
                                                                        Payment Mode: <strong>{{$order->pay_method}}</strong> <br/>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        @endif
                                                    @endforeach

                                                </div>
                                            </div>
                                        </div>
                                        -->

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

            </div>
        </section>
    </main>
    <!-- Main -->

@endsection