<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('layouts.head')
        <title>BEISIE | Enjoy top notch shopping experiences</title>
    </head>
      
    <body class="bg-secondary">

        <!-- Navbar-->
        @include('layouts.navbar')

        <!-- Sidebar Menu-->
        <aside class="cz-sidebar cz-sidebar-fixed" id="sideNav" style="padding-top: 5rem;">
            <button class="close" type="button" data-dismiss="sidebar" aria-label="Close"><span class="d-inline-block font-size-xs font-weight-normal align-middle">Close List</span><span class="d-inline-block align-middle ml-2" aria-hidden="true">&times;</span></button>
            <div class="cz-sidebar-inner">
            <div class="cz-sidebar-body pt-3 pb-0" data-simplebar="">
                <!-- Categories-->
                <div class="sidebar-nav fade show active" id="categories">
                    <div class="widget widget-categories">
                    <div class="accordion" id="shop-categories">
                        <!-- All Categories -->
                        <div class="card border-bottom">
                            <div class="card-header">
                                <h3 class="accordion-heading font-size-base px-grid-gutter">
                                <a class="collapsed py-3" href="/categories" target="_blank">
                                    <span class="d-flex align-items-center">
                                    <i class="czi-discount font-size-lg mt-n1 mr-2"></i>
                                        @lang('header.categories')
                                    </span>
                                </a>
                                </h3>
                            </div>
                        </div>
                        <!-- Health & Beauty -->
                        <div class="card border-bottom">
                            <div class="card-header">
                                <h3 class="accordion-heading font-size-base px-grid-gutter">
                                <a class="collapsed py-3" href="#hb" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="hb">
                                    <span class="d-flex align-items-center">
                                    <i class="czi-apple font-size-lg opacity-60 mt-n1 mr-2"></i>
                                        @lang('header.health_beauty')
                                    </span>
                                    <span class="accordion-indicator"></span>
                                </a>
                                </h3>
                            </div>
                            <div class="collapse" id="hb" data-parent="#shop-categories">
                                <div class="card-body px-grid-gutter pb-4">
                                <div class="widget widget-links">
                                    <ul class="widget-list">
                                    <li class="widget-list-item"><a class="widget-list-link" href="/categories/1" target="_blank"> <strong> @lang('header.view_all') </strong> </a></li>
                                    <li class="widget-list-item"><a class="widget-list-link" href="/tags/3" target="_blank"> @lang('header.fitness') </a></li>
                                    <li class="widget-list-item"><a class="widget-list-link" href="/tags/4" target="_blank"> @lang('header.oralcare') </a></li>
                                    <li class="widget-list-item"><a class="widget-list-link" href="/tags/5" target="_blank"> @lang('header.haircare') </a></li>
                                    <li class="widget-list-item"><a class="widget-list-link" href="/tags/6" target="_blank"> @lang('header.fragrances') </a></li>
                                    <li class="widget-list-item"><a class="widget-list-link" href="/tags/7" target="_blank"> @lang('header.makeup') </a></li>
                                    <li class="widget-list-item"><a class="widget-list-link" href="/tags/8" target="_blank"> @lang('header.bathing') </a></li>
                                    </ul> 
                                </div>
                                </div>
                            </div>
                        </div>
                        <!-- Electronics -->
                        <div class="card border-bottom">
                            <div class="card-header">
                                <h3 class="accordion-heading font-size-base px-grid-gutter">
                                <a class="collapsed py-3" href="#electronics" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="electronics">
                                    <span class="d-flex align-items-center">
                                    <i class="czi-speaker font-size-lg opacity-60 mt-n1 mr-2"></i>
                                        @lang('header.electronics')
                                    </span>
                                    <span class="accordion-indicator"></span>
                                </a>
                                </h3>
                            </div>
                            <div class="collapse" id="electronics" data-parent="#shop-categories">
                                <div class="card-body px-grid-gutter pb-4">
                                <div class="widget widget-links">
                                    <ul class="widget-list">
                                    <li class="widget-list-item"><a class="widget-list-link" href="/categories/2" target="_blank"> <strong> @lang('header.view_all') </strong> </a></li>
                                    <li class="widget-list-item"><a class="widget-list-link" href="/tags/15" target="_blank"> @lang('header.gaming') </a></li>
                                    <li class="widget-list-item"><a class="widget-list-link" href="/tags/16" target="_blank"> @lang('header.cleaning') </a></li>
                                    <li class="widget-list-item"><a class="widget-list-link" href="/tags/17" target="_blank"> @lang('header.lighting') </a></li>
                                    <li class="widget-list-item"><a class="widget-list-link" href="/tags/18" target="_blank"> @lang('header.speakers') </a></li>
                                    <li class="widget-list-item"><a class="widget-list-link" href="/tags/19" target="_blank"> @lang('header.kitchenware') </a></li>
                                    <li class="widget-list-item"><a class="widget-list-link" href="/tags/20" target="_blank"> @lang('header.video_gadgets') </a></li>
                                    <li class="widget-list-item"><a class="widget-list-link" href="/tags/21" target="_blank"> @lang('header.audio_accessories') </a></li>
                                    <li class="widget-list-item"><a class="widget-list-link" href="/tags/22" target="_blank"> @lang('header.cookware') </a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        </div>
                        <!-- Home & Office -->
                        <div class="card border-bottom">
                            <div class="card-header">
                                <h3 class="accordion-heading font-size-base px-grid-gutter">
                                <a class="collapsed py-3" href="#ho" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="ho">
                                    <span class="d-flex align-items-center">
                                    <i class="czi-server font-size-lg opacity-60 mt-n1 mr-2"></i>
                                    @lang('header.home_office')
                                    </span>
                                    <span class="accordion-indicator"></span>
                                </a>
                                </h3>
                            </div>
                            <div class="collapse" id="ho" data-parent="#shop-categories">
                                <div class="card-body px-grid-gutter pb-4">
                                <div class="widget widget-links">
                                    <ul class="widget-list">
                                    <li class="widget-list-item"><a class="widget-list-link" href="/categories/3" target="_blank"> <strong> @lang('header.view_all') </strong> </a></li>
                                    <li class="widget-list-item"><a class="widget-list-link" href="/tags/27" target="_blank"> @lang('header.gifts') </a></li>
                                    <li class="widget-list-item"><a class="widget-list-link" href="/tags/28" target="_blank"> @lang('header.dining') </a></li>
                                    <li class="widget-list-item"><a class="widget-list-link" href="/tags/29" target="_blank"> @lang('header.beddings') </a></li>
                                    <li class="widget-list-item"><a class="widget-list-link" href="/tags/30" target="_blank"> @lang('header.safety') </a></li>
                                    <li class="widget-list-item"><a class="widget-list-link" href="/tags/31" target="_blank"> @lang('header.bakeware') </a></li>
                                    <li class="widget-list-item"><a class="widget-list-link" href="/tags/15" target="_blank"> @lang('header.gaming') </a></li>
                                    <li class="widget-list-item"><a class="widget-list-link" href="/tags/22" target="_blank"> @lang('header.cookware') </a></li>
                                    <li class="widget-list-item"><a class="widget-list-link" href="/tags/32" target="_blank"> @lang('header.party_supplies') </a></li>
                                    <li class="widget-list-item"><a class="widget-list-link" href="/tags/33" target="_blank"> @lang('header.home_theatre') </a></li>
                                    <li class="widget-list-item"><a class="widget-list-link" href="/tags/34" target="_blank"> @lang('header.smart_devices') </a></li>
                                    <li class="widget-list-item"><a class="widget-list-link" href="/tags/35" target="_blank"> @lang('header.bathing_utilities') </a></li>
                                    <li class="widget-list-item"><a class="widget-list-link" href="/tags/36" target="_blank"> @lang('header.sewing_handtools') </a></li>
                                    <li class="widget-list-item"><a class="widget-list-link" href="/tags/37" target="_blank"> @lang('header.organization') </a></li>
                                    </ul>
                                </div>
                                </div>
                            </div>
                        </div>
                        <!-- Sports & Outdoor -->
                        <div class="card border-bottom">
                            <div class="card-header">
                                <h3 class="accordion-heading font-size-base px-grid-gutter">
                                <a class="collapsed py-3" href="#so" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="so">
                                    <span class="d-flex align-items-center">
                                    <i class="czi-joystick font-size-lg opacity-60 mt-n1 mr-2"></i>
                                        @lang('header.sports_outdoors')
                                    </span>
                                    <span class="accordion-indicator"></span>
                                </a>
                                </h3>
                            </div>
                            <div class="collapse" id="so" data-parent="#shop-categories">
                                <div class="card-body px-grid-gutter pb-4">
                                <div class="widget widget-links">
                                    <ul class="widget-list">
                                    <li class="widget-list-item"><a class="widget-list-link" href="/categories/4" target="_blank"> <strong> @lang('header.view_all') </strong> </a></li>
                                    <li class="widget-list-item"><a class="widget-list-link" href="/tags/3" target="_blank"> @lang('header.fitness') </a></li>
                                    <li class="widget-list-item"><a class="widget-list-link" href="/tags/9" target="_blank"> @lang('header.cycling') </a></li>
                                    <li class="widget-list-item"><a class="widget-list-link" href="/tags/10" target="_blank"> @lang('header.accessories') </a></li>
                                    <li class="widget-list-item"><a class="widget-list-link" href="/tags/11" target="_blank"> @lang('header.e_games') </a></li>
                                    <li class="widget-list-item"><a class="widget-list-link" href="/tags/12" target="_blank"> @lang('header.exercise_games') </a></li>
                                    <li class="widget-list-item"><a class="widget-list-link" href="/tags/13" target="_blank"> @lang('header.swimming_leisure') </a></li>
                                    <!-- <li class="widget-list-item"><a class="widget-list-link" href="/tags/14" target="_blank"> X-box </a></li> -->
                                    </ul>
                                </div>
                                </div>
                            </div>
                        </div>
                        <!-- Baby Products -->
                        <div class="card border-bottom">
                            <div class="card-header">
                                <h3 class="accordion-heading font-size-base px-grid-gutter">
                                <a class="collapsed py-3" href="#babies" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="babies">
                                    <span class="d-flex align-items-center">
                                    <i class="czi-pot font-size-lg opacity-60 mr-2"></i>
                                        @lang('header.baby_prod')
                                    </span>
                                    <span class="accordion-indicator"></span>
                                </a>
                                </h3>
                            </div>
                            <div class="collapse" id="babies" data-parent="#shop-categories">
                                <div class="card-body px-grid-gutter pb-4">
                                <div class="widget widget-links">
                                    <ul class="widget-list">
                                    <li class="widget-list-item"><a class="widget-list-link" href="/categories/5" target="_blank"> <strong> @lang('header.view_all') </strong> </a></li>
                                    <li class="widget-list-item"><a class="widget-list-link" href="/tags/23" target="_blank"> @lang('header.feeding') </a></li>
                                    <li class="widget-list-item"><a class="widget-list-link" href="/tags/24" target="_blank"> @lang('header.diapering') </a></li>
                                    <li class="widget-list-item"><a class="widget-list-link" href="/tags/25" target="_blank"> @lang('header.skincare') </a></li>
                                    <li class="widget-list-item"><a class="widget-list-link" href="/tags/26" target="_blank"> @lang('header.bathware') </a></li>
                                    </ul>
                                </div>
                                </div>
                            </div>
                        </div>
                        <!-- Groceries -->
                        <div class="card border-bottom">
                            <div class="card-header">
                                <h3 class="accordion-heading font-size-base px-grid-gutter">
                                <a class="collapsed py-3" href="#groceries" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="groceries">
                                    <span class="d-flex align-items-center">
                                    <i class="czi-juice font-size-lg opacity-60 mr-2"></i>
                                        @lang('header.groceries')
                                    </span>
                                    <span class="accordion-indicator"></span>
                                </a>
                                </h3>
                            </div>
                            <div class="collapse" id="groceries" data-parent="#shop-categories">
                                <div class="card-body px-grid-gutter pb-4">
                                <div class="widget widget-links">
                                    <ul class="widget-list">
                                    <li class="widget-list-item"><a class="widget-list-link" href="/categories/6"> <strong> @lang('header.view_all') </strong> </a></li>
                                    <li class="widget-list-item"><a class="widget-list-link" href="/tags/38"> @lang('header.foods') </a></li>
                                    <li class="widget-list-item"><a class="widget-list-link" href="/tags/39"> @lang('header.snacks') </a></li>
                                    <li class="widget-list-item"><a class="widget-list-link" href="/tags/40"> @lang('header.kids_toys') </a></li>
                                    <li class="widget-list-item"><a class="widget-list-link" href="/tags/29"> @lang('header.beddings') </a></li>
                                    <li class="widget-list-item"><a class="widget-list-link" href="/tags/26"> @lang('header.bathware') </a></li>
                                    <li class="widget-list-item"><a class="widget-list-link" href="/tags/41"> @lang('header.beverages') </a></li>
                                    <li class="widget-list-item"><a class="widget-list-link" href="/tags/16"> @lang('header.cleaning') </a></li>
                                    <li class="widget-list-item"><a class="widget-list-link" href="/tags/42"> @lang('header.entertainment') </a></li>
                                    </ul>
                                </div>
                                </div>
                            </div>
                        </div>
                        <!-- Stay Safe -->
                        <div class="card border-bottom">
                            <div class="card-header">
                                <h3 class="accordion-heading font-size-base px-grid-gutter">
                                <a class="collapsed py-3" href="/tags/1" target="_blank">
                                    <span class="d-flex align-items-center">
                                    <i class="fa fa-hand-o-right font-size-lg opacity-60 mr-2"></i>
                                        @lang('header.staysafe')
                                    </span>
                                </a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                <!-- Categories-->
            </div>
            <div class="px-grid-gutter pt-5 pb-4 mb-2">
                <div class="d-flex mb-3"><i class="czi-mail h4 mb-0 font-weight-normal text-primary mt-1 mr-1"></i>
                <div class="pl-2">
                    <div class="text-muted font-size-sm"> @lang('header.email') </div>
                    <a class="nav-link-style font-size-md" href="mailto:buy@beisie.com">buy@beisie.com</a>
                </div>
                </div>
                <div class="d-flex mb-3"><i class="czi-support h4 mb-0 font-weight-normal text-primary mt-1 mr-1"></i>
                <div class="pl-2">
                    <div class="text-muted font-size-sm"> @lang('header.contact') </div>
                    <a class="nav-link-style font-size-md" href="tel:+256703195072">0703-195072</a> |
                    <a class="nav-link-style font-size-md" href="tel:+256770784879">0770-784879</a>
                </div>
                </div>
            </div>
            </div>
        </aside>
        <!-- Sidebar Menu-->


            <main class="py-4">
                @yield('content')
            </main>


        <!-- Back To Top Button-->
        <a class="btn-scroll-top" href="#top" data-scroll="">
            <span class="btn-scroll-top-tooltip text-muted font-size-sm mr-2"> </span>
            <i class="btn-scroll-top-icon czi-arrow-up"></i>
        </a>

        <!-- Toast: Added to Cart-->
        <div class="toast-container toast-bottom-center">
            <div class="toast mb-3" id="cart-toast" data-delay="5000" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header bg-primary text-white"><i class="czi-check-circle mr-2"></i>
                    <h6 class="font-size-sm text-white mb-0 mr-auto">Added to cart!</h6>
                    <button class="close text-white ml-2 mb-1" type="button" data-dismiss="toast" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="toast-body">Item successfully added to your cart.</div>
            </div>
        </div>

        <!-- Callback Request -->
        <div class="modal fade" id="callback" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">

                    <div class="modal-header">
                        <div class="media flex-fill">
                            <div class="mr-2">
                                <h1 class="text-primary"> <i class="fa fa-phone"></i> </h1>
                            </div>
                            <div class="media-body align-self-center">
                                <h5 class="modal-title text-primary"> @lang('header.callrequest') </h5>
                                <strong style="font-size:1rem;" class="text-muted"> @lang('header.wecall').</strong>
                            </div>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>

                    <form action="{{ route('callbacks.store') }}" method="post">
                        {{ csrf_field() }}

                        <div class="modal-body">
                        <div class="form-group">
                            <label for="name"><strong> @lang('header.yourname') </label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="@lang('header.yourname')">
                        </div>
                        <div class="form-group mb-0">
                            <label for="phone"><strong> @lang('header.yourphone') * </strong><code class="text-primary"> (@lang('header.include_code')) </code> </label>
                            <input type="text" class="form-control" name="phone" id="phone" placeholder="@lang('header.yourphone') e.g. +256 770-784879" required>
                        </div>
                        </div>

                        <div class="modal-footer">
                        <button type="submit" class="btn btn-block btn-primary align-items-center">
                            <strong> @lang('header.submitrequest') </strong>
                            <i class="fe-user-plus ml-auto"></i>
                        </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
        <!-- Callback Request -->

        <!-- JavaScript files-->
        @include('layouts.scripts')

    </body>

</html>