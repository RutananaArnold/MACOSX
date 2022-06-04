@extends('layouts.app')

@section('content')

      <!-- Main -->
        <main class="sidebar-fixed-enabled" style="padding-top: 1rem;">
          <section class="px-lg-3 pt-4">
            <div class="px-3 pt-2">

                <!-- Error 404 Content -->
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
    
            </div>
        </section>

      </main>
    <!-- Main -->
  
@endsection