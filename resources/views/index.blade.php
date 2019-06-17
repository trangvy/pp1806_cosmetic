@extends('layouts.master')

@section('content')
    <div class="alert alert-success {{ !session('success') ? 'hidden' : ''  }}">
        {{ session('success') }}
    </div>
    <!--/slider-->
    @include("layouts.elements.slide")
    <div class="row">        
        <div class="col-sm-12">
            <div class="features_items"><!--features_items-->
                <h2 class="title text-center">{{ __('products.features') }}</h2>
                @foreach ($products as $product)
                    <div class="col-sm-2">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                    <div class="productinfo text-center">
                                        <!-- <img src="{{ asset(config('products.image_path') . $product->image) }}" alt="" /> -->
                                        <img src="{{ $product->image }}" alt="" />
                                        <h2>{{ $product->price }}</h2>
                                        <p> {{ $product->name }}</p>
                                        <a href="{{ route('product.addToCart', $product->id) }}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>{{ __('products.add_to_card') }}</a>
                                    </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                
            </div><!--features_items-->
            
            <div class="category-tab"><!--category-tab-->
                <div class="col-sm-12">
                    <ul class="nav nav-tabs">
                            @foreach ($brands as $brand)
                                <li><a href="#{{ $brand->id }}" data-toggle="tab"> {{ $brand->name }} </a></li>
                            @endforeach
                    </ul>
                </div>
                <div class="tab-content">
                    @foreach ($brands as $brand)
                        <div class="tab-pane fade active in" id="{{ $brand->id }}" >
                            @foreach ($brand->products as $product)
                                <div class="col-sm-3">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <img src="{{ $product->image }}" alt="" />
                                                <h2>{{ $product->price }}</h2>
                                                <p>{{ $product->name }}</p>
                                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>{{ __('products.add_to_card') }}</a>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @endforeach
                </div>
            </div><!--/category-tab-->
            
            <div class="recommended_items"><!--recommended_items-->
                <h2 class="title text-center">{{ __('products.recommended') }}</h2>
                
                <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        
                        <div class="item active">   
                            <div class="col-sm-4">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="images/home/recommend1.jpg" alt="" />
                                            <h2>$56</h2>
                                            <p>Easy Polo Black Edition</p>
                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>{{ __('products.add_to_card') }}</a>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="images/home/recommend2.jpg" alt="" />
                                            <h2>$56</h2>
                                            <p>Easy Polo Black Edition</p>
                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>{{ __('products.add_to_card') }}</a>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="images/home/recommend3.jpg" alt="" />
                                            <h2>$56</h2>
                                            <p>Easy Polo Black Edition</p>
                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>{{ __('products.add_to_card') }}</a>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">  
                            <div class="col-sm-4">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="images/home/recommend1.jpg" alt="" />
                                            <h2>$56</h2>
                                            <p>Easy Polo Black Edition</p>
                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>{{ __('products.add_to_card') }}</a>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="images/home/recommend2.jpg" alt="" />
                                            <h2>$56</h2>
                                            <p>Easy Polo Black Edition</p>
                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>{{ __('products.add_to_card') }}</a>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="images/home/recommend3.jpg" alt="" />
                                            <h2>$56</h2>
                                            <p>Easy Polo Black Edition</p>
                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>{{ __('products.add_to_card') }}</a>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                     <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
                        <i class="fa fa-angle-left"></i>
                      </a>
                      <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
                        <i class="fa fa-angle-right"></i>
                      </a>          
                </div>
            </div><!--/recommended_items-->
        </div>
    </div>
@endsection
