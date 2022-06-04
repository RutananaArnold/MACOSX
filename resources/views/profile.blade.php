@extends('layouts.app')

@section('content')

      <!-- Main -->
        <main class="sidebar-fixed-enabled" style="padding-top: 4rem;">
          <section class="px-lg-3 pt-4">
            <div class="px-3 pt-2">

                @if(Auth::check())
                    
                    <!-- navbar-->
                    @include('layouts.navbar')

                    <!-- Intro Section-->
                    <section class="hero hero-page gray-bg padding-small mb-2">
                        <div class="container">
                            <div class="row d-flex">
                                <div class="col-lg-9 order-2 order-lg-1">
                                    <h1 class="text-primary" style="font-size:2rem;">
                                        <i class="czi-user"></i> @lang('header.profile')
                                    </h1>
                                </div>
                                <div class="col-lg-3 text-right order-1 order-lg-2">
                                    <ul class="breadcrumb justify-content-lg-end">
                                    <li class="breadcrumb-item"><a href="/"> @lang('header.home') </a></li>
                                    <li class="breadcrumb-item active"> @lang('header.profile') </li>
                                    </ul>
                                </div>
                            </div>
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
                                        <a href="/home" class="list-group-item d-flex justify-content-between align-items-center">
                                            <span><i class="fa fa-shopping-bag"></i> @lang('header.orders') </span><small class="badge badge-pill badge-light"> {{ count($orders) }} </small>
                                        </a>
                                        <a href="/profile" class="active list-group-item d-flex justify-content-between align-items-center"><span><i class="fa fa-user-circle"></i> @lang('header.my_prof') </span></a>
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

                                <div class="col-lg-8 col-xl-9 pl-lg-3 mb-4">
                                    <div class="block-header mb-3">
                                        <h4 class="text-primary">@lang('header.changeps')</h4>
                                    </div>
                                    <form method="POST" action="{{ route('change.password') }}" class="content-block">
                                        {{ csrf_field() }}

                                        <div class="row">
                                            <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="password" class="form-label text-bold">@lang('header.oldps')</label>
                                                <input name="current_password" id="password" type="password" class="form-control" placeholder="@lang('header.oldps')" required>
                                            </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="password" class="form-label text-bold">@lang('header.newps')</label>
                                                <input name="new_password" id="new_password" type="password" class="form-control" placeholder="@lang('header.newps')" required>
                                            </div>
                                            </div>
                                            <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="password" class="form-label text-bold">@lang('header.confirmps')</label>
                                                <input name="new_confirm_password" id="new_confirm_password" type="password" class="form-control" placeholder="@lang('header.confirmps')" required>
                                            </div>
                                            </div>
                                        </div>
                                        <!-- /.row-->
                                        <div class="text-left">
                                            <button type="submit" class="btn btn-primary btn-template wide"><i class="fa fa-save"></i> @lang('header.changeps')</button>
                                        </div>
                                    </form>

                                    <div> <br/><br/> </div>

                                    <div class="block-header mb-3">
                                        <h4 class="text-primary">@lang('header.editbio')</h4>
                                    </div>
                                    <form method="POST" action="{{ route('users.update', Auth::user()->id) }}" class="content-block">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="hidden" name="_method" value="PUT">

                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="name" class="form-label text-bold">@lang('header.username')</label>
                                                    <input name="name" id="name" type="text" class="form-control" value="{{ Auth::user()->name }}" placeholder="@lang('header.username_note')" required>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="phone" class="form-label text-bold">@lang('header.phonenumber')</label>
                                                    <input name="phone" id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" value="{{ Auth::user()->phone }}" placeholder="@lang('header.phonenumber_note')" required>
                                                    @error('phone')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="street" class="form-label text-bold">@lang('header.street')</label>
                                                    <input name="street" id="street" type="text" class="form-control" value="{{ Auth::user()->street }}" placeholder="e.g. Weraga Road, Queens Way, etc">
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="form-group">
                                                    <label for="town" class="form-label text-bold">@lang('header.town')</label>
                                                    <input name="town" id="town" type="text" class="form-control" value="{{ Auth::user()->town }}" placeholder="e.g Kabowa, Rubaga, Kololo">
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="form-group">
                                                    <label for="district" class="form-label text-bold">@lang('header.district')</label>
                                                    <input name="district" id="district" type="text" class="form-control" value="{{ Auth::user()->district }}" placeholder="e.g Kampala, Wakiso, Mukono">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-12">
                                                <button type="submit" class="btn btn-primary btn-template wide"><i class="fa fa-save"></i> @lang('header.savechanges') </button>
                                            </div>
                                        </div>
                                    </form>
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