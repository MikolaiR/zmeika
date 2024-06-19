@extends('app.app')

@section('content')
    <!--== Start Page Content Wrapper ==-->
    <div class="page-content-wrapper sp-y">
        <div class="product-details-page-content">
            <div class="container container-wide">
                <div class="row">
                    <div class="col-12">
                        <div class="row">
                            <!-- Start Product Thumbnail Area -->
                            <div class="col-md-5">
                                <div class="product-thumb-area">
                                    <div class="product-details-thumbnail">
                                        <div class="product-thumbnail-slider" id="thumb-gallery">
                                            @foreach($product->contents as $content )
                                                <figure class="pro-thumb-item" data-mfp-src="{{ Storage::url($content->url)  }}">
                                                    <img class="mh-px-500" src="{{ Storage::url($content->url)  }}" alt="{{ $product->name }}" />
                                                </figure>
                                            @endforeach
                                        </div>

                                        <a href="#thumb-gallery" class="btn-large-view btn-gallery-popup">УВЕЛИЧИТЬ <i class="fa fa-search-plus"></i></a>
                                    </div>

                                    <div class="product-details-thumbnail-nav">
                                        @foreach($product->contents as $content)
                                            <figure class="pro-thumb-item">
                                                <img src="{{ Storage::url($content->url_preview)  }}" alt="{{ $product->name }}" />
                                            </figure>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <!-- End Product Thumbnail Area -->

                            <!-- Start Product Info Area -->
                            <div class="col-md-7">
                                <div class="product-details-info-content-wrap">
                                    <div class="prod-details-info-content">
                                        <h2>{{ $product->name }}</h2>
                                        <h5 class="price"><strong>Цена:</strong> <span class="price-amount">{{ $product->price }} бел.р.</span>
                                        </h5>
                                        <p>{!! \Illuminate\Support\Str::limit($product->description, 1000, '...') !!} </p>
                                        <div class="product-action">
                                            <div class="action-top d-sm-flex">
                                                <button class="btn btn-bordered" data-toggle="modal" data-target="#purchaseModal" data-product-id="{{ $product->id }}">Приобрести</button>
                                                @include('elements.result-sending')
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Product Info Area -->
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="product-description-review">
                                    <!-- Product Description Tab Menu -->
                                    <ul class="nav nav-tabs desc-review-tab-menu" id="desc-review-tab" role="tablist">
                                        <li>
                                            <a class="active" id="desc-tab" data-toggle="tab" href="#descriptionContent" role="tab">Description</a>
                                        </li>
                                    </ul>

                                    <!-- Product Description Tab Content -->
                                    <div class="tab-content" id="myTabContent">
                                        <div class="tab-pane fade show active" id="descriptionContent">
                                            <div class="description-content">
                                               {!! $product->description !!}
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
    <!--== End Page Content Wrapper ==-->
    @include('elements.message-form')
@endsection
