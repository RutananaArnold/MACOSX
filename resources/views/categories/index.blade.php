@extends('layouts.app')

@section('content')

    <!-- Main -->
      <main class="sidebar-fixed-enabled" style="padding-top: 4rem;">
        <section class="px-lg-3 pt-4">
          <div class="px-3 pt-2">
        
            <!-- Page title + breadcrumb-->
            <nav class="mb-4" aria-label="breadcrumb">
              <ol class="breadcrumb flex-lg-nowrap">
                <li class="breadcrumb-item"><a class="text-nowrap" href="/"><i class="czi-home"></i>Welcome</a></li>
                <li class="breadcrumb-item text-nowrap active" aria-current="page">All Categories</li>
              </ol>
            </nav>
            <!-- Content-->
            <!-- Sorting-->
            <section class="d-md-flex justify-content-between align-items-center mb-4 pb-2">
              <h1 class="h2 mb-3 mb-md-0 mr-3"><strong>All Categories</strong></h1>
              <div class="d-flex align-items-center">
                <div class="d-none d-sm-block py-2 font-size-sm text-muted text-nowrap mr-2">@lang('header.tailored_heart')</div>
              </div>
            </section>

            <!-- Partials -->
            @include('partials.errors')
            @include('partials.success')
        
            
            <!-- Category (Health & Beauty)-->
            <section class="container pt-lg-3 mb-4 mb-sm-5">
              <div class="row">
                <!-- Banner with controls-->
                <div class="col-md-5">
                  <div class="d-flex flex-column h-100 overflow-hidden rounded-lg" style="background-color: #ffffff;">
                    <div class="d-flex justify-content-between px-grid-gutter py-grid-gutter">
                      <div>
                        <h3 class="mb-1">Health & Beauty</h3><a class="font-size-md" href="/categories/1">Shop Now<i class="czi-arrow-right font-size-xs align-middle ml-1"></i></a>
                      </div>
                      <div class="cz-custom-controls" id="health-and-beauty">
                        <button type="button"><i class="czi-arrow-left"></i></button>
                        <button type="button"><i class="czi-arrow-right"></i></button>
                      </div>
                    </div><a class="d-none d-md-block mt-auto" href="/categories/1"><img class="d-block w-100" src="{{ asset('images/cat-index.jpg')}}" alt=""></a>
                  </div>
                </div>
                <!-- Product grid (carousel)-->
                <div class="col-md-7 pt-4 pt-md-0">
                  <div class="cz-carousel">
                    <div class="cz-carousel-inner" data-carousel-options="{&quot;nav&quot;: false, &quot;autoplay&quot;: true, &quot;controlsContainer&quot;: &quot;#health-and-beauty&quot;}">
                      <!-- Carousel item-->
                      <div>
                        <div class="row mx-n2">
                          <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4">
                            <div class="card product-card card-static">
                              <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="czi-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="img\shop\catalog\09.jpg" alt="Product"></a>
                              <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="#">Cosmetics</a>
                                <h3 class="product-title font-size-sm"><a href="shop-single-v1.html">Metallic Lipstick (Crimson)</a></h3>
                                <div class="d-flex justify-content-between">
                                  <div class="product-price"><span class="text-accent">$12.<small>99</small></span></div>
                                  <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star"></i>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4">
                            <div class="card product-card card-static">
                              <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="czi-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="img\shop\catalog\26.jpg" alt="Product"></a>
                              <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="#">Shoes</a>
                                <h3 class="product-title font-size-sm"><a href="shop-single-v1.html">Textile Platform Sneakers</a></h3>
                                <div class="d-flex justify-content-between">
                                  <div class="product-price"><span class="text-accent">$59.<small>99</small></span></div>
                                  <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4">
                            <div class="card product-card card-static"><span class="badge badge-danger badge-shadow">Sale</span>
                              <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="czi-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="img\shop\catalog\27.jpg" alt="Product"></a>
                              <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="#">Accessories</a>
                                <h3 class="product-title font-size-sm"><a href="shop-single-v1.html">Polarized Sunglasses</a></h3>
                                <div class="d-flex justify-content-between">
                                  <div class="product-price"><span class="text-accent">$17.<small>99</small></span>
                                    <del class="font-size-sm text-muted">28.<small>99</small></del>
                                  </div>
                                  <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star"></i><i class="sr-star czi-star"></i>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4">
                            <div class="card product-card card-static">
                              <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="czi-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="img\shop\catalog\28.jpg" alt="Product"></a>
                              <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="#">Shoes</a>
                                <h3 class="product-title font-size-sm"><a href="shop-single-v1.html">Leather Platform Sandals</a></h3>
                                <div class="d-flex justify-content-between">
                                  <div class="product-price"><span class="text-accent">$79.<small>99</small></span></div>
                                  <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4 d-none d-lg-block">
                            <div class="card product-card card-static">
                              <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="czi-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="img\shop\catalog\29.jpg" alt="Product"></a>
                              <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="#">Shorts</a>
                                <h3 class="product-title font-size-sm"><a href="shop-single-v1.html">Short Chino Shorts</a></h3>
                                <div class="d-flex justify-content-between">
                                  <div class="product-price"><span class="text-accent">$24.<small>99</small></span></div>
                                  <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star"></i>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4 d-none d-lg-block">
                            <div class="card product-card card-static">
                              <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="czi-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="img\shop\catalog\30.jpg" alt="Product"></a>
                              <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="#">T-shirts</a>
                                <h3 class="product-title font-size-sm"><a href="shop-single-v1.html">T-shirt with Motif</a></h3>
                                <div class="d-flex justify-content-between">
                                  <div class="product-price"><span class="text-accent">$13.<small>99</small></span></div>
                                  <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star"></i>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- Carousel item-->
                      <div>
                        <div class="row mx-n2">
                          <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4">
                            <div class="card product-card card-static">
                              <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="czi-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="img\shop\catalog\01.jpg" alt="Product"></a>
                              <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="#">Shoes</a>
                                <h3 class="product-title font-size-sm"><a href="shop-single-v1.html">Colorblock Sneakers</a></h3>
                                <div class="d-flex justify-content-between">
                                  <div class="product-price"><span class="text-accent">$154.<small>99</small></span></div>
                                  <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star"></i>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4">
                            <div class="card product-card card-static">
                              <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="czi-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="img\shop\catalog\02.jpg" alt="Product"></a>
                              <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="#">Blouse</a>
                                <h3 class="product-title font-size-sm"><a href="shop-single-v1.html">Cotton Lace Blouse</a></h3>
                                <div class="d-flex justify-content-between">
                                  <div class="product-price"><span class="text-accent">$37.<small>50</small></span></div>
                                  <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star"></i><i class="sr-star czi-star"></i>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4">
                            <div class="card product-card card-static">
                              <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="czi-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="img\shop\catalog\03.jpg" alt="Product"></a>
                              <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="#">Shorts</a>
                                <h3 class="product-title font-size-sm"><a href="shop-single-v1.html">Mom High Waist Shorts</a></h3>
                                <div class="d-flex justify-content-between">
                                  <div class="product-price"><span class="text-accent">$39.<small>50</small></span></div>
                                  <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4">
                            <div class="card product-card card-static">
                              <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="czi-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="img\shop\catalog\04.jpg" alt="Product"></a>
                              <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="#">Sportswear</a>
                                <h3 class="product-title font-size-sm"><a href="shop-single-v1.html">Sports Jacket</a></h3>
                                <div class="d-flex justify-content-between">
                                  <div class="product-price"><span class="text-accent">$68.<small>40</small></span></div>
                                  <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star"></i>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4 d-none d-lg-block">
                            <div class="card product-card card-static">
                              <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="czi-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="img\shop\catalog\31.jpg" alt="Product"></a>
                              <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="#">Shorts</a>
                                <h3 class="product-title font-size-sm"><a href="shop-single-v1.html">Leather Platform Sandals</a></h3>
                                <div class="d-flex justify-content-between">
                                  <div class="product-price"><span class="text-accent">$67.<small>95</small></span></div>
                                  <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star"></i><i class="sr-star czi-star"></i>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4 d-none d-lg-block">
                            <div class="card product-card card-static">
                              <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="czi-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="img\shop\catalog\07.jpg" alt="Product"></a>
                              <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="#">T-shirts</a>
                                <h3 class="product-title font-size-sm"><a href="shop-single-v1.html">Two-Piece Bikini</a></h3>
                                <div class="d-flex justify-content-between">
                                  <div class="product-price"><span class="text-accent">$18.<small>99</small></span></div>
                                  <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star"></i>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
    
            <!-- Category (Electronics)-->
            <section class="container pt-lg-4 mb-4 mb-sm-5">
              <div class="row">
                <!-- Banner with controls-->
                <div class="col-md-5 order-md-2">
                  <div class="d-flex flex-column h-100 overflow-hidden rounded-lg" style="background-color: #ffffff;">
                    <div class="d-flex justify-content-between px-grid-gutter py-grid-gutter">
                      <div class="order-md-2">
                        <h3 class="mb-1">Electronics</h3><a class="font-size-md" href="/categories/2">Shop Now<i class="czi-arrow-right font-size-xs align-middle ml-1"></i></a>
                      </div>
                      <div class="cz-custom-controls order-md-1" id="our-electronics">
                        <button type="button"><i class="czi-arrow-left"></i></button>
                        <button type="button"><i class="czi-arrow-right"></i></button>
                      </div>
                    </div><a class="d-none d-md-block mt-auto" href="/categories/2"><img class="d-block w-100" src="{{ asset('images/cat-index.jpg')}}" alt=""></a>
                  </div>
                </div>
                <!-- Product grid (carousel)-->
                <div class="col-md-7 pt-4 pt-md-0 order-md-1">
                  <div class="cz-carousel">
                    <div class="cz-carousel-inner" data-carousel-options="{&quot;nav&quot;: false, &quot;autoplay&quot;: true, &quot;controlsContainer&quot;: &quot;#our-electronics&quot;}">
                      <!-- Carousel item-->
                      <div>
                        <div class="row mx-n2">
                          <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4">
                            <div class="card product-card card-static">
                              <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="czi-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="img\shop\catalog\32.jpg" alt="Product"></a>
                              <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="#">Hats &amp; Caps</a>
                                <h3 class="product-title font-size-sm"><a href="shop-single-v1.html">Cap with Appliqué</a></h3>
                                <div class="d-flex justify-content-between">
                                  <div class="product-price"><span class="text-accent">$15.<small>99</small></span></div>
                                  <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4">
                            <div class="card product-card card-static">
                              <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="czi-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="img\shop\catalog\33.jpg" alt="Product"></a>
                              <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="#">T-shirts</a>
                                <h3 class="product-title font-size-sm"><a href="shop-single-v1.html">Regular Fit Cotton Shirt</a></h3>
                                <div class="d-flex justify-content-between">
                                  <div class="product-price"><span class="text-accent">$19.<small>99</small></span></div>
                                  <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4">
                            <div class="card product-card card-static">
                              <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="czi-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="img\shop\catalog\34.jpg" alt="Product"></a>
                              <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="#">Accessories</a>
                                <h3 class="product-title font-size-sm"><a href="shop-single-v1.html">Polarized Sunglasses</a></h3>
                                <div class="d-flex justify-content-between">
                                  <div class="product-price"><span class="text-accent">$37.<small>99</small></span></div>
                                  <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star"></i>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4">
                            <div class="card product-card card-static">
                              <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="czi-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="img\shop\catalog\35.jpg" alt="Product"></a>
                              <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="#">Shoes</a>
                                <h3 class="product-title font-size-sm"><a href="shop-single-v1.html">Leather Men’s Sneakers</a></h3>
                                <div class="d-flex justify-content-between">
                                  <div class="product-price"><span class="text-accent">$45.<small>99</small></span></div>
                                  <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star"></i>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4 d-none d-lg-block">
                            <div class="card product-card card-static"><span class="badge badge-info badge-shadow">Popular</span>
                              <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="czi-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="img\shop\catalog\36.jpg" alt="Product"></a>
                              <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="#">Bags</a>
                                <h3 class="product-title font-size-sm"><a href="shop-single-v1.html">Swedish Backpack</a></h3>
                                <div class="d-flex justify-content-between">
                                  <div class="product-price"><span class="text-accent">$68.<small>95</small></span></div>
                                  <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star"></i><i class="sr-star czi-star"></i>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4 d-none d-lg-block">
                            <div class="card product-card card-static">
                              <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="czi-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="img\shop\catalog\37.jpg" alt="Product"></a>
                              <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="#">Accessories</a>
                                <h3 class="product-title font-size-sm"><a href="shop-single-v1.html">Stainless Steel Watches</a></h3>
                                <div class="d-flex justify-content-between">
                                  <div class="product-price"><span class="text-accent">$542.<small>80</small></span></div>
                                  <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star"></i>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- Carousel item-->
                      <div>
                        <div class="row mx-n2">
                          <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4">
                            <div class="card product-card card-static">
                              <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="czi-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="img\shop\catalog\11.jpg" alt="Product"></a>
                              <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="#">Sandals</a>
                                <h3 class="product-title font-size-sm"><a href="shop-single-v1.html">Soft Footbed Sandals</a></h3>
                                <div class="d-flex justify-content-between">
                                  <div class="product-price"><span class="text-accent">$99.<small>50</small></span></div>
                                  <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star"></i>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4">
                            <div class="card product-card card-static">
                              <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="czi-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="img\shop\catalog\38.jpg" alt="Product"></a>
                              <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="#">Shorts</a>
                                <h3 class="product-title font-size-sm"><a href="shop-single-v1.html">Silver Ringe Cargo Short</a></h3>
                                <div class="d-flex justify-content-between">
                                  <div class="product-price"><span class="text-accent">$45.<small>00</small></span></div>
                                  <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4">
                            <div class="card product-card card-static">
                              <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="czi-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="img\shop\catalog\10.jpg" alt="Product"></a>
                              <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="#">Shorts</a>
                                <h3 class="product-title font-size-sm"><a href="shop-single-v1.html">Multicolor Bracelets</a></h3>
                                <div class="d-flex justify-content-between">
                                  <div class="product-price"><span class="text-accent">$7.<small>99</small></span></div>
                                  <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star"></i><i class="sr-star czi-star"></i>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4">
                            <div class="card product-card card-static">
                              <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="czi-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="img\shop\catalog\39.jpg" alt="Product"></a>
                              <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="#">T-shirts</a>
                                <h3 class="product-title font-size-sm"><a href="shop-single-v1.html">3-pack T-shirts Slim Fit</a></h3>
                                <div class="d-flex justify-content-between">
                                  <div class="product-price"><span class="text-accent">$21.<small>70</small></span></div>
                                  <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star"></i>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4 d-none d-lg-block">
                            <div class="card product-card card-static">
                              <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="czi-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="img\shop\catalog\12.jpg" alt="Product"></a>
                              <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="#">Hats &amp; Caps</a>
                                <h3 class="product-title font-size-sm"><a href="shop-single-v1.html">3-Color Sun Stash Hat</a></h3>
                                <div class="d-flex justify-content-between">
                                  <div class="product-price"><span class="text-accent">$25.<small>9</small></span></div>
                                  <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4 d-none d-lg-block">
                            <div class="card product-card card-static">
                              <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="czi-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="img\shop\catalog\06.jpg" alt="Product"></a>
                              <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="#">Bags</a>
                                <h3 class="product-title font-size-sm"><a href="shop-single-v1.html">TH Jeans City Backpack</a></h3>
                                <div class="d-flex justify-content-between">
                                  <div class="product-price"><span class="text-accent">$79.<small>50</small></span></div>
                                  <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star"></i><i class="sr-star czi-star"></i>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>

            <!-- Category (Home & Office)-->
            <section class="container pt-lg-3 mb-4 mb-sm-5">
              <div class="row">
                <!-- Banner with controls-->
                <div class="col-md-5">
                  <div class="d-flex flex-column h-100 overflow-hidden rounded-lg" style="background-color: #ffffff;">
                    <div class="d-flex justify-content-between px-grid-gutter py-grid-gutter">
                      <div>
                        <h3 class="mb-1">Home & Office</h3><a class="font-size-md" href="/categories/3">Shop Now<i class="czi-arrow-right font-size-xs align-middle ml-1"></i></a>
                      </div>
                      <div class="cz-custom-controls" id="home-and-office">
                        <button type="button"><i class="czi-arrow-left"></i></button>
                        <button type="button"><i class="czi-arrow-right"></i></button>
                      </div>
                    </div><a class="d-none d-md-block mt-auto" href="/categories/3"><img class="d-block w-100" src="{{ asset('images/cat-index.jpg')}}" alt=""></a>
                  </div>
                </div>
                <!-- Product grid (carousel)-->
                <div class="col-md-7 pt-4 pt-md-0">
                  <div class="cz-carousel">
                    <div class="cz-carousel-inner" data-carousel-options="{&quot;nav&quot;: false, &quot;autoplay&quot;: true, &quot;controlsContainer&quot;: &quot;#home-and-office&quot;}">
                      <!-- Carousel item-->
                      <div>
                        <div class="row mx-n2">
                          <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4">
                            <div class="card product-card card-static">
                              <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="czi-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="img\shop\catalog\09.jpg" alt="Product"></a>
                              <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="#">Cosmetics</a>
                                <h3 class="product-title font-size-sm"><a href="shop-single-v1.html">Metallic Lipstick (Crimson)</a></h3>
                                <div class="d-flex justify-content-between">
                                  <div class="product-price"><span class="text-accent">$12.<small>99</small></span></div>
                                  <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star"></i>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4">
                            <div class="card product-card card-static">
                              <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="czi-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="img\shop\catalog\26.jpg" alt="Product"></a>
                              <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="#">Shoes</a>
                                <h3 class="product-title font-size-sm"><a href="shop-single-v1.html">Textile Platform Sneakers</a></h3>
                                <div class="d-flex justify-content-between">
                                  <div class="product-price"><span class="text-accent">$59.<small>99</small></span></div>
                                  <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4">
                            <div class="card product-card card-static"><span class="badge badge-danger badge-shadow">Sale</span>
                              <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="czi-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="img\shop\catalog\27.jpg" alt="Product"></a>
                              <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="#">Accessories</a>
                                <h3 class="product-title font-size-sm"><a href="shop-single-v1.html">Polarized Sunglasses</a></h3>
                                <div class="d-flex justify-content-between">
                                  <div class="product-price"><span class="text-accent">$17.<small>99</small></span>
                                    <del class="font-size-sm text-muted">28.<small>99</small></del>
                                  </div>
                                  <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star"></i><i class="sr-star czi-star"></i>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4">
                            <div class="card product-card card-static">
                              <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="czi-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="img\shop\catalog\28.jpg" alt="Product"></a>
                              <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="#">Shoes</a>
                                <h3 class="product-title font-size-sm"><a href="shop-single-v1.html">Leather Platform Sandals</a></h3>
                                <div class="d-flex justify-content-between">
                                  <div class="product-price"><span class="text-accent">$79.<small>99</small></span></div>
                                  <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4 d-none d-lg-block">
                            <div class="card product-card card-static">
                              <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="czi-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="img\shop\catalog\29.jpg" alt="Product"></a>
                              <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="#">Shorts</a>
                                <h3 class="product-title font-size-sm"><a href="shop-single-v1.html">Short Chino Shorts</a></h3>
                                <div class="d-flex justify-content-between">
                                  <div class="product-price"><span class="text-accent">$24.<small>99</small></span></div>
                                  <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star"></i>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4 d-none d-lg-block">
                            <div class="card product-card card-static">
                              <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="czi-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="img\shop\catalog\30.jpg" alt="Product"></a>
                              <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="#">T-shirts</a>
                                <h3 class="product-title font-size-sm"><a href="shop-single-v1.html">T-shirt with Motif</a></h3>
                                <div class="d-flex justify-content-between">
                                  <div class="product-price"><span class="text-accent">$13.<small>99</small></span></div>
                                  <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star"></i>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- Carousel item-->
                      <div>
                        <div class="row mx-n2">
                          <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4">
                            <div class="card product-card card-static">
                              <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="czi-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="img\shop\catalog\01.jpg" alt="Product"></a>
                              <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="#">Shoes</a>
                                <h3 class="product-title font-size-sm"><a href="shop-single-v1.html">Colorblock Sneakers</a></h3>
                                <div class="d-flex justify-content-between">
                                  <div class="product-price"><span class="text-accent">$154.<small>99</small></span></div>
                                  <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star"></i>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4">
                            <div class="card product-card card-static">
                              <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="czi-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="img\shop\catalog\02.jpg" alt="Product"></a>
                              <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="#">Blouse</a>
                                <h3 class="product-title font-size-sm"><a href="shop-single-v1.html">Cotton Lace Blouse</a></h3>
                                <div class="d-flex justify-content-between">
                                  <div class="product-price"><span class="text-accent">$37.<small>50</small></span></div>
                                  <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star"></i><i class="sr-star czi-star"></i>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4">
                            <div class="card product-card card-static">
                              <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="czi-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="img\shop\catalog\03.jpg" alt="Product"></a>
                              <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="#">Shorts</a>
                                <h3 class="product-title font-size-sm"><a href="shop-single-v1.html">Mom High Waist Shorts</a></h3>
                                <div class="d-flex justify-content-between">
                                  <div class="product-price"><span class="text-accent">$39.<small>50</small></span></div>
                                  <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4">
                            <div class="card product-card card-static">
                              <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="czi-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="img\shop\catalog\04.jpg" alt="Product"></a>
                              <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="#">Sportswear</a>
                                <h3 class="product-title font-size-sm"><a href="shop-single-v1.html">Sports Jacket</a></h3>
                                <div class="d-flex justify-content-between">
                                  <div class="product-price"><span class="text-accent">$68.<small>40</small></span></div>
                                  <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star"></i>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4 d-none d-lg-block">
                            <div class="card product-card card-static">
                              <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="czi-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="img\shop\catalog\31.jpg" alt="Product"></a>
                              <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="#">Shorts</a>
                                <h3 class="product-title font-size-sm"><a href="shop-single-v1.html">Leather Platform Sandals</a></h3>
                                <div class="d-flex justify-content-between">
                                  <div class="product-price"><span class="text-accent">$67.<small>95</small></span></div>
                                  <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star"></i><i class="sr-star czi-star"></i>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4 d-none d-lg-block">
                            <div class="card product-card card-static">
                              <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="czi-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="img\shop\catalog\07.jpg" alt="Product"></a>
                              <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="#">T-shirts</a>
                                <h3 class="product-title font-size-sm"><a href="shop-single-v1.html">Two-Piece Bikini</a></h3>
                                <div class="d-flex justify-content-between">
                                  <div class="product-price"><span class="text-accent">$18.<small>99</small></span></div>
                                  <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star"></i>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
    
            <!-- Category (Sports and Outdoors)-->
            <section class="container pt-lg-4 mb-4 mb-sm-5">
              <div class="row">
                <!-- Banner with controls-->
                <div class="col-md-5 order-md-2">
                  <div class="d-flex flex-column h-100 overflow-hidden rounded-lg" style="background-color: #ffffff;">
                    <div class="d-flex justify-content-between px-grid-gutter py-grid-gutter">
                      <div class="order-md-2">
                        <h3 class="mb-1">Sports and Outdoors</h3><a class="font-size-md" href="/categories/4">Shop Now<i class="czi-arrow-right font-size-xs align-middle ml-1"></i></a>
                      </div>
                      <div class="cz-custom-controls order-md-1" id="sports-and-outdoors">
                        <button type="button"><i class="czi-arrow-left"></i></button>
                        <button type="button"><i class="czi-arrow-right"></i></button>
                      </div>
                    </div><a class="d-none d-md-block mt-auto" href="/categories/4"><img class="d-block w-100" src="{{ asset('images/cat-index.jpg')}}" alt=""></a>
                  </div>
                </div>
                <!-- Product grid (carousel)-->
                <div class="col-md-7 pt-4 pt-md-0 order-md-1">
                  <div class="cz-carousel">
                    <div class="cz-carousel-inner" data-carousel-options="{&quot;nav&quot;: false, &quot;autoplay&quot;: true, &quot;controlsContainer&quot;: &quot;#sports-and-outdoors&quot;}">
                      <!-- Carousel item-->
                      <div>
                        <div class="row mx-n2">
                          <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4">
                            <div class="card product-card card-static">
                              <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="czi-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="img\shop\catalog\32.jpg" alt="Product"></a>
                              <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="#">Hats &amp; Caps</a>
                                <h3 class="product-title font-size-sm"><a href="shop-single-v1.html">Cap with Appliqué</a></h3>
                                <div class="d-flex justify-content-between">
                                  <div class="product-price"><span class="text-accent">$15.<small>99</small></span></div>
                                  <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4">
                            <div class="card product-card card-static">
                              <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="czi-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="img\shop\catalog\33.jpg" alt="Product"></a>
                              <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="#">T-shirts</a>
                                <h3 class="product-title font-size-sm"><a href="shop-single-v1.html">Regular Fit Cotton Shirt</a></h3>
                                <div class="d-flex justify-content-between">
                                  <div class="product-price"><span class="text-accent">$19.<small>99</small></span></div>
                                  <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4">
                            <div class="card product-card card-static">
                              <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="czi-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="img\shop\catalog\34.jpg" alt="Product"></a>
                              <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="#">Accessories</a>
                                <h3 class="product-title font-size-sm"><a href="shop-single-v1.html">Polarized Sunglasses</a></h3>
                                <div class="d-flex justify-content-between">
                                  <div class="product-price"><span class="text-accent">$37.<small>99</small></span></div>
                                  <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star"></i>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4">
                            <div class="card product-card card-static">
                              <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="czi-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="img\shop\catalog\35.jpg" alt="Product"></a>
                              <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="#">Shoes</a>
                                <h3 class="product-title font-size-sm"><a href="shop-single-v1.html">Leather Men’s Sneakers</a></h3>
                                <div class="d-flex justify-content-between">
                                  <div class="product-price"><span class="text-accent">$45.<small>99</small></span></div>
                                  <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star"></i>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4 d-none d-lg-block">
                            <div class="card product-card card-static"><span class="badge badge-info badge-shadow">Popular</span>
                              <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="czi-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="img\shop\catalog\36.jpg" alt="Product"></a>
                              <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="#">Bags</a>
                                <h3 class="product-title font-size-sm"><a href="shop-single-v1.html">Swedish Backpack</a></h3>
                                <div class="d-flex justify-content-between">
                                  <div class="product-price"><span class="text-accent">$68.<small>95</small></span></div>
                                  <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star"></i><i class="sr-star czi-star"></i>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4 d-none d-lg-block">
                            <div class="card product-card card-static">
                              <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="czi-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="img\shop\catalog\37.jpg" alt="Product"></a>
                              <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="#">Accessories</a>
                                <h3 class="product-title font-size-sm"><a href="shop-single-v1.html">Stainless Steel Watches</a></h3>
                                <div class="d-flex justify-content-between">
                                  <div class="product-price"><span class="text-accent">$542.<small>80</small></span></div>
                                  <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star"></i>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- Carousel item-->
                      <div>
                        <div class="row mx-n2">
                          <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4">
                            <div class="card product-card card-static">
                              <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="czi-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="img\shop\catalog\11.jpg" alt="Product"></a>
                              <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="#">Sandals</a>
                                <h3 class="product-title font-size-sm"><a href="shop-single-v1.html">Soft Footbed Sandals</a></h3>
                                <div class="d-flex justify-content-between">
                                  <div class="product-price"><span class="text-accent">$99.<small>50</small></span></div>
                                  <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star"></i>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4">
                            <div class="card product-card card-static">
                              <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="czi-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="img\shop\catalog\38.jpg" alt="Product"></a>
                              <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="#">Shorts</a>
                                <h3 class="product-title font-size-sm"><a href="shop-single-v1.html">Silver Ringe Cargo Short</a></h3>
                                <div class="d-flex justify-content-between">
                                  <div class="product-price"><span class="text-accent">$45.<small>00</small></span></div>
                                  <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4">
                            <div class="card product-card card-static">
                              <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="czi-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="img\shop\catalog\10.jpg" alt="Product"></a>
                              <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="#">Shorts</a>
                                <h3 class="product-title font-size-sm"><a href="shop-single-v1.html">Multicolor Bracelets</a></h3>
                                <div class="d-flex justify-content-between">
                                  <div class="product-price"><span class="text-accent">$7.<small>99</small></span></div>
                                  <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star"></i><i class="sr-star czi-star"></i>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4">
                            <div class="card product-card card-static">
                              <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="czi-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="img\shop\catalog\39.jpg" alt="Product"></a>
                              <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="#">T-shirts</a>
                                <h3 class="product-title font-size-sm"><a href="shop-single-v1.html">3-pack T-shirts Slim Fit</a></h3>
                                <div class="d-flex justify-content-between">
                                  <div class="product-price"><span class="text-accent">$21.<small>70</small></span></div>
                                  <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star"></i>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4 d-none d-lg-block">
                            <div class="card product-card card-static">
                              <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="czi-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="img\shop\catalog\12.jpg" alt="Product"></a>
                              <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="#">Hats &amp; Caps</a>
                                <h3 class="product-title font-size-sm"><a href="shop-single-v1.html">3-Color Sun Stash Hat</a></h3>
                                <div class="d-flex justify-content-between">
                                  <div class="product-price"><span class="text-accent">$25.<small>9</small></span></div>
                                  <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4 d-none d-lg-block">
                            <div class="card product-card card-static">
                              <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="czi-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="img\shop\catalog\06.jpg" alt="Product"></a>
                              <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="#">Bags</a>
                                <h3 class="product-title font-size-sm"><a href="shop-single-v1.html">TH Jeans City Backpack</a></h3>
                                <div class="d-flex justify-content-between">
                                  <div class="product-price"><span class="text-accent">$79.<small>50</small></span></div>
                                  <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star"></i><i class="sr-star czi-star"></i>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>

            <!-- Category (Baby Products)-->
            <section class="container pt-lg-3 mb-4 mb-sm-5">
              <div class="row">
                <!-- Banner with controls-->
                <div class="col-md-5">
                  <div class="d-flex flex-column h-100 overflow-hidden rounded-lg" style="background-color: #ffffff;">
                    <div class="d-flex justify-content-between px-grid-gutter py-grid-gutter">
                      <div>
                        <h3 class="mb-1">Baby Products</h3><a class="font-size-md" href="/categories/5">Shop Now<i class="czi-arrow-right font-size-xs align-middle ml-1"></i></a>
                      </div>
                      <div class="cz-custom-controls" id="baby-products">
                        <button type="button"><i class="czi-arrow-left"></i></button>
                        <button type="button"><i class="czi-arrow-right"></i></button>
                      </div>
                    </div><a class="d-none d-md-block mt-auto" href="/categories/5"><img class="d-block w-100" src="{{ asset('images/cat-index.jpg')}}" alt=""></a>
                  </div>
                </div>
                <!-- Product grid (carousel)-->
                <div class="col-md-7 pt-4 pt-md-0">
                  <div class="cz-carousel">
                    <div class="cz-carousel-inner" data-carousel-options="{&quot;nav&quot;: false, &quot;autoplay&quot;: true, &quot;controlsContainer&quot;: &quot;#baby-products&quot;}">
                      <!-- Carousel item-->
                      <div>
                        <div class="row mx-n2">
                          <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4">
                            <div class="card product-card card-static">
                              <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="czi-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="img\shop\catalog\09.jpg" alt="Product"></a>
                              <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="#">Cosmetics</a>
                                <h3 class="product-title font-size-sm"><a href="shop-single-v1.html">Metallic Lipstick (Crimson)</a></h3>
                                <div class="d-flex justify-content-between">
                                  <div class="product-price"><span class="text-accent">$12.<small>99</small></span></div>
                                  <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star"></i>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4">
                            <div class="card product-card card-static">
                              <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="czi-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="img\shop\catalog\26.jpg" alt="Product"></a>
                              <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="#">Shoes</a>
                                <h3 class="product-title font-size-sm"><a href="shop-single-v1.html">Textile Platform Sneakers</a></h3>
                                <div class="d-flex justify-content-between">
                                  <div class="product-price"><span class="text-accent">$59.<small>99</small></span></div>
                                  <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4">
                            <div class="card product-card card-static"><span class="badge badge-danger badge-shadow">Sale</span>
                              <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="czi-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="img\shop\catalog\27.jpg" alt="Product"></a>
                              <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="#">Accessories</a>
                                <h3 class="product-title font-size-sm"><a href="shop-single-v1.html">Polarized Sunglasses</a></h3>
                                <div class="d-flex justify-content-between">
                                  <div class="product-price"><span class="text-accent">$17.<small>99</small></span>
                                    <del class="font-size-sm text-muted">28.<small>99</small></del>
                                  </div>
                                  <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star"></i><i class="sr-star czi-star"></i>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4">
                            <div class="card product-card card-static">
                              <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="czi-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="img\shop\catalog\28.jpg" alt="Product"></a>
                              <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="#">Shoes</a>
                                <h3 class="product-title font-size-sm"><a href="shop-single-v1.html">Leather Platform Sandals</a></h3>
                                <div class="d-flex justify-content-between">
                                  <div class="product-price"><span class="text-accent">$79.<small>99</small></span></div>
                                  <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4 d-none d-lg-block">
                            <div class="card product-card card-static">
                              <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="czi-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="img\shop\catalog\29.jpg" alt="Product"></a>
                              <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="#">Shorts</a>
                                <h3 class="product-title font-size-sm"><a href="shop-single-v1.html">Short Chino Shorts</a></h3>
                                <div class="d-flex justify-content-between">
                                  <div class="product-price"><span class="text-accent">$24.<small>99</small></span></div>
                                  <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star"></i>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4 d-none d-lg-block">
                            <div class="card product-card card-static">
                              <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="czi-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="img\shop\catalog\30.jpg" alt="Product"></a>
                              <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="#">T-shirts</a>
                                <h3 class="product-title font-size-sm"><a href="shop-single-v1.html">T-shirt with Motif</a></h3>
                                <div class="d-flex justify-content-between">
                                  <div class="product-price"><span class="text-accent">$13.<small>99</small></span></div>
                                  <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star"></i>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- Carousel item-->
                      <div>
                        <div class="row mx-n2">
                          <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4">
                            <div class="card product-card card-static">
                              <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="czi-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="img\shop\catalog\01.jpg" alt="Product"></a>
                              <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="#">Shoes</a>
                                <h3 class="product-title font-size-sm"><a href="shop-single-v1.html">Colorblock Sneakers</a></h3>
                                <div class="d-flex justify-content-between">
                                  <div class="product-price"><span class="text-accent">$154.<small>99</small></span></div>
                                  <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star"></i>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4">
                            <div class="card product-card card-static">
                              <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="czi-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="img\shop\catalog\02.jpg" alt="Product"></a>
                              <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="#">Blouse</a>
                                <h3 class="product-title font-size-sm"><a href="shop-single-v1.html">Cotton Lace Blouse</a></h3>
                                <div class="d-flex justify-content-between">
                                  <div class="product-price"><span class="text-accent">$37.<small>50</small></span></div>
                                  <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star"></i><i class="sr-star czi-star"></i>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4">
                            <div class="card product-card card-static">
                              <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="czi-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="img\shop\catalog\03.jpg" alt="Product"></a>
                              <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="#">Shorts</a>
                                <h3 class="product-title font-size-sm"><a href="shop-single-v1.html">Mom High Waist Shorts</a></h3>
                                <div class="d-flex justify-content-between">
                                  <div class="product-price"><span class="text-accent">$39.<small>50</small></span></div>
                                  <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4">
                            <div class="card product-card card-static">
                              <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="czi-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="img\shop\catalog\04.jpg" alt="Product"></a>
                              <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="#">Sportswear</a>
                                <h3 class="product-title font-size-sm"><a href="shop-single-v1.html">Sports Jacket</a></h3>
                                <div class="d-flex justify-content-between">
                                  <div class="product-price"><span class="text-accent">$68.<small>40</small></span></div>
                                  <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star"></i>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4 d-none d-lg-block">
                            <div class="card product-card card-static">
                              <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="czi-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="img\shop\catalog\31.jpg" alt="Product"></a>
                              <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="#">Shorts</a>
                                <h3 class="product-title font-size-sm"><a href="shop-single-v1.html">Leather Platform Sandals</a></h3>
                                <div class="d-flex justify-content-between">
                                  <div class="product-price"><span class="text-accent">$67.<small>95</small></span></div>
                                  <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star"></i><i class="sr-star czi-star"></i>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4 d-none d-lg-block">
                            <div class="card product-card card-static">
                              <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="czi-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="img\shop\catalog\07.jpg" alt="Product"></a>
                              <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="#">T-shirts</a>
                                <h3 class="product-title font-size-sm"><a href="shop-single-v1.html">Two-Piece Bikini</a></h3>
                                <div class="d-flex justify-content-between">
                                  <div class="product-price"><span class="text-accent">$18.<small>99</small></span></div>
                                  <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star"></i>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
    
            <!-- Category (Groceries)-->
            <section class="container pt-lg-4 mb-4 mb-sm-5">
              <div class="row">
                <!-- Banner with controls-->
                <div class="col-md-5 order-md-2">
                  <div class="d-flex flex-column h-100 overflow-hidden rounded-lg" style="background-color: #ffffff;">
                    <div class="d-flex justify-content-between px-grid-gutter py-grid-gutter">
                      <div class="order-md-2">
                        <h3 class="mb-1">Groceries</h3><a class="font-size-md" href="/categories/6">Shop Now<i class="czi-arrow-right font-size-xs align-middle ml-1"></i></a>
                      </div>
                      <div class="cz-custom-controls order-md-1" id="our-groceries">
                        <button type="button"><i class="czi-arrow-left"></i></button>
                        <button type="button"><i class="czi-arrow-right"></i></button>
                      </div>
                    </div><a class="d-none d-md-block mt-auto" href="/categories/6"><img class="d-block w-100" src="{{ asset('images/cat-index.jpg')}}" alt=""></a>
                  </div>
                </div>
                <!-- Product grid (carousel)-->
                <div class="col-md-7 pt-4 pt-md-0 order-md-1">
                  <div class="cz-carousel">
                    <div class="cz-carousel-inner" data-carousel-options="{&quot;nav&quot;: false, &quot;autoplay&quot;: true, &quot;controlsContainer&quot;: &quot;#our-groceries&quot;}">
                      <!-- Carousel item-->
                      <div>
                        <div class="row mx-n2">
                          <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4">
                            <div class="card product-card card-static">
                              <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="czi-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="img\shop\catalog\32.jpg" alt="Product"></a>
                              <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="#">Hats &amp; Caps</a>
                                <h3 class="product-title font-size-sm"><a href="shop-single-v1.html">Cap with Appliqué</a></h3>
                                <div class="d-flex justify-content-between">
                                  <div class="product-price"><span class="text-accent">$15.<small>99</small></span></div>
                                  <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4">
                            <div class="card product-card card-static">
                              <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="czi-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="img\shop\catalog\33.jpg" alt="Product"></a>
                              <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="#">T-shirts</a>
                                <h3 class="product-title font-size-sm"><a href="shop-single-v1.html">Regular Fit Cotton Shirt</a></h3>
                                <div class="d-flex justify-content-between">
                                  <div class="product-price"><span class="text-accent">$19.<small>99</small></span></div>
                                  <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4">
                            <div class="card product-card card-static">
                              <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="czi-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="img\shop\catalog\34.jpg" alt="Product"></a>
                              <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="#">Accessories</a>
                                <h3 class="product-title font-size-sm"><a href="shop-single-v1.html">Polarized Sunglasses</a></h3>
                                <div class="d-flex justify-content-between">
                                  <div class="product-price"><span class="text-accent">$37.<small>99</small></span></div>
                                  <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star"></i>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4">
                            <div class="card product-card card-static">
                              <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="czi-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="img\shop\catalog\35.jpg" alt="Product"></a>
                              <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="#">Shoes</a>
                                <h3 class="product-title font-size-sm"><a href="shop-single-v1.html">Leather Men’s Sneakers</a></h3>
                                <div class="d-flex justify-content-between">
                                  <div class="product-price"><span class="text-accent">$45.<small>99</small></span></div>
                                  <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star"></i>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4 d-none d-lg-block">
                            <div class="card product-card card-static"><span class="badge badge-info badge-shadow">Popular</span>
                              <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="czi-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="img\shop\catalog\36.jpg" alt="Product"></a>
                              <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="#">Bags</a>
                                <h3 class="product-title font-size-sm"><a href="shop-single-v1.html">Swedish Backpack</a></h3>
                                <div class="d-flex justify-content-between">
                                  <div class="product-price"><span class="text-accent">$68.<small>95</small></span></div>
                                  <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star"></i><i class="sr-star czi-star"></i>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4 d-none d-lg-block">
                            <div class="card product-card card-static">
                              <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="czi-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="img\shop\catalog\37.jpg" alt="Product"></a>
                              <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="#">Accessories</a>
                                <h3 class="product-title font-size-sm"><a href="shop-single-v1.html">Stainless Steel Watches</a></h3>
                                <div class="d-flex justify-content-between">
                                  <div class="product-price"><span class="text-accent">$542.<small>80</small></span></div>
                                  <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star"></i>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- Carousel item-->
                      <div>
                        <div class="row mx-n2">
                          <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4">
                            <div class="card product-card card-static">
                              <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="czi-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="img\shop\catalog\11.jpg" alt="Product"></a>
                              <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="#">Sandals</a>
                                <h3 class="product-title font-size-sm"><a href="shop-single-v1.html">Soft Footbed Sandals</a></h3>
                                <div class="d-flex justify-content-between">
                                  <div class="product-price"><span class="text-accent">$99.<small>50</small></span></div>
                                  <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star"></i>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4">
                            <div class="card product-card card-static">
                              <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="czi-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="img\shop\catalog\38.jpg" alt="Product"></a>
                              <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="#">Shorts</a>
                                <h3 class="product-title font-size-sm"><a href="shop-single-v1.html">Silver Ringe Cargo Short</a></h3>
                                <div class="d-flex justify-content-between">
                                  <div class="product-price"><span class="text-accent">$45.<small>00</small></span></div>
                                  <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4">
                            <div class="card product-card card-static">
                              <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="czi-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="img\shop\catalog\10.jpg" alt="Product"></a>
                              <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="#">Shorts</a>
                                <h3 class="product-title font-size-sm"><a href="shop-single-v1.html">Multicolor Bracelets</a></h3>
                                <div class="d-flex justify-content-between">
                                  <div class="product-price"><span class="text-accent">$7.<small>99</small></span></div>
                                  <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star"></i><i class="sr-star czi-star"></i>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4">
                            <div class="card product-card card-static">
                              <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="czi-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="img\shop\catalog\39.jpg" alt="Product"></a>
                              <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="#">T-shirts</a>
                                <h3 class="product-title font-size-sm"><a href="shop-single-v1.html">3-pack T-shirts Slim Fit</a></h3>
                                <div class="d-flex justify-content-between">
                                  <div class="product-price"><span class="text-accent">$21.<small>70</small></span></div>
                                  <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star"></i>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4 d-none d-lg-block">
                            <div class="card product-card card-static">
                              <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="czi-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="img\shop\catalog\12.jpg" alt="Product"></a>
                              <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="#">Hats &amp; Caps</a>
                                <h3 class="product-title font-size-sm"><a href="shop-single-v1.html">3-Color Sun Stash Hat</a></h3>
                                <div class="d-flex justify-content-between">
                                  <div class="product-price"><span class="text-accent">$25.<small>9</small></span></div>
                                  <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4 d-none d-lg-block">
                            <div class="card product-card card-static">
                              <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="czi-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="img\shop\catalog\06.jpg" alt="Product"></a>
                              <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="#">Bags</a>
                                <h3 class="product-title font-size-sm"><a href="shop-single-v1.html">TH Jeans City Backpack</a></h3>
                                <div class="d-flex justify-content-between">
                                  <div class="product-price"><span class="text-accent">$79.<small>50</small></span></div>
                                  <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star"></i><i class="sr-star czi-star"></i>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>

            <!-- Happy Shopping -->
            <section data-parallax="scroll" class="parallax text-primary text-center" style="padding-top:1rem;padding-bottom:1rem;">
              <div class="container">
                  <div class="row">
                  <div class="col-xl-8 col-lg-10 mx-auto mb-3">
                      <h1 class="text-shadow text-primary"> <strong> <i class="fa fa-smile-o text-primary"></i> @lang('header.happyshopping') <i class="fa fa-smile-o text-primary"></i> </strong> </h1>
                  </div>
                  </div>
              </div>
            </section>
    
            
          </div>
        </section>
    
        <!-- Footer-->
        @include('layouts.footer')
    
      </main>
    <!-- Main -->
    
@endsection