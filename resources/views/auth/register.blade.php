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
                            <div class="card border-0 box-shadow">
                                <div class="card-body">
                                <img src="{{ asset('images/sign-up.jpg')}}" title="Two young ladies after buying from BEISIE Stores" alt="" class="img-fluid card border-0 box-shadow">
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-6 pt-4 mt-3 mt-md-0">
                            <div class="card border-0">
                                <div class="card-body">
                                    <h2 class="h4 mb-0">Sign Up</h2>
                                    <div class="py-2">
                                        <h3 class="d-inline-block align-middle font-size-base font-weight-semibold mb-2 mr-2">
                                            <strong>Already have an account? <a href="/login">Sign In</a></strong>
                                        </h3>
                                        <hr>
                                    </div>
                                    
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
                                    
                                    <form method="POST" action="{{ route('register') }}" class="needs-validation" novalidate="">
                                        @csrf
                                        
                                        <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                            <label for="name">Username</label>
                                            <input class="form-control" type="text" placeholder="Enter your username" name="name" id="name" required autocomplete="name" autofocus>
                                            <div class="invalid-feedback">Please enter your username!</div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                            <label for="phone">Phone</label>
                                            <input class="form-control" type="text" placeholder="Enter your phone" name="phone" id="phone" required autocomplete="phone" autofocus>
                                            <div class="invalid-feedback">Please enter your phone number!</div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                            <label for="email">E-mail Address</label>
                                            <input class="form-control" type="email" placeholder="Enter your email" name="email" id="email" required autocomplete="email">
                                            <div class="invalid-feedback">Please enter a valid email address!</div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                            <label for="password">Password</label>
                                            <input class="form-control" type="password" placeholder="Enter password" name="password" id="password" required autocomplete="new-password">
                                            <div class="invalid-feedback">Please enter password!</div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                            <label for="password-confirm">Confirm Password</label>
                                            <input class="form-control" type="password" placeholder="Re-enter your password" name="password_confirmation" id="password-confirm" required autocomplete="new-password">
                                            <div class="invalid-feedback">Passwords do not match!</div>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="text-right">
                                        <button class="btn btn-primary" type="submit"><i class="czi-user mr-2 ml-n1"></i>Sign Up</button>
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