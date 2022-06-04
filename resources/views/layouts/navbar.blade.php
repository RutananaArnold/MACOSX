  <header class="bg-light box-shadow-sm fixed-top">
    <div class="navbar navbar-expand-lg navbar-light">
      <div class="container-fluid">
        <a class="d-none d-sm-block mr-3 mr-xl-4" href="/" style="min-width: 7rem;">
          <!-- <img width="142" src="{{ asset('images\_logo.jpg')}}" alt="BEISIE"> -->
          <strong class="text-primary h3"> BEISIE </strong>
        </a>
        <a class="d-sm-none mr-2" href="/" style="min-width: 4.625rem;">
          <!-- <img width="74" src="{{ asset('images\_logo.jpg')}}" alt="BEISIE"> -->
          <strong class="text-primary h3"> BEISIE </strong>
        </a>

        @if ( (Auth::check()) && (Auth::user()->role_id != 1) )
            <!-- Admin Dropdown -->
            <ul class="navbar-nav mega-nav pr-lg-2 mr-lg-2">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle pl-0" href="#admin" data-toggle="dropdown">
                  <i class="fa fa-list align-middle mt-n1"></i> ADMIN
                </a>
                <ul class="dropdown-menu">
                  @if ( (Auth::check()) && (Auth::user()->role_id == 0) )
                    <li class="dropdown">
                      <a class="dropdown-item" href="/a-inbox" target="_blank" rel="noopener">
                        <i class="fa fa-envelope opacity-60 font-size-lg mt-n1 mr-2"></i> My Inbox
                      </a>
                    </li>
                    <li class="dropdown">
                      <a class="dropdown-item" href="/orders" target="_blank" rel="noopener">
                        <i class="fa fa-shopping-cart opacity-60 font-size-lg mt-n1 mr-2"></i> Orders&apos; Section
                      </a>
                    </li>
                  @endif
                  <li class="dropdown">
                    <a class="dropdown-item" href="/products" target="_blank" rel="noopener">
                      <i class="fa fa-eye opacity-60 font-size-lg mt-n1 mr-2"></i> See All Products
                    </a>
                  </li>
                  <li class="dropdown">
                    <a class="dropdown-item" href="/add-product" target="_blank" rel="noopener">
                      <i class="fa fa-edit opacity-60 font-size-lg mt-n1 mr-2"></i> Add New Product
                    </a>
                  </li>
                  <li class="dropdown bg-primary">
                    <a class="dropdown-item" href="https://www.beisie.com/webmail" target="_blank" rel="noopener">
                      <strong class="text-white">Visit Our Webmail <i class="fa fa-long-arrow-right"></i></strong>
                    </a>
                  </li>
                  <!--
                  <li class="dropdown mega-dropdown">
                    <a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown">
                      <i class="czi-laptop opacity-60 font-size-lg mt-n1 mr-2"></i> Most Popular Products
                    </a>
                  </li>
                  -->
                </ul>
              </li>
            </ul>
          
          @else
            <!-- Languages -->
            <ul class="navbar-nav mega-nav pr-lg-2 mr-lg-2">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle pl-0" href="#admin" data-toggle="dropdown">
                  <i class="fa fa-language align-middle mt-n1"></i> @lang('header.language')
                </a>
                <ul class="dropdown-menu">
                  <li class="dropdown">
                    <a class="dropdown-item" href="{{ url('locale/en') }}">
                      English
                    </a>
                  </li>
                  <li class="dropdown">
                    <a class="dropdown-item" href="{{ url('locale/swa') }}">
                      Swahili
                    </a>
                  </li>
                  <li class="dropdown">
                    <a class="dropdown-item" href="{{ url('locale/lug') }}">
                      Luganda
                    </a>
                  </li>
                  <li class="dropdown">
                    <a class="dropdown-item disabled" href="{{ url('locale/kiny') }}">
                      Kinyarwanda
                    </a>
                  </li>
                  <li class="dropdown">
                    <a class="dropdown-item disabled" href="{{ url('locale/nya') }}">
                      Nyankore
                    </a>
                  </li>
                  <li class="dropdown">
                    <a class="dropdown-item disabled" href="{{ url('locale/nyoro') }}">
                      Runyoro
                    </a>
                  </li>
                  <li class="dropdown">
                    <a class="dropdown-item disabled" href="{{ url('locale/tooro') }}">
                      Rutooro
                    </a>
                  </li>
                  <li class="dropdown">
                    <a class="dropdown-item disabled" href="{{ url('locale/gishu') }}">
                      Lugishu
                    </a>
                  </li>
                  <li class="dropdown">
                    <a class="dropdown-item disabled" href="{{ url('locale/nyoro') }}">
                      Runyoro
                    </a>
                  </li>
                  <li class="dropdown">
                    <a class="dropdown-item disabled" href="{{ url('locale/soga') }}">
                      Lusoga
                    </a>
                  </li>
                  <li class="dropdown">
                    <a class="dropdown-item disabled" href="{{ url('locale/teso') }}">
                      Ateso
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
        @endif

        <!-- Search-->
        <div class="input-group-overlay d-none d-lg-block mx-4">
            <form action="{{ route('search') }}" method="GET">
              <div class="input-group-prepend-overlay">
                <span class="input-group-text"><i class="czi-search"></i></span>
              </div>
              <input type="text" name="query" id="query" value="{{ request()->input('query') }}" placeholder="@lang('header.search_query')" class="form-control prepended-form-control appended-form-control">
              <div class="input-group-append-overlay">
                <button class="btn btn-primary"> @lang('header.search') </button>
              </div>
            </form>
        </div>

        <!--
        <form action="{{ route('search') }}" method="GET">
          <input type="text" name="query" id="query" value="{{ request()->input('query') }}" placeholder="@lang('header.search_query')" class="form-control prepended-form-control appended-form-control">
        </form>
        -->
        
        <!-- Toolbar-->
        <div class="navbar-toolbar d-flex flex-shrink-0 align-items-center ml-xl-2"><a class="navbar-toggler" href="#sideNav" data-toggle="sidebar"><span class="navbar-toggler-icon"></span></a>
            <a class="navbar-tool d-flex d-lg-none" href="#searchBox" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="searchBox">
              <span class="navbar-tool-tooltip"> @lang('header.search') </span>
              <div class="navbar-tool-icon-box"><i class="navbar-tool-icon czi-search"></i></div>
            </a>

            @if(Auth::check())
                <a class="navbar-tool ml-1 ml-lg-0 mr-n1 mr-lg-2" href="/home">
                  <div class="navbar-tool-icon-box"><i class="navbar-tool-icon czi-user"></i></div>
                  <div class="navbar-tool-text ml-n3"><small> @lang('header.happyshopping') </small> @lang('header.welcome') </div>
                </a>
              @else
                <a class="navbar-tool ml-1 ml-lg-0 mr-n1 mr-lg-2" href="/login">
                  <div class="navbar-tool-icon-box"><i class="navbar-tool-icon czi-user"></i></div>
                  <div class="navbar-tool-text ml-n3"><small>@lang('header.hello'), Log in</small> @lang('header.myac') </div>
                </a>
            @endif
            <!-- Shopping Cart -->
            @if(\Cart::getTotalQuantity()>0)
              <div class="navbar-tool dropdown ml-3">
                <a class="navbar-tool-icon-box bg-secondary dropdown-toggle" href="/cart">
                  <!-- <span class="navbar-tool-label"> {{ \Cart::getTotalQuantity()}} </span> -->
                  <i class="navbar-tool-icon czi-cart"></i>
                </a>
                <a class="navbar-tool-text" href="/cart"><small>Cart</small> @lang('header.mycart') </a>
                <div class="dropdown-menu dropdown-menu-right" style="width: 20rem;">
                  <div class="widget widget-cart px-3 pt-2 pb-0">
                    <div class="d-flex flex-wrap justify-content-between align-items-center pt-0">
                      <div class="font-size-sm mr-2 py-2"><span class="text-muted"> @lang('header.total'):</span><span class="text-accent font-size-base ml-1"><small>UGX </small> {{ \Cart::getTotal() }} </span></div>
                      <a class="btn btn-primary btn-sm" href="/cart"><i class="czi-card mr-2 font-size-base align-middle"></i> @lang('header.checkout') </a>
                    </div>
                  </div>
                </div>
              </div>

                @else
                <div class="navbar-tool ml-3">
                  <a class="navbar-tool-icon-box bg-secondary dropdown-toggle" href="/cart">
                    <!-- <span class="navbar-tool-label"> {{{ \Cart::getTotalQuantity()}}} </span> -->
                    <i class="navbar-tool-icon czi-cart"></i>
                  </a>
                  <a class="navbar-tool-text" href="/cart"><small>Cart</small> @lang('header.mycart') </a>
                </div>
            @endif
            <!-- Shopping Cart -->
        </div>
      </div>
    </div>
    <!-- Search collapse-->
    <div class="collapse" id="searchBox">
      <div class="card pt-2 pb-4 border-0 rounded-0">
        <div class="container">
			<form action="{{ route('search') }}" method="GET">
				<div class="input-group-overlay">
					<div class="input-group-prepend-overlay">
					<span class="input-group-text"><i class="czi-search"></i></span></div>
					<input type="text" name="query" id="query" value="{{ request()->input('query') }}" placeholder="@lang('header.search_query')" class="form-control prepended-form-control">
				</div>
			</form>
        </div>
      </div>
    </div>
	
  </header>