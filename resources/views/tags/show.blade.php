@extends('layouts.app')

@section('content')

    <!-- Main -->
      <main class="sidebar-fixed-enabled" style="padding-top: 4rem;">
        <section class="px-lg-3 pt-4">
          <div class="px-3 pt-2">
        
            <!-- Page title + breadcrumb-->
            <nav class="mb-4" aria-label="breadcrumb">
              <ol class="breadcrumb flex-lg-nowrap">
                <li class="breadcrumb-item"><a class="text-nowrap" href="/"><i class="czi-home"></i> @lang('header.welcome') </a></li>
                @if ($tag->id == 1)
                  <li class="breadcrumb-item text-nowrap active" aria-current="page"> @lang('header.staysafe') </li>
                    @else
                    <li class="breadcrumb-item text-nowrap active" aria-current="page"> {{$tag->title}} </li>
                @endif
              </ol>
            </nav>
            <!-- Content-->
            <section class="d-md-flex justify-content-between align-items-center mb-4 pb-2">
              @if ($tag->id == 1)
                <h1 class="h2 mb-3 mb-md-0 mr-3"><strong> @lang('header.staysafe') </strong></h1>
                  @else
                    <h1 class="h2 mb-3 mb-md-0 mr-3"><strong> {{ $tag -> title}} </strong></h1>
              @endif
              <div class="d-flex align-items-center">
                <div class="d-none d-sm-block py-2 font-size-sm text-muted text-nowrap mr-2"> <i class="fa fa-shopping-cart"></i> @lang('header.happyshopping')</div>
              </div>
            </section>

            <!-- Partials -->
            @include('partials.errors')
            @include('partials.success')

            
            @if ( (Auth::check()) && (Auth::user()->role_id != 1) )

                Please add products to this tag by clicking <strong>"Attach Product"</strong> and remove them by clicking <strong>"Detach Product"</strong>.
                <!-- Product grid-->
                <div class="row no-gutters mx-n2">
                  @foreach ($products as $product)
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
                        
                        <div class="container">
                          <div class="row">

                            @if ( App\ProductTag::where('product_id',$product->id)->where('tag_id',$tag->id)->first() )
                            <div class="col-12">
                              <!-- Detach Product -->
                              <form id="add-product" action="{{ route('tags.removeproduct') }}" method="POST">
                                {{ csrf_field() }}
                                <div class="input-group">
                                  <input class="form-control" name="tag_id" id="tag_id" value="{{$tag->id}}" type="hidden">
                                  <input class="form-control" name="product_id" id="product_id" value="{{$product->id}}" type="hidden">
                                  <div class="input-group">
                                    <button class="btn btn-block btn-dark btn-shadow btn-minimal" type="submit">
                                      <i class="fa fa-times"></i> Detach Product
                                    </button>
                                  </div>
                                </div>
                              </form>
                            </div>
                            @else
                            <div class="col-12">
                              <!-- Attach Product -->
                              <form id="add-product" action="{{ route('tags.addproduct') }}" method="POST">
                                {{ csrf_field() }}
                                <div class="input-group">
                                  <input class="form-control" name="tag_id" id="tag_id" value="{{$tag->id}}" type="hidden">
                                  <input class="form-control" name="product_id" id="product_id" value="{{$product->id}}" type="hidden">
                                  <div class="input-group">
                                    <button class="btn btn-block btn-primary btn-shadow btn-maximal" type="submit">
                                      <i class="fa fa-check"></i> Attach Product
                                    </button>
                                  </div>
                                </div>
                              </form>
                            </div>
                            @endif

                          </div>
                        </div>

                      </div>
                    </div>
                    <!-- Product -->
                  @endforeach
                </div>
              
              @else 

                <!-- Product grid-->
                <div class="row no-gutters mx-n2">

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
                <!-- Product grid-->

                <!-- Pagination
                  <div class="pt-4 pb-5 mb-4">
                    <nav class="d-flex justify-content-between pt-2" aria-label="Page navigation">
                      <ul class="pagination">
                        <li class="page-item"><a class="page-link" href="#"><i class="czi-arrow-left mr-2"></i>Prev</a></li>
                      </ul>
                      <ul class="pagination">
                        <li class="page-item d-sm-none"><span class="page-link page-link-static">1 / 5</span></li>
                        <li class="page-item active d-none d-sm-block" aria-current="page"><span class="page-link">1<span class="sr-only">(current)</span></span></li>
                        <li class="page-item d-none d-sm-block"><a class="page-link" href="#">2</a></li>
                        <li class="page-item d-none d-sm-block"><a class="page-link" href="#">3</a></li>
                        <li class="page-item d-none d-sm-block"><a class="page-link" href="#">4</a></li>
                        <li class="page-item d-none d-sm-block"><a class="page-link" href="#">5</a></li>
                      </ul>
                      <ul class="pagination">
                        <li class="page-item"><a class="page-link" href="#" aria-label="Next">Next<i class="czi-arrow-right ml-2"></i></a></li>
                      </ul>
                    </nav>
                  </div>
                -->
                
            @endif

            
          </div>
        </section>
    
        <!-- Footer-->
        @include('layouts.footer')
    
      </main>
    <!-- Main -->
    
@endsection


        @section('jqueryScript')
          <script type="text/javascript">
                      
            $('#addProduct').on('click',function(e){
                e.preventDefault(); //prevent the form from auto submit

                //   $.ajaxSetup({
                //     headers: {
                //         'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                //     }
                //   });

                var formData = {
                    'tag_id' : $('#tag_id').val(),
                    'product_id' : $('#product_id').val(),
                    '_token': $('input[name=_token]').val(),
                }

                var url = 'tags/addproduct';

                $.ajax({
                    type: 'post',
                    url: "{{ URL::route('tags.addproduct') }}",
                    data : formData,
                    dataType : 'json',
                    success : function(data){

                    },
                    error: function(data){
                        //do something with data
                        console.log("error sending ajax request" + data);
                    }
                });

            });

          </script>
        @endsection


        <!-- JavaScript files-->
        @include('layouts.scripts')

    </body>

</html>