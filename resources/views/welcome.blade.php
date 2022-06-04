@extends('layouts.app')

@section('content')

      <!-- Main -->
        <main class="sidebar-fixed-enabled" style="padding-top: 5rem;">
          <section class="px-lg-3 pt-4">
            <div class="px-3 pt-2">
              <!-- Content-->
              @include('partials.errors')
              @include('partials.success')


              <!-- Slider-->
              <section class="cz-carousel mb-2 mb-sm-2">
                <div class="row">
                  <!-- Sliding Banners -->
                  <div class="col-xl-8 order-xl-1 pt-4 mt-3 mt-xl-0 pt-xl-0">
                    <div class="cz-carousel-inner" data-carousel-options="{&quot;items&quot;: 1, &quot;mode&quot;: &quot;gallery&quot;, &quot;nav&quot;: false, &quot;autoplay&quot;: true, &quot;responsive&quot;: {&quot;0&quot;: {&quot;nav&quot;: true, &quot;controls&quot;: false}, &quot;576&quot;: {&quot;nav&quot;: false, &quot;controls&quot;: true}}}">
                      <!-- Slide 1-->
                      <div>
                        <div class="rounded-lg px-md-5 text-center text-xl-left  bg-primary">
                          <div class="d-xl-flex justify-content-between align-items-center px-4 px-sm-5 mx-auto" style="max-width: 1226px;">
                            <div class="py-5 mr-xl-4 mx-auto mx-xl-0" style="max-width: 490px;">
                              <h2 class="h2 text-light">6*6 Comfy Duvet Set</h2>
                              <p class="text-light pb-2 h5">Great warmth for a sweet soft sleep </p><br/>
                              <div class="d-flex flex-wrap justify-content-center justify-content-xl-start">
                                <a class="btn-market mb-0" href="/layouts/navbar?query=duvet" target="_blank" role="button">
                                  <span class="btn-market-title mb-0" style="font-size:1.4rem;">UGX 120,000</span>
                                  <del class="btn-market-subtitle py-0" style="font-size:1rem;">UGX 150,000</del>
                                </a>
                              </div>
                            </div>
                            <div>
                            <img src="{{ asset('images/welcome/slider-1.png')}}" alt=""></div>
                          </div>
                        </div>
                      </div>
                      <!-- Slide 2-->
                      <div>
                        <div class="rounded-lg px-md-5 text-center text-xl-left  bg-primary">
                          <div class="d-xl-flex justify-content-between align-items-center px-4 px-sm-5 mx-auto" style="max-width: 1226px;">
                            <div class="py-5 mr-xl-4 mx-auto mx-xl-0" style="max-width: 490px;">
                              <h2 class="h2 text-light">4 Way Tummy Trimmer</h2>
                              <p class="text-light pb-2 h5">Cut extra tummy fat very easily</p>
                              <div class="d-flex flex-wrap justify-content-center justify-content-xl-start">
                                <a class="btn-market mb-0" href="/layouts/navbar?query=tummy+trimmer" target="_blank" role="button">
                                  <span class="btn-market-title mb-0" style="font-size:1.4rem;">UGX 75,000</span>
                                  <del class="btn-market-subtitle py-0" style="font-size:1rem;">UGX 120,000</del>
                                </a>
                              </div>
                            </div>
                            <div>
                            <img src="{{ asset('images/welcome/slider-2.png')}}" alt=""></div>
                          </div>
                        </div>
                      </div>
                      <!-- Slide 3-->
                      <div>
                        <div class="rounded-lg px-md-5 text-center text-xl-left  bg-primary">
                          <div class="d-xl-flex justify-content-between align-items-center px-4 px-sm-5 mx-auto" style="max-width: 1226px;">
                            <div class="py-5 mr-xl-4 mx-auto mx-xl-0" style="max-width: 490px;">
                              <h2 class="h2 text-light">41g Germany Slimming Herb</h2>
                              <p class="text-light pb-2 h5">Loose weight and cut extra tummy fat</p><br/>
                              <div class="d-flex flex-wrap justify-content-center justify-content-xl-start">
                                <a class="btn-market mb-0" href="/layouts/navbar?query=sliming" target="_blank" role="button">
                                  <span class="btn-market-title mb-0" style="font-size:1.4rem;">UGX 50,000</span>
                                  <del class="btn-market-subtitle py-0" style="font-size:1rem;">UGX 80,000</del>
                                </a>
                              </div>
                            </div>
                            <div>
                            <img src="{{ asset('images/welcome/slider-3.png')}}" alt=""></div>
                          </div>
                        </div>
                      </div>
                      <!-- Slide 4-->
                      <div>
                        <div class="rounded-lg px-md-5 text-center text-xl-left  bg-primary">
                          <div class="d-xl-flex justify-content-between align-items-center px-4 px-sm-5 mx-auto" style="max-width: 1226px;">
                            <div class="py-5 mr-xl-4 mx-auto mx-xl-0" style="max-width: 490px;">
                              <h2 class="h2 text-light">Bathroom Organizer</h2>
                              <p class="text-light pb-2 h5"> Store all your valuables very steadily </p><br/>
                              <div class="d-flex flex-wrap justify-content-center justify-content-xl-start">
                                <a class="btn-market mb-0" href="/layouts/navbar?query=bathroom+organizer" target="_blank" role="button">
                                  <span class="btn-market-title mb-0" style="font-size:1.4rem;">UGX 150,000</span>
                                  <del class="btn-market-subtitle py-0" style="font-size:1rem;">UGX 200,000</del>
                                </a>
                              </div>
                            </div>
                            <div>
                            <img src="{{ asset('images/welcome/slider-4.png')}}" alt=""></div>
                          </div>
                        </div>
                      </div>
                      <!-- Slide 5-->
                      <div>
                        <div class="rounded-lg px-md-5 text-center text-xl-left  bg-primary">
                          <div class="d-xl-flex justify-content-between align-items-center px-4 px-sm-5 mx-auto" style="max-width: 1226px;">
                            <div class="py-5 mr-xl-4 mx-auto mx-xl-0" style="max-width: 490px;">
                              <h2 class="h2 text-light">32" Full HD Globalstar TV</h2>
                              <p class="text-light pb-2 h5"> Crystal clear multi-port fun display for you </p><br/>
                              <div class="d-flex flex-wrap justify-content-center justify-content-xl-start">
                                <a class="btn-market mb-0" href="/layouts/navbar?query=globalstar" target="_blank" role="button">
                                  <span class="btn-market-title mb-0" style="font-size:1.4rem;">UGX 555,000</span>
                                  <del class="btn-market-subtitle py-0" style="font-size:1rem;">UGX 650,000</del>
                                </a>
                              </div>
                            </div>
                            <div>
                            <img src="{{ asset('images/welcome/slider-5.png')}}" alt=""></div>
                          </div>
                        </div>
                      </div>
                      <!-- Slide 6-->
                      <div>
                        <div class="rounded-lg px-md-5 text-center text-xl-left  bg-primary">
                          <div class="d-xl-flex justify-content-between align-items-center px-4 px-sm-5 mx-auto" style="max-width: 1226px;">
                            <div class="py-5 mr-xl-4 mx-auto mx-xl-0" style="max-width: 490px;">
                              <h2 class="h2 text-light">260L Single Door Refrigerator</h2>
                              <p class="text-light pb-2 h5"> Crystal clear multi-port fun display for you </p><br/>
                              <div class="d-flex flex-wrap justify-content-center justify-content-xl-start">
                                <a class="btn-market mb-0" href="/layouts/navbar?query=refrigerator" target="_blank" role="button">
                                  <span class="btn-market-title mb-0" style="font-size:1.4rem;">UGX 650,000</span>
                                  <del class="btn-market-subtitle py-0" style="font-size:1rem;">UGX 1,000,000</del>
                                </a>
                              </div>
                            </div>
                            <div>
                            <img src="{{ asset('images/welcome/slider-6.png')}}" alt=""></div>
                          </div>
                        </div>
                      </div>

                    </div>
                  </div>
                  <!-- Static Banners -->
                  <div class="col-xl-4 order-xl-2 pt-4 mt-3 mt-xl-0 pt-xl-0">
                    <div class="table-responsive" data-simplebar="">
                      <div class="d-flex d-xl-block"><a class="media w-100 align-items-center bg-faded-info rounded-lg pt-2 pl-2 mb-4 mr-4 mr-xl-0" href="/tags/29" style="min-width: 16rem;"><img src="{{ asset('images/welcome/s-banner-1.png')}}" width="125" alt="">
                          <div class="media-body py-4 px-2">
                            <h5 class="mb-2">Sleep <span class="font-weight-light">Like</span><br> <span class="font-weight-light">A </span>Royal<br><span class="font-weight-light">Tonight </span></h5>
                            <div class="text-info font-size-sm"> @lang('header.shop_now') <i class="czi-arrow-right font-size-xs ml-1"></i></div>
                          </div></a><a class="media w-100 align-items-center bg-faded-primary rounded-lg pt-2 pl-2 mb-4 mr-4 mr-xl-0" href="/categories/4" style="min-width: 16rem;"><img src="{{ asset('images/welcome/s-banner-2.png')}}" width="125" alt="">
                          <div class="media-body py-4 px-2">
                            <h5 class="mb-2"><span class="font-weight-light">Keep </span>Fit<br><span class="font-weight-light">Stay </span>Healthy<br><span class="font-weight-light">And </span>Live Well</h5>
                            <div class="text-warning font-size-sm"> @lang('header.shop_now') <i class="czi-arrow-right font-size-xs ml-1"></i></div>
                          </div></a>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
              
              <!-- Most Popular Items -->
              <section class="pt-2">
                <!-- Heading-->
                <div class="d-flex flex-wrap justify-content-between align-items-center pt-1 border-bottom pb-2 mb-0">
                  <h2 class="h3 mb-0 pt-3 mr-3"> @lang('header.mostpopular') </h2>
                  <div class="pt-3"><a class="btn btn-outline-primary btn-sm" href="/tags/2" target="_blank"> @lang('header.seemore') <i class="czi-arrow-right ml-1 mr-n1"></i></a></div>
                </div>
                @foreach ($tags as $tag)
                  @if ($tag->id == 2)
                    <div class="cz-carousel cz-controls-static cz-controls-outside cz-dots-enabled pt-2">
                      <div class="cz-carousel-inner" data-carousel-options="{&quot;items&quot;: 2, &quot;gutter&quot;: 16, &quot;nav&quot;: false, &quot;controls&quot;: true, &quot;nav&quot;: false, &quot;autoHeight&quot;: true, &quot;responsive&quot;: {&quot;0&quot;:{&quot;items&quot;:2}, &quot;480&quot;:{&quot;items&quot;:2}, &quot;720&quot;:{&quot;items&quot;:3}, &quot;991&quot;:{&quot;items&quot;:2}, &quot;1140&quot;:{&quot;items&quot;:3}, &quot;1300&quot;:{&quot;items&quot;:4}, &quot;1500&quot;:{&quot;items&quot;:5}}}">
                          @foreach ($tag->products as $product)
                            <!-- Product-->
                            <div class="col-lg-3 col-6 px-2 px-sm-2 mb-sm-4 mb-3">
                              <div class="card product-card card-static pb-3">
                                @if($product->new_price != NULL)
                                  <span class="badge badge-primary badge-shadow"> - {{ $product->percentage }}% </span>
                                @endif
                                <a class="card-img-top d-block overflow-hidden" href="/products/{{$product->id}}"><img src="/uploads/products/{{$product->imagefile1}}" alt="{{$product->name}}"></a>
                                <div class="card-body py-2">
                                  @if($product->status != NULL)
                                    <a href="/products/{{$product->id}}" class="product-meta d-block font-size-xs pb-1">
                                      <i class="fa fa-tag"></i> {{$product->status}} 
                                    </a>
                                  @endif
                                  <h3 class="product-title font-size-sm text-truncate"><a href="/products/{{$product->id}}"> {{$product->name}} </a></h3>
                                  @if($product->new_price != NULL)
                                        <div class="product-price"><span class="text-accent"><strong> <small>UGX</small> {{$product->new_price}} </strong></span>
                                          <del class="font-size-sm text-muted"><small>UGX</small> {{$product->orig_price}}</del>
                                        </div>
                                      @else
                                        <div class="product-price"><span class="text-accent"><strong> <small>UGX</small> {{$product->orig_price}} </span> </strong></div>
                                  @endif
                                </div>
                                <div class="product-floating-btn">
                                  <a href="/products/{{$product->id}}" class="btn btn-primary btn-shadow btn-sm">+<i class="czi-cart font-size-base ml-1"></i></a>
                                </div>
                              </div>
                            </div>
                            <!-- Product -->
                          @endforeach
                      </div>
                    </div>
                  @endif
                @endforeach
              </section>
              
              <!-- Hottest Deals -->
              <section class="pt-0 pb-2">
                <!-- Heading-->
                <div class="d-flex flex-wrap justify-content-between align-items-center pt-1 border-bottom pb-2 mb-0">
                  <h2 class="h3 mb-0 pt-3 mr-3"> @lang('header.staysafe') </h2>
                  <div class="pt-3"><a class="btn btn-outline-primary btn-sm" href="/tags/1" target="_blank"> @lang('header.seemore') <i class="czi-arrow-right ml-1 mr-n1"></i></a></div>
                </div>
                @foreach ($tags as $tag)
                  @if ($tag->id == 1)
                    <div class="cz-carousel cz-controls-static cz-controls-outside cz-dots-enabled pt-2">
                      <div class="cz-carousel-inner" data-carousel-options="{&quot;items&quot;: 2, &quot;gutter&quot;: 16, &quot;nav&quot;: false, &quot;autoplay&quot;: true, &quot;controls&quot;: true, &quot;autoHeight&quot;: true, &quot;responsive&quot;: {&quot;0&quot;:{&quot;items&quot;:2}, &quot;480&quot;:{&quot;items&quot;:2}, &quot;720&quot;:{&quot;items&quot;:3}, &quot;991&quot;:{&quot;items&quot;:2}, &quot;1140&quot;:{&quot;items&quot;:3}, &quot;1300&quot;:{&quot;items&quot;:4}, &quot;1500&quot;:{&quot;items&quot;:5}}}">
                          @foreach ($tag->products as $product)
                            <!-- Product-->
                            <div class="col-lg-3 col-6 px-2 px-sm-2 mb-sm-4 mb-3">
                              <div class="card product-card card-static pb-3">
                                @if($product->new_price != NULL)
                                  <span class="badge badge-primary badge-shadow"> - {{ $product->percentage }}% </span>
                                @endif
                                <a class="card-img-top d-block overflow-hidden" href="/products/{{$product->id}}"><img src="/uploads/products/{{$product->imagefile1}}" alt="{{$product->name}}"></a>
                                <div class="card-body py-2">
                                  @if($product->status != NULL)
                                    <a href="/products/{{$product->id}}" class="product-meta d-block font-size-xs pb-1">
                                      <i class="fa fa-tag"></i> {{$product->status}} 
                                    </a>
                                  @endif
                                  <h3 class="product-title font-size-sm text-truncate"><a href="/products/{{$product->id}}"> {{$product->name}} </a></h3>
                                  @if($product->new_price != NULL)
                                        <div class="product-price"><span class="text-accent"><strong> <small>UGX</small> {{$product->new_price}} </strong></span>
                                          <del class="font-size-sm text-muted"><small>UGX</small> {{$product->orig_price}}</del>
                                        </div>
                                      @else
                                        <div class="product-price"><span class="text-accent"><strong> <small>UGX</small> {{$product->orig_price}} </span> </strong></div>
                                  @endif
                                </div>
                                <div class="product-floating-btn">
                                  <a href="/products/{{$product->id}}" class="btn btn-primary btn-shadow btn-sm">+<i class="czi-cart font-size-base ml-1"></i></a>
                                </div>
                              </div>
                            </div>
                            <!-- Product -->
                          @endforeach
                      </div>
                    </div>
                  @endif
                @endforeach
              </section>

              <!-- Banners-->
              <section class="container pb-2 mb-md-1">
                <div class="row">
                  <div class="col-md-8 mb-4">
                    <div class="d-sm-flex justify-content-between align-items-center bg-secondary overflow-hidden rounded-lg">
                      <div class="py-4 my-2 my-md-0 py-md-5 px-4 ml-md-3 text-center text-sm-left">
                        <h4 class="font-size-lg font-weight-light mb-2"><i class="fa fa-bullhorn"></i> Hooray! @lang('header.high_end_discounts')</h4>
                        <h3 class="mb-4">Converse All Star <br/>@lang('header.and_many_more') ... </h3><a class="btn btn-primary btn-shadow btn-sm" href="/categories"><i class="fa fa-shopping-cart"></i> @lang('header.shop_now') </a>
                      </div><img class="d-block ml-auto" src="{{ asset('images/welcome/deals-banner.jpg')}}" alt="">
                    </div>
                  </div>
                  <div class="col-md-4 mb-4">
                    <div class="d-flex flex-column h-100 justify-content-center bg-size-cover bg-position-center rounded-lg" style="background-image: url({{ asset('images/welcome/any-inquiries.jpg')}});">
                      <div class="py-4 my-2 px-4 text-center">
                        <div class="py-1">
                          <h5 class="mb-2"> @lang('header.any_inquiries') </h5>
                          <a class="btn btn-primary btn-shadow btn-sm" href="/contact-us"> @lang('header.contactus') </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>

              <!-- Our Collection -->
              <section class="container mb-2 pb-2 pb-sm-0 mb-sm-5">
                <div class="row">
                  <!-- Banner Image -->
                  <div class="col-md-5">
                    <div class="d-flex flex-column h-100 overflow-hidden rounded-lg" style="background-color: #e2e9ef;">
                      <div class="d-flex justify-content-between px-grid-gutter py-grid-gutter">
                        <div>
                          <h3 class="mb-1"> @lang('header.our_col') </h3><a class="font-size-md" href="/categories" target="_blank"> <i class="fa fa-shopping-cart font-size-xs align-middle ml-1"></i> @lang('header.happyshopping') <i class="czi-arrow-right font-size-xs align-middle ml-1"></i></a>
                        </div>
                        <div class="cz-custom-controls" id="health-factors">
                          <button type="button"><i class="czi-arrow-left"></i></button>
                          <button type="button"><i class="czi-arrow-right"></i></button>
                        </div>
                      </div><a class="d-none d-md-block mt-auto" href="/categories" target="_blank"><img class="d-block w-100" src="{{ asset('images\welcome\collection.png')}}" alt=""></a>
                    </div>
                  </div>
                  <!-- Product grid (carousel)-->
                  <div class="col-md-7 pt-4 pt-md-0">
                    <div class="cz-carousel">
                      <div class="cz-carousel-inner" data-carousel-options="{&quot;nav&quot;: false, &quot;autoplay&quot;: true, &quot;controlsContainer&quot;: &quot;#health-factors&quot;}">
                        <!-- Keep Fit -->
                        <div>
                          <div class="row mx-n2">
                            
                            <div class="col-lg-6 col-6 px-0 px-sm-2 mb-sm-4">
                              <div class="card product-card card-static">
                                <a class="card-img-top d-block overflow-hidden py-2" href="/categories/4"><img src="{{ asset('images/welcome/col-1.png')}}" alt=""></a>
                                <div class="card-body py-2">
                                  <h3 class="product-title font-size-lg mb-1"><a href="/categories/4"> @lang('header.keepfit') </a></h3>
                                  <a class="product-meta d-block font-size-xs pb-1" href="/categories/4"><i class="fa fa-paperclip"></i> @lang('header.sports_outdoors') </a>
                                </div>
                              </div>
                            </div>

                            <div class="col-lg-6 col-6 px-0 px-sm-2 mb-sm-4">
                              <div class="card product-card card-static">
                                <a class="card-img-top d-block overflow-hidden py-2" href="/categories/1"><img src="{{ asset('images/welcome/col-2.png')}}" alt=""></a>
                                <div class="card-body py-2">
                                  <h3 class="product-title font-size-lg mb-1"><a href="/categories/1"> @lang('header.selfcare') </a></h3>
                                  <a class="product-meta d-block font-size-xs pb-1" href="/categories/1"><i class="fa fa-paperclip"></i> @lang('header.health_beauty') </a>
                                </div>
                              </div>
                            </div>

                            <div class="col-lg-6 col-6 px-0 px-sm-2 mb-sm-4">
                              <div class="card product-card card-static">
                                <a class="card-img-top d-block overflow-hidden py-2 text-center" href="/categories/3"> 
                                  <img src="{{ asset('images/welcome/col-3.png')}}" alt="">
                                </a>
                                <div class="card-body py-2">
                                  <h3 class="product-title font-size-lg mb-1"><a href="/categories/3"> @lang('header.freshhome') </a></h3>
                                  <a class="product-meta d-block font-size-xs pb-1" href="/categories/3"><i class="fa fa-paperclip"></i> @lang('header.home_office') </a>
                                </div>
                              </div>
                            </div>

                            <div class="col-lg-6 col-6 px-0 px-sm-2 mb-sm-4">
                              <div class="card product-card card-static">
                                <a class="card-img-top d-block overflow-hidden py-2" href="/categories/2"><img src="{{ asset('images/welcome/col-4.png')}}" alt=""></a>
                                <div class="card-body py-2">
                                  <h3 class="product-title font-size-lg mb-1"><a href="/categories/2"> @lang('header.electronics') </a></h3>
                                  <a class="product-meta d-block font-size-xs pb-1" href="/categories/2"><i class="fa fa-paperclip"></i> @lang('header.automate_work') </a>
                                </div>
                              </div>
                            </div>
                            
                          </div>
                        </div>
                        <!-- Product -->
                      </div>
                    </div>
                  </div>
                </div>
              </section>
    
              <!-- Beauty At Best -->
              <section class="pt-0">
                <!-- Heading-->
                <div class="d-flex flex-wrap justify-content-between align-items-center pt-1 border-bottom pb-2 mb-0">
                  <h2 class="h3 mb-0 pt-3 mr-3"> @lang('header.beauty_at_best') </h2>
                  <div class="pt-3"><a class="btn btn-outline-primary btn-sm" href="/categories/1" target="_blank"> @lang('header.seemore') <i class="czi-arrow-right ml-1 mr-n1"></i></a></div>
                </div>
                @foreach ($categories as $category)
                  @if ($category->id == 1)
                    <div class="cz-carousel cz-controls-static cz-controls-outside cz-dots-enabled pt-2">
                      <div class="cz-carousel-inner" data-carousel-options="{&quot;items&quot;: 2, &quot;gutter&quot;: 16, &quot;nav&quot;: false, &quot;autoplay&quot;: true, &quot;controls&quot;: true, &quot;autoHeight&quot;: true, &quot;responsive&quot;: {&quot;0&quot;:{&quot;items&quot;:1}, &quot;480&quot;:{&quot;items&quot;:2}, &quot;720&quot;:{&quot;items&quot;:3}, &quot;991&quot;:{&quot;items&quot;:2}, &quot;1140&quot;:{&quot;items&quot;:3}, &quot;1300&quot;:{&quot;items&quot;:4}, &quot;1500&quot;:{&quot;items&quot;:5}}}">
                          @foreach ($category->products as $product)
                            <!-- Product-->
                            <div class="col-lg-3 col-6 px-2 px-sm-2 mb-sm-4 mb-3">
                              <div class="card product-card card-static pb-3">
                                @if($product->new_price != NULL)
                                  <span class="badge badge-primary badge-shadow"> - {{ $product->percentage }}% </span>
                                @endif
                                <a class="card-img-top d-block overflow-hidden" href="/products/{{$product->id}}"><img src="/uploads/products/{{$product->imagefile1}}" alt="{{$product->name}}"></a>
                                <div class="card-body py-2">
                                  @if($product->status != NULL)
                                    <a href="/products/{{$product->id}}" class="product-meta d-block font-size-xs pb-1">
                                      <i class="fa fa-tag"></i> {{$product->status}} 
                                    </a>
                                  @endif
                                  <h3 class="product-title font-size-sm text-truncate"><a href="/products/{{$product->id}}"> {{$product->name}} </a></h3>
                                  @if($product->new_price != NULL)
                                        <div class="product-price"><span class="text-accent"><strong> <small>UGX</small> {{$product->new_price}} </strong></span>
                                          <del class="font-size-sm text-muted"><small>UGX</small> {{$product->orig_price}}</del>
                                        </div>
                                      @else
                                        <div class="product-price"><span class="text-accent"><strong> <small>UGX</small> {{$product->orig_price}} </span> </strong></div>
                                  @endif
                                </div>
                                <div class="product-floating-btn">
                                  <a href="/products/{{$product->id}}" class="btn btn-primary btn-shadow btn-sm">+<i class="czi-cart font-size-base ml-1"></i></a>
                                </div>
                              </div>
                            </div>
                            <!-- Product -->
                          @endforeach
                      </div>
                    </div>
                  @endif
                @endforeach
              </section>

              <!-- For Your Baby -->
              <section class="pt-0">
                <!-- Heading-->
                <div class="d-flex flex-wrap justify-content-between align-items-center pt-1 border-bottom pb-2 mb-0">
                  <h2 class="h3 mb-0 pt-3 mr-3"> @lang('header.for_your_baby') </h2>
                  <div class="pt-3"><a class="btn btn-outline-primary btn-sm" href="/categories/5" target="_blank"> @lang('header.seemore') <i class="czi-arrow-right ml-1 mr-n1"></i></a></div>
                </div>
                @foreach ($categories as $category)
                  @if ($category->id == 5)
                    <div class="cz-carousel cz-controls-static cz-controls-outside cz-dots-enabled pt-2">
                      <div class="cz-carousel-inner" data-carousel-options="{&quot;items&quot;: 2, &quot;gutter&quot;: 16, &quot;nav&quot;: false, &quot;controls&quot;: true, &quot;autoplay&quot;: true, &quot;autoHeight&quot;: true, &quot;responsive&quot;: {&quot;0&quot;:{&quot;items&quot;:2}, &quot;480&quot;:{&quot;items&quot;:2}, &quot;720&quot;:{&quot;items&quot;:3}, &quot;991&quot;:{&quot;items&quot;:2}, &quot;1140&quot;:{&quot;items&quot;:3}, &quot;1300&quot;:{&quot;items&quot;:4}, &quot;1500&quot;:{&quot;items&quot;:5}}}">
                          @foreach ($category->products as $product)
                            <!-- Product-->
                            <div class="col-lg-3 col-6 px-2 px-sm-2 mb-sm-4 mb-3">
                              <div class="card product-card card-static pb-3">
                                @if($product->new_price != NULL)
                                  <span class="badge badge-primary badge-shadow"> - {{ $product->percentage }}% </span>
                                @endif
                                <a class="card-img-top d-block overflow-hidden" href="/products/{{$product->id}}"><img src="/uploads/products/{{$product->imagefile1}}" alt="{{$product->name}}"></a>
                                <div class="card-body py-2">
                                  @if($product->status != NULL)
                                    <a href="/products/{{$product->id}}" class="product-meta d-block font-size-xs pb-1">
                                      <i class="fa fa-tag"></i> {{$product->status}} 
                                    </a>
                                  @endif
                                  <h3 class="product-title font-size-sm text-truncate"><a href="/products/{{$product->id}}"> {{$product->name}} </a></h3>
                                  @if($product->new_price != NULL)
                                        <div class="product-price"><span class="text-accent"><strong> <small>UGX</small> {{$product->new_price}} </strong></span>
                                          <del class="font-size-sm text-muted"><small>UGX</small> {{$product->orig_price}}</del>
                                        </div>
                                      @else
                                        <div class="product-price"><span class="text-accent"><strong> <small>UGX</small> {{$product->orig_price}} </span> </strong></div>
                                  @endif
                                </div>
                                <div class="product-floating-btn">
                                  <a href="/products/{{$product->id}}" class="btn btn-primary btn-shadow btn-sm">+<i class="czi-cart font-size-base ml-1"></i></a>
                                </div>
                              </div>
                            </div>
                            <!-- Product -->
                          @endforeach
                      </div>
                    </div>
                  @endif
                @endforeach
              </section> 

              <!-- Electronics Banner-->
              <section class="container mt-4 mb-grid-gutter">
                <div class="bg-faded-info rounded-lg py-4">
                  <div class="row align-items-center">
                    <div class="col-md-4">
                      <div class="px-4 pr-sm-0 pl-sm-5">
                        <span class="badge badge-danger"> @lang('header.new') </span>
                        <h2 class="mb-1"> @lang('header.top_gadgets') </h2>
                        <p class="h5 text-primary font-weight-light"> @lang('header.gadget_boss') </p>
                        <a class="btn btn-accent" href="/categories/2" target="_blank"> @lang('header.seemore') <i class="fa fa-long-arrow-right"></i></a>
                      </div>
                    </div>
                    <div class="col-md-7"><img src="{{('images/welcome/offer.png')}}" alt=""></div>
                  </div>
                </div>
              </section>
              
              <!-- Sweet Soft Sleep -->
              <section class="pt-0">
                <!-- Heading-->
                <div class="d-flex flex-wrap justify-content-between align-items-center pt-1 border-bottom pb-2 mb-0">
                  <h2 class="h3 mb-0 pt-3 mr-3"> @lang('header.sweet_soft_sleep') </h2>
                  <div class="pt-3"><a class="btn btn-outline-primary btn-sm" href="/tags/29" target="_blank"> @lang('header.seemore') <i class="czi-arrow-right ml-1 mr-n1"></i></a></div>
                </div>
                @foreach ($tags as $tag)
                  @if ($tag->id == 29)
                    <div class="cz-carousel cz-controls-static cz-controls-outside cz-dots-enabled pt-2">
                      <div class="cz-carousel-inner" data-carousel-options="{&quot;items&quot;: 2, &quot;gutter&quot;: 16, &quot;nav&quot;: false, &quot;autoplay&quot;: true, &quot;controls&quot;: true, &quot;autoHeight&quot;: true, &quot;responsive&quot;: {&quot;0&quot;:{&quot;items&quot;:2}, &quot;480&quot;:{&quot;items&quot;:2}, &quot;720&quot;:{&quot;items&quot;:3}, &quot;991&quot;:{&quot;items&quot;:2}, &quot;1140&quot;:{&quot;items&quot;:3}, &quot;1300&quot;:{&quot;items&quot;:4}, &quot;1500&quot;:{&quot;items&quot;:5}}}">
                          @foreach ($tag->products as $product)
                            <!-- Product-->
                            <div class="col-lg-3 col-6 px-2 px-sm-2 mb-sm-4 mb-3">
                              <div class="card product-card card-static pb-3">
                                @if($product->new_price != NULL)
                                  <span class="badge badge-primary badge-shadow"> - {{ $product->percentage }}% </span>
                                @endif
                                <a class="card-img-top d-block overflow-hidden" href="/products/{{$product->id}}"><img src="/uploads/products/{{$product->imagefile1}}" alt="{{$product->name}}"></a>
                                <div class="card-body py-2">
                                  @if($product->status != NULL)
                                    <a href="/products/{{$product->id}}" class="product-meta d-block font-size-xs pb-1">
                                      <i class="fa fa-tag"></i> {{$product->status}} 
                                    </a>
                                  @endif
                                  <h3 class="product-title font-size-sm text-truncate"><a href="/products/{{$product->id}}"> {{$product->name}} </a></h3>
                                  @if($product->new_price != NULL)
                                        <div class="product-price"><span class="text-accent"><strong> <small>UGX</small> {{$product->new_price}} </strong></span>
                                          <del class="font-size-sm text-muted"><small>UGX</small> {{$product->orig_price}}</del>
                                        </div>
                                      @else
                                        <div class="product-price"><span class="text-accent"><strong> <small>UGX</small> {{$product->orig_price}} </span> </strong></div>
                                  @endif
                                </div>
                                <div class="product-floating-btn">
                                  <a href="/products/{{$product->id}}" class="btn btn-primary btn-shadow btn-sm">+<i class="czi-cart font-size-base ml-1"></i></a>
                                </div>
                              </div>
                            </div>
                            <!-- Product -->
                          @endforeach
                      </div>
                    </div>
                  @endif
                @endforeach
              </section>

              <!-- Cook & Connect -->
              <section class="pt-0">
                <!-- Heading-->
                <div class="d-flex flex-wrap justify-content-between align-items-center pt-1 border-bottom pb-2 mb-0">
                  <h2 class="h3 mb-0 pt-3 mr-3"> @lang('header.cook_connect') </h2>
                  <div class="pt-3"><a class="btn btn-outline-primary btn-sm" href="/tags/22" target="_blank"> @lang('header.seemore') <i class="czi-arrow-right ml-1 mr-n1"></i></a></div>
                </div>
                @foreach ($tags as $tag)
                  @if ($tag->id == 22)
                    <div class="cz-carousel cz-controls-static cz-controls-outside cz-dots-enabled pt-2">
                      <div class="cz-carousel-inner" data-carousel-options="{&quot;items&quot;: 2, &quot;gutter&quot;: 16, &quot;nav&quot;: false, &quot;autoplay&quot;: true, &quot;controls&quot;: true, &quot;autoHeight&quot;: true, &quot;responsive&quot;: {&quot;0&quot;:{&quot;items&quot;:2}, &quot;480&quot;:{&quot;items&quot;:2}, &quot;720&quot;:{&quot;items&quot;:3}, &quot;991&quot;:{&quot;items&quot;:2}, &quot;1140&quot;:{&quot;items&quot;:3}, &quot;1300&quot;:{&quot;items&quot;:4}, &quot;1500&quot;:{&quot;items&quot;:5}}}">
                          @foreach ($category->products as $product)
                            <!-- Product-->
                            <div class="col-lg-3 col-6 px-2 px-sm-2 mb-sm-4 mb-3">
                              <div class="card product-card card-static pb-3">
                                @if($product->new_price != NULL)
                                  <span class="badge badge-primary badge-shadow"> - {{ $product->percentage }}% </span>
                                @endif
                                <a class="card-img-top d-block overflow-hidden" href="/products/{{$product->id}}"><img src="/uploads/products/{{$product->imagefile1}}" alt="{{$product->name}}"></a>
                                <div class="card-body py-2">
                                  @if($product->status != NULL)
                                    <a href="/products/{{$product->id}}" class="product-meta d-block font-size-xs pb-1">
                                      <i class="fa fa-tag"></i> {{$product->status}} 
                                    </a>
                                  @endif
                                  <h3 class="product-title font-size-sm text-truncate"><a href="/products/{{$product->id}}"> {{$product->name}} </a></h3>
                                  @if($product->new_price != NULL)
                                        <div class="product-price"><span class="text-accent"><strong> <small>UGX</small> {{$product->new_price}} </strong></span>
                                          <del class="font-size-sm text-muted"><small>UGX</small> {{$product->orig_price}}</del>
                                        </div>
                                      @else
                                        <div class="product-price"><span class="text-accent"><strong> <small>UGX</small> {{$product->orig_price}} </span> </strong></div>
                                  @endif
                                </div>
                                <div class="product-floating-btn">
                                  <a href="/products/{{$product->id}}" class="btn btn-primary btn-shadow btn-sm">+<i class="czi-cart font-size-base ml-1"></i></a>
                                </div>
                              </div>
                            </div>
                            <!-- Product -->
                          @endforeach
                      </div>
                    </div>
                  @endif
                @endforeach
              </section>

              <div class="pb-4"></div>
            </div>
          </section>


          <!-- Footer-->
          @include('layouts.footer')

        </main>
      <!-- Main -->
    
@endsection


      
