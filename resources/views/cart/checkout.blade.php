@extends('layouts.app')

@section('content')

    <!-- Main -->
    <main class="sidebar-fixed-enabled" style="padding-top: 4rem;">
        <section class="px-lg-3 pt-4">
            <div class="px-3 pt-2">

                @if(Auth::check())
                    <!-- navbar-->
                    @include('layouts.navbar')
                    
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

                                <form action="{{route('orders.store')}}" method="post">
                                    {{ csrf_field() }}
                                    
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div class="tab-content">
                                                <div id="address" role="tabpanel" class="active tab-pane">
                                                    <!-- Invoice Address-->
                                                    <div class="block-header mb-4">
                                                        <h5 class="text-primary text-bold"> @lang('header.current_invoice_address') 
                                                            <br/> <h5><small> (@lang('header.remember_this_info')) </small></h5>
                                                        </h5>
                                                    </div>
                                                    <div class="row mt-4" >
                                                        <div class="form-group mb-0">
                                                            @csrf 
                                                            <input type="hidden" name="status" class="form-control" id="status" value="being processed">
                                                            <input type="hidden" name="order_id" class="form-control" id="order_id"/>
                                                            <input type="hidden" name="total" class="form-control" id="total"/>
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
                                                    <!-- <div class="CTAs d-flex justify-content-between flex-column flex-lg-row">
                                                        <ul role="tablist" class="nav nav-pills">
                                                            <a data-toggle="tab" role="tab" href="#delivery-method" class="btn btn-primary wide next">
                                                                @lang('header.choose_delivery') <i class="fa fa-long-arrow-right"></i>
                                                            </a>
                                                        </ul>
                                                    </div> -->
                                                </div>
                                     </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="block">
                                                <div class="block-header">
                                                    <h6 class="text-uppercase text-primary"><strong> @lang('header.order_statement') </strong></h6>
                                                </div>
                                                <div class="block-body">
                                                    <p> @lang('header.order_statement_note') </p>
                                                    <div class="form-group">
                                                        <textarea rows="7" name="note" id="note" placeholder="Write to us here" class="form-control"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                               <div id="delivery-method" role="tabpanel" class="tab-pane mt-5">
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
                                                    <!-- <div class="CTAs d-flex justify-content-between flex-column flex-lg-row">
                                                        <ul role="tablist" class="nav nav-pills">
                                                            <a data-toggle="tab" role="tab" href="#payment-method" class="btn btn-primary wide next">
                                                                @lang('header.choose_payment') <i class="fa fa-long-arrow-right"></i>
                                                            </a>
                                                        </ul>
                                                    </div> -->
                                                </div>

                                                <div id="payment-method" role="tabpanel" class="tab-pane mt-5">
                                                    <div class="accordion box-shadow-sm mb-4" id="payment-methods">
                                                        <!-- COD -->
                                                        <div class="card">
                                                            <div class="card-header py-3 px-3">
                                                                <div class="custom-control custom-radio">
                                                                <input class="custom-control-input" type="radio" name="pay_method" value="Cash On Delivery" id="pay_method-2" checked>
                                                                <label class="custom-control-label font-weight-medium text-dark" for="pay_method-2" data-toggle="collapse" data-target="#pay_method-2">
                                                                    @lang('header.cod') <img src="{{ asset('images/payments/cash.png') }}" alt="" class="font-size-base align-middle mt-n1 ml-2">
                                                                </label>
                                                                </div>
                                                            </div>
                                                            <div class="collapse show" id="pay_method-2" data-parent="#payment-methods">
                                                                <div class="card-body">
                                                                <p class="font-size-sm mb-0"> @lang('header.cod_note') </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- CASHLESS Pay -->
                                                        <div class="card">
                                                            <div class="card-header py-3 px-3">
                                                                <div class="custom-control custom-radio">
                                                                <input class="custom-control-input" type="radio" name="pay_method" value="MTN Momo Pay" id="pay_method-1">
                                                                <label class="custom-control-label font-weight-medium text-dark" for="pay_method-1" data-toggle="collapse" data-target="#pay_method-1">
                                                                    CASHLESS <img src="{{ asset('images/payments/payment.png') }}" height="30" width="50" alt="" class="font-size-base align-middle mt-n1 ml-2">
                                                                </label>
                                                                </div>
                                                            </div>
                                                            <div class="collapse" id="pay_method-1" data-parent="#payment-methods">
                                                                <div class="card-body">
                                                                <script src="https://checkout.flutterwave.com/v3.js"></script>
                                                                <form>
                                                                <div>
                                                                    <!-- var amount = $("#idOfDiv").val(); -->
                                                                    
                                                                    Your order is UGX {{ \Cart::getTotal() }}
                                                                </div>
                                                                <button type="button" id="start-payment-button" onclick="makePayment()" class="btn btn-primary wide next">Pay Now</button>
                                                                </form>
                                                                        <script>
                                                                        // let value3 = substr(rand(0,time()),0,7);    
                                                                        let value3 = Math.floor(Math.random() * 1000);
                                                                        console.log(value3);
                                                                        console.log(document.getElementById("phone").value, document.getElementById("email").value, document.getElementById("name").value);
                                                                        function makePayment() {
                                                                            FlutterwaveCheckout({
                                                                            public_key: "FLWPUBK_TEST-SANDBOXDEMOKEY-X",
                                                                            tx_ref: "RX1_{{substr(rand(0,time()),0,7)}}",
                                                                            amount: 100,
                                                                            currency: "UGX",
                                                                            payment_options: "card, banktransfer, ussd",
                                                                            redirect_url: "https://beisie.com/cart/checkout/#payment-method",
                                                                            // meta: {
                                                                            //     consumer_id: value3,
                                                                            //     consumer_mac: "92a3-912ba-1192a",
                                                                            // },
                                                                            // callback: function (data) {
                                                                            //     var transaction_id = data.transaction_id;
                                                                            //     console.log(transaction_id);
                                                                            // },
                                                                            // onclose: function(){

                                                                            // }
                                                                            customer: {
                                                                                email: document.getElementById("email").value,
                                                                                phone_number: document.getElementById("phone").value,
                                                                                name: document.getElementById("name").value,
                                                                            },
                                                                            customizations: {
                                                                                title: "Beisie",
                                                                                description: "Payment for an awesome checkout",
                                                                                logo: "https://www.logolynx.com/images/logolynx/22/2239ca38f5505fbfce7e55bbc0604386.jpeg",
                                                                            },
                                                                            });
                                                                        }
                                                                        </script>
                                                                   
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

                                </form>

                            </div>
                        </section>

                    @else
                    
                        <section class="padding-small">
                            <div class="container">
                            <div class="row">
                                <div class="col-xl-8 col-lg-10">
                                    <h1 class="text-superbig text-primary"><i class="fa fa-exclamation-triangle"></i> 404 </h1>
                                    <h2> @lang('header.pagenotfound')! </h2>
                                    <p class="lead">
                                        @lang('header.hello') {{Auth::user()->name}},
                                        <br/> @lang('header.cantfindpage')
                                        <strong> @lang('header.nothere') </strong>
                                    </p>
                                <p class="lead">@lang('header.please_sc') <a href="mailto:buy@beisie.com" class="text-bold"> @lang('header.emailus') </a> @lang('header.or') <a href="/" class="text-bold"> @lang('header.start_from_reception') </a>.</p>
                                </div>
                            </div>
                            </div>
                        </section>

                @endif

            </div>
        </section>

    </main>
    <!-- Main -->

@endsection