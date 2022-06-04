@extends('layouts.app')

@section('content')

    <!-- Main -->
    <main class="sidebar-fixed-enabled" style="padding-top: 1rem;">
        <section class="px-lg-3 pt-4">
            <div class="px-3 pt-2">

                <!-- Page Content-->
                <div class="container py-4 py-lg-5 my-4">
                    <div class="card border-0 box-shadow">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card border-0">
                                <div class="card-body">
                                <img src="{{ asset('images/sign-in.jpg')}}" title="A young lady showing off products at BEISIE Stores" alt="" class="img-fluid card border-0 box-shadow">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card border-0 box-shadow">
                                <div class="card-body">
                                    <h2 class="h4 mb-0">Sign In</h2>
                                    <div class="py-2">
                                        <h3 class="d-inline-block align-middle font-size-base font-weight-semibold mb-2 mr-2">
                                            <strong>Don't have an account with us? <a href="/register">Sign Up Now</a></strong>
                                        </h3>
                                    </div>
                                    <hr>
                                    <h3 class="font-size-base pt-4 pb-2">Sign in to start shopping</h3>
                                    @if (session('message'))
                                        <div class="alert alert-success" role="alert">
                                            <i class="fa fa-bullhorn"></i> {{ session('message') }}
                                        </div>
                                    @endif
                                    @if (isset($errors) && count($errors) > 0)
                                        <div class="alert alert-dismissable alert-primary fade show">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true"> &times; </span>
                                            </button>
                                            
                                            @foreach ($errors->all() as $error)
                                                <span class="lead"> <small><i class="fa fa-exclamation-triangle"></i> {!! $error !!} </small> </span><br>
                                            @endforeach
                                        
                                        </div>
                                    @endif
                                    
                                    @if (session() -> has('success'))
                                        <div class="alert alert-dismissable alert-primary fade show">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true"> &times; </span>
                                            </button>
                                            
                                            <strong class="lead">
                                                <small><i class="fa fa-bullhorn"></i> {!! session() -> get('success') !!} </small>
                                            </strong>
                                            
                                        </div>
                                    @endif
                                    <form method="POST" action="{{ route('login') }}" class="needs-validation" novalidate="">
                                        @csrf

                                        <div class="input-group-overlay form-group">
                                        <div class="input-group-prepend-overlay"><span class="input-group-text"><i class="czi-mail"></i></span></div>
                                        <input class="form-control prepended-form-control" id="email" name="email" type="email" placeholder="Email Address" required autocomplete="email" autofocus>
                                        </div>

                                        <div class="input-group-overlay form-group">
                                        <div class="input-group-prepend-overlay"><span class="input-group-text"><i class="czi-locked"></i></span></div>
                                        <div class="password-toggle">
                                            <input class="form-control prepended-form-control" id="password" name="password" type="password" placeholder="Enter your password" required autocomplete="current-password">
                                            <label class="password-toggle-btn">
                                            <input class="custom-control-input" type="checkbox"><i class="czi-eye password-toggle-indicator"></i><span class="sr-only">Show password</span>
                                            </label>
                                        </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="d-flex flex-wrap justify-content-between">
                                                    <div class="custom-control custom-checkbox">
                                                        <input class="custom-control-input" type="checkbox" id="remember" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                                        <label class="custom-control-label" for="remember"> {{ __('Remember Me') }} </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="d-flex flex-wrap justify-content-end">
                                                    <a href="{{ route('forget.password.get') }}">
                                                        <span style="font-size:0.9rem;">
                                                            {{ __('Forgot Password?') }}
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <hr class="mt-4">
                                        <div class="text-right pt-4">
                                        <button class="btn btn-primary" type="submit"><i class="czi-sign-in mr-2 ml-n21"></i>Sign In</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                
            </div>
        </section>
    </main>
    <!-- Main -->
  
@endsection