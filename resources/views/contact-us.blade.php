@extends('layouts.app')

@section('content')

      <!-- Main -->
        <main class="sidebar-fixed-enabled" style="padding-top: 3rem;">
          <section class="px-lg-3 pt-4">
            <div class="px-3 pt-2">
                <!-- Content-->
                <!-- Page Title (Light)-->
                <div class="bg-secondary py-4">
                    <div class="container d-lg-flex justify-content-between py-2 py-lg-3">
                        <div class="order-lg-2 mb-3 mb-lg-0 pt-lg-2">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb flex-lg-nowrap justify-content-center justify-content-lg-start">
                            <li class="breadcrumb-item"><a class="text-nowrap" href="/"><i class="czi-home"></i> @lang('header.welcome') </a></li>
                            <li class="breadcrumb-item text-nowrap active" aria-current="page"> @lang('header.contactus') </li>
                            </ol>
                        </nav>
                        </div>
                        <div class="order-lg-1 pr-lg-4 text-center text-lg-left">
                        <h1 class="h3 mb-0 text-bold"><strong> @lang('header.contactus') </strong> <br/><small> @lang('header.welovehearing')</small> </h1>
                        </div>
                    </div>
                </div>

                <!-- Page Content-->
                @include('partials.errors')
                @include('partials.success')
                
                <!-- Contact Detail Cards -->
                <section class="container-fluid pt-grid-gutter">
                    <div class="row">
                        <div class="col-xl-6 col-md-6 col-sm-12 mb-grid-gutter">
                        <div class="card">
                            <div class="card-body text-center"><i class="czi-phone h3 mt-2 mb-4 text-primary"></i>
                            <h3 class="h6 mb-3"><strong> @lang('header.contacts') </strong></h3>
                            <ul class="list-unstyled font-size-sm mb-0">
                                <li><span class="text-muted mr-1"></span><a class="nav-link-style" href="tel:+256703195072"> +256-703-195072 </a></li>
                                <li class="mb-0"><span class="text-muted mr-1"></span><a class="nav-link-style" href="tel:+256770784879">+256-770-784879 </a></li>
                            </ul>
                            </div>
                        </div>
                        </div>
                        <div class="col-xl-6 col-md-6 col-sm-12 mb-grid-gutter">
                        <div class="card">
                            <div class="card-body text-center"><i class="czi-mail h3 mt-2 mb-4 text-primary"></i>
                            <h3 class="h6 mb-3"><strong> @lang('header.email') </strong></h3>
                            <ul class="list-unstyled font-size-sm mb-0">
                                <li><span class="text-muted mr-1"></span><a class="nav-link-style" href="mailto:buy@beisie.com">buy@beisie.com</a></li>
                                <li class="mb-0"><span class="text-muted mr-1"></span><a class="nav-link-style" href="mailto:besimye@beisie.com">besimye@beisie.com</a></li>
                            </ul>
                            </div>
                        </div>
                        </div>
                    </div>
                </section>
    
                <!-- Map + Contact -->
                <div class="container-fluid px-0" id="map">
                    <div class="row no-gutters">
                        <div class="col-lg-12 px-4 px-xl-5 py-5 border-top">
                            <h2 class="h4 mb-4"> @lang('header.getintouchnow') </h2>
                            @include('layouts.contact-form')
                        </div>
                    </div>
                </div>
    
            </div>
        </section>

        <!-- Footer-->
        @include('layouts.footer')

      </main>
    <!-- Main -->
  
@endsection