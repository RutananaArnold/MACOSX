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
                        <li class="breadcrumb-item text-nowrap active" aria-current="page">Inbox</li>
                    </ol>
                    </nav>
                    <!-- Content-->
                    <section class="d-md-flex justify-content-between align-items-center mb-4 pb-2">
                    <h1 class="h2 mb-3 mb-md-0 mr-3 text-primary">
                        <strong> <i class="fa fa-envelope text-primary"></i> My Inbox </strong>
                        <a href="https://www.beisie.com/webmail" target="_blank" class="btn btn-outline-primary"><strong>Visit Webmail <i class="fa fa-long-arrow-right"></i></strong></a>
                    </h1>
                    <div class="d-flex align-items-center">
                        <div class="d-none d-sm-block py-2 font-size-sm text-muted text-nowrap mr-2">
                            <a> Engage with customers </a>
                        </div>
                    </div>
                    </section>

                    <!-- Inbox -->
                    <section class="product-description no-padding">
                        <div class="container mb-3">
                            <header class="mb-4">
                                <h6 class="lead">Find all your messages and callback requests here. </h6>
                            </header>
                            <ul role="tablist" class="nav nav-tabs flex-column flex-sm-row mb-3">
                                <li class="nav-item"><a data-toggle="tab" href="#messages" role="tab" class="nav-link active">Messages</a></li>
                                <li class="nav-item"><a data-toggle="tab" href="#callbacks" role="tab" class="nav-link">Callbacks</a></li>
                            </ul>
                            <div class="tab-content">
                                <div id="messages" role="tabpanel" class="tab-pane active">
                                    <div class="row">
                                        <div class="col-xl-9">
                                            @if(count($messages) == 0)
                                                <h4 class="text-primary"> 
                                                    <i class="icon fa fa-exclamation-triangle small"></i> 
                                                    <small class="lead">No messages were found</small>
                                                </h4>
                                            @else
                                                @foreach ($messages as $message)
                                                    <div class="row review">
                                                        <div class="col-3 text-center mb-3">
                                                            <div class="customer-profile mb-3">
                                                                <a class="d-inline-block mb-2">
                                                                    <img src="{{ asset('/images/avatar.png')}}" class="img-fluid rounded-circle customer-image">
                                                                </a>
                                                                <span class="text-uppercase text-muted text-small">
                                                                    <a href="tel:{{ $message->phone }}" title="Call" class="btn btn-outline-primary">
                                                                        <i class="fa fa-phone"></i>
                                                                    </a>
                                                                    <a href="mailto:{{ $message->email }}" title="Send Email" class="btn btn-outline-primary"> 
                                                                        <i class="fa fa-envelope"></i>
                                                                    </a>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="col-9 review-text">
                                                            <h5 class="text-primary"> {{ $message->name }} </h5>
                                                            <h6 class="lead" style="font-size:1rem;"> 
                                                                Sent at {{ date('h:i A', strtotime($message -> created_at)) }} on {{ date('j M, Y', strtotime($message -> created_at)) }}
                                                            </h6>
                                                            <p class="text-muted">
                                                                {{ $message->message }}
                                                            </p>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <div id="callbacks" role="tabpanel" class="tab-pane">
                                    <div class="row review">
                                        <div class="col-9">
                                            @if(count($callbacks) == 0)
                                                <h4 class="text-primary"> 
                                                    <i class="icon fa fa-exclamation-triangle small"></i> 
                                                    <small class="lead">No callbacks were found</small>
                                                </h4>
                                            @else
                                                @foreach ($callbacks as $callback)
                                                    <h5 class="text-primary"> 
                                                        @if($callback->name == NULL)
                                                            Anonymous
                                                        @else
                                                            {{ $callback->name }} 
                                                        @endif
                                                    </h5>
                                                    <h6 class="lead" style="font-size:1rem;">
                                                        Asked you to call back on <a href="tel:{{ $callback->phone }}"> {{ $callback->phone }} </a> at {{ date('h:i A', strtotime($callback -> created_at)) }} on {{ date('j M, Y', strtotime($callback -> created_at)) }}
                                                    </h6>
                                                    <hr/>
                                                @endforeach
                                            @endif
                                        </div>
                                    </div>        
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

          </div>
        </section>
    </main>
    <!-- Main -->

@endsection