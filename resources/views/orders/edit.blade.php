@extends('layouts.app')

@section('content')

    <!-- Main -->
    <main class="sidebar-fixed-enabled" style="padding-top: 4rem;">
        <section class="px-lg-3 pt-4">
            <div class="px-3 pt-2">

                @if(Auth::check())
                    <!-- navbar-->
                    @include('layouts.navbar')
                    
                    @if ( ($order->pay_method == NULL) && (Auth::user()->id == $order->user_id) )
                        <!-- Hero Section-->
                        <section class="hero hero-page gray-bg padding-small mb-4">
                            <div class="container">
                                <div class="row d-flex">
                                    <div class="col-lg-12 order-2 order-lg-1">
                                        <h1 class="text-primary">
                                            <span class="icon icon-cart"></span> @lang('header.checkout')
                                        </h1>

                                        <ul class="breadcrumb lead">
                                            <li class="breadcrumb-item active"> @lang('header.address') </li>
                                            <li class="breadcrumb-item active"> @lang('header.delivery_method') </li>
                                            <li class="breadcrumb-item active"> @lang('header.payment_method') </li>
                                            <li class="breadcrumb-item active"> @lang('header.confirmation') </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <!-- Checkout Forms-->
                        <section class="checkout">
                            <div class="container">
                                <div class="row">
                                <div class="col-lg-8">
                                    <form method="post" action="{{ route('orders.update', [$order -> id]) }}">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="_method" value="put">

                                        <div class="tab-content">
                                            <div id="address" role="tabpanel" class="active tab-pane">
                                                <!-- Invoice Address-->
                                                <div class="block-header mb-4">
                                                    <h5 class="text-primary text-bold"> @lang('header.current_invoice_address') 
                                                        <br/> <h5><small> (@lang('header.remember_this_info')) </small></h5>
                                                    </h5>
                                                </div>
                                                <div class="row">
                                                    <div class="form-group mb-0">
                                                        @csrf 
                                                        <input type="hidden" name="status" class="form-control" id="status" value="being processed">
                                                        <input type="hidden" name="price" class="form-control" id="price" value="{{$order->price}}"/>
                                                        <input type="hidden" name="order_id" class="form-control" id="order_id" value="#5377{{$order->id}}"/>
                                                        <input type="hidden" name="total" class="form-control" id="total" value="{{(($order->price)*($order->qty))}}"/>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="name" class="form-label">@lang('header.yourname') *</label>
                                                        <input id="name" type="text" name="name" value="{{Auth::user()->name}}" placeholder="@lang('header.yourname')" class="form-control" required>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="email" class="form-label">@lang('header.youremail') *</label>
                                                        <input id="email" type="email" name="email" value="{{Auth::user()->email}}" placeholder="@lang('header.youremail')" class="form-control" required>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="phone" class="form-label">@lang('header.yourphone') *</label>
                                                        <input id="phone" type="text" name="phone" value="{{Auth::user()->phone}}" placeholder="@lang('header.yourphone')" class="form-control" required>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="street" class="form-label">@lang('header.street') *</label>
                                                        <input id="street" type="text" name="street" value="{{Auth::user()->street}}" placeholder="@lang('header.street')" class="form-control" required>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="town" class="form-label">@lang('header.town') *</label>
                                                        <input id="town" type="text" name="town" value="{{Auth::user()->town}}" placeholder="@lang('header.town')" class="form-control" required>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="district" class="form-label">@lang('header.district') *</label>
                                                        <input id="district" type="text" name="district" value="{{Auth::user()->district}}" placeholder="@lang('header.district')" class="form-control" required>
                                                    </div>
                                                </div>
                                                <!-- /Invoice Address-->
                                                <div class="CTAs d-flex justify-content-between flex-column flex-lg-row">
                                                    <ul role="tablist" class="nav nav-pills">
                                                        <a data-toggle="tab" role="tab" href="#delivery-method" class="btn btn-primary wide next">
                                                            @lang('header.choose_delivery') <i class="fa fa-long-arrow-right"></i>
                                                        </a>
                                                    </ul>
                                                </div>
                                            </div>

                                            <div id="delivery-method" role="tabpanel" class="tab-pane">
                                                <div class="row">
                                                    <div class="form-group col-md-12">
                                                        <input type="radio" name="delivery" id="option1" value="Pickup Station" class="radio-template" checked>
                                                        <label for="option1"><strong> @lang('header.pickup_station') </strong><br><span class="label-description"> @lang('header.pickup_station_note'). </span></label>
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <input type="radio" name="delivery" id="option2" value="Home Delivery" class="radio-template">
                                                        <label for="option2"><strong> @lang('header.home_delivery') </strong><br><span class="label-description"> @lang('header.home_delivery_note'). </span></label>
                                                    </div>
                                                </div>
                                                <div class="CTAs d-flex justify-content-between flex-column flex-lg-row">
                                                    <ul role="tablist" class="nav nav-pills">
                                                        <a data-toggle="tab" role="tab" href="#payment-method" class="btn btn-primary wide next">
                                                            @lang('header.choose_payment') <i class="fa fa-long-arrow-right"></i>
                                                        </a>
                                                    </ul>
                                                </div>
                                            </div>

                                            <div id="payment-method" role="tabpanel" class="tab-pane">
                                                <div class="accordion box-shadow-sm mb-4" id="payment-methods">
                                                    <!-- MM Pay -->
                                                    <div class="card">
                                                        <div class="card-header py-3 px-3">
                                                            <div class="custom-control custom-radio">
                                                            <input class="custom-control-input" type="radio" name="pay_method" value="MTN Momo Pay" id="pay_method-1" checked>
                                                            <label class="custom-control-label font-weight-medium text-dark" for="pay_method-1" data-toggle="collapse" data-target="#pay_method-1">
                                                                MTN Momo Pay <img src="{{ asset('images/payments/mtn.png') }}" alt="" class="font-size-base align-middle mt-n1 ml-2">
                                                            </label>
                                                            </div>
                                                        </div>
                                                        <div class="collapse show" id="pay_method-1" data-parent="#payment-methods">
                                                            <div class="card-body">
                                                                <ol><h6 class="text-primary text-bold" style="text-decoration:underline;"> @lang('header.simplified') </h6>
                                                                    <li> @lang('header.if_using') 
                                                                        <a href="tel:*165*1*1*0775639867*{{(($order->price)*($order->qty))}}*5377{{$order->id}}#" rel="noopener" class="text-bold"> @lang('header.click_to_pay').</a>  </li>
                                                                    <li> @lang('header.confirmation_prompt') </li>
                                                                    <li> @lang('header.upon_payment') </li>
                                                                    <small> <strong>@lang('header.note'):</strong> 
                                                                        @lang('header.for_pc').
                                                                    </small> 
                                                                </ol>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- COD -->
                                                    <div class="card">
                                                        <div class="card-header py-3 px-3">
                                                            <div class="custom-control custom-radio">
                                                            <input class="custom-control-input" type="radio" name="pay_method" value="Cash On Delivery" id="pay_method-2">
                                                            <label class="custom-control-label font-weight-medium text-dark" for="pay_method-2" data-toggle="collapse" data-target="#pay_method-2">
                                                                @lang('header.cod') <img src="{{ asset('images/payments/cash.png') }}" alt="" class="font-size-base align-middle mt-n1 ml-2">
                                                            </label>
                                                            </div>
                                                        </div>
                                                        <div class="collapse" id="pay_method-2" data-parent="#payment-methods">
                                                            <div class="card-body">
                                                            <p class="font-size-sm mb-0"> @lang('header.cod_note') </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="CTAs d-flex justify-content-between flex-column flex-lg-row">
                                                    <ul role="tablist" class="nav nav-pills">
                                                        <button type="submit" class="btn btn-primary wide next">
                                                            @lang('header.confirm_order') <i class="fa fa-long-arrow-right"></i>
                                                        </button>
                                                    </ul>
                                                </div>
                                            </div>

                                        </div>
                                    </form>
                                </div>
                                <div class="col-lg-4">
                                    <div class="block-body order-summary">
                                    <h6 class="text-uppercase text-primary">@lang('header.order_summary')</h6>
                                    <p> @lang('header.free_delivery') </p>
                                    <ul class="order-menu list-unstyled">
                                        <li class="d-flex justify-content-between"><span> @lang('header.quantity') </span><strong> {{$order->qty}} </strong></li>
                                        <li class="d-flex justify-content-between"><span> @lang('header.delivery_taxes') </span><strong>UGX 0</strong></li>
                                        <li class="d-flex justify-content-between"><span> @lang('header.unitprice') </span><strong> {{$order->price}} </strong></li>
                                        <li class="d-flex justify-content-between"><span> @lang('header.subtotal') </span><strong> UGX {{(($order->price)*($order->qty))}} </strong></li>
                                        <li class="d-flex justify-content-between"><span class="text-bold"> @lang('header.overalltotal') </span>
                                            <strong class="text-primary price-total"> UGX {{(($order->price)*($order->qty))}} </strong>
                                        </li>
                                    </ul>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </section>

                        @else
                    
                        <section class="padding-small">
                            <div class="container">
                            <div class="row">
                                <div class="col-xl-8 col-lg-10">
                                    <h1 class="text-superbig text-primary"><i class="fa fa-exclamation-triangle"></i> 404</h1>
                                    <h2> Sorry, page not found! </h2>
                                    <p class="lead">
                                        Hello {{Auth::user()->name}},
                                        <br/>We couldn't find the page you are looking for. You might have misspelt the link address or the page might have been relocated or edited. 
                                        <strong>So, it is not here!</strong>
                                    </p>
                                <p class="lead">Please <a href="mailto:buy@beisie.com" class="text-bold"> email us for assistance </a> or <a href="/" class="text-bold">start from the reception</a>.</p>
                                </div>
                            </div>
                            </div>
                        </section>
                    @endif

                @endif

            </div>
        </section>

    </main>
    <!-- Main -->

@endsection