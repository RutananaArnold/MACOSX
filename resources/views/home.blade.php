@extends('layouts.app')

@section('content')

      <!-- Main -->
        <main class="sidebar-fixed-enabled" style="padding-top: 4rem;">
          <section class="px-lg-3 pt-4">
            <div class="px-3 pt-2">

            @if(Auth::check())  
            
                <!-- Intro Section-->
                <section class="hero hero-page gray-bg padding-small mb-2">
                    <div class="container">
                        <div class="row d-flex">
                            <div class="col-lg-9 order-2 order-lg-1">
                                <h1 class="text-primary" style="font-size:2rem;">
                                    <i class="fa fa-handshake-o"></i> @lang('header.hello')
                                    {{Auth::user()->name}},
                                </h1>
                                <p class="lead" style="font-size:1.2rem;">
                                    <a href="/tags/1"> @lang('header.staysafe_home') </a> @lang('header.home_note') <a href="/categories/3">@lang('header.homeoffice_home') </a>.
                                    @lang('header.thankshome')
                                </p>
                            </div>
                            <div class="col-lg-3 text-right order-1 order-lg-2">
                                <ul class="breadcrumb justify-content-lg-end">
                                <li class="breadcrumb-item"><a href="/"> @lang('header.home') </a></li>
                                <li class="breadcrumb-item active"> @lang('header.orders') </li>
                                </ul>
                            </div>
                        </div>
                        <a href="/categories" class="btn btn-outline-primary wide shop-now">
                            <strong> @lang('header.gotoshop') <i class="fa fa-shopping-cart"></i></strong>
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

                        <div class="col-lg-8 col-xl-9 pl-lg-3">
                            <table class="table table-hover table-responsive-md">
                                <h2 class="text-primary mb-3">@lang('header.my_orders')</h2>
                                @if (count($orders) == NULL)
                                    <h5>@lang('header.sorry') {{Auth::user()->name}}, @lang('header.no_orders')
                                    <br/><br/> <a class="btn btn-outline-danger wide" href="/categories"> @lang('header.order_now') </a></h5>
                                @else
                                    <thead>
                                        <tr>
                                        <th>ID</th>
                                        <!-- <th>@lang('header.date')</th> -->
                                        <th>@lang('header.status')</th>
                                        <th>@lang('header.action')</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($orders as $order)
                                            <tr>
                                                <th>
													@if ($order->order_id != NULL)
														{{$order->order_id}}
													@else
														<a class="text-primary"><i class="fa fa-exclamation-circle"></i> NONE</a>
													@endif
												</th>
                                                <!-- <td> {{ date('M j, Y', strtotime($order->created_at)) }} </td> -->
												@if ($order->order_id == NULL)
													<td><span class="badge badge-success"> INCOMPLETE </span></td>
												@else		
													@if ($order->status == 'completed')
														<td><span class="badge badge-success"> {{$order->status}} </span></td>
													@else
														<td><span class="badge badge-primary"> {{$order->status}} </span></td>
													@endif
												@endif
                                                <td>
													@if ($order->order_id == NULL)
														<a href="/cart" target="_blank" rel="noopener" class="btn btn-primary btn-sm"> Complete </a>
													@else
														<a href="/orders/{{$order->id}}" class="btn btn-primary btn-sm">@lang('header.view')</a>
													@endif
												</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                @endif
                            </table>
                        </div>
                        </div>
                    </div>
                </section>

            @endif

        </div>
    </section>

    <!-- Footer-->
    @include('layouts.footer')

  </main>
<!-- Main -->

@endsection