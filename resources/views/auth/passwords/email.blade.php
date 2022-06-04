@extends('layouts.app')

@section('content')

    <!-- Main -->
    <main class="sidebar-fixed-enabled" style="padding-top: 1rem;">
        <section class="px-lg-3 pt-4">
            <div class="px-3 pt-2">

                <!-- Page Content-->
                <div class="container py-4 py-lg-5 my-4">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header">
                                    <h2 class="h4 mb-0">{{ __('Reset Password') }}</h2>
                                    <label>— {{ __('Find Your Account Now') }}</label>
                                </div>

                                <div class="card-body">
                                    @if (session('message'))
                                        <div class="alert alert-success" role="alert">
                                            <i class="fa fa-bullhorn"></i> {{ session('message') }}
                                        </div>
                                    @endif

                                    <form method="POST" action="{{ route('forget.password.post') }}">
                                        @csrf

                                        <div class="form-group row">
                                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email Address') }}</label>
                                            <div class="col-md-6">
                                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row mb-0">
                                            <div class="col-md-6 offset-md-4">
                                                <button type="submit" class="btn btn-primary">
                                                    {{ __('Send Password Reset Link') }}
                                                </button>
                                            </div>
                                        </div>
                                    </form>
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
