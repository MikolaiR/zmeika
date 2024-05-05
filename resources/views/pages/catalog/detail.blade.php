@extends('app.app')
@section('content')
    <section data-bs-version="5.1" class="features024 cid-ubG69XTSqA" id="features024-4"
             style="padding-top: 120px; padding-bottom: 50px">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-12">
                    <div class="card-wrapper">
                        <div class="row">
                            <div class="col-12 col-md-12 col-lg-6 image-wrapper">
                                <img class="w-100" src="{{ Storage::url($product->image) }}" alt="{{ $product->name }}">
                            </div>
                            <div class="col-12 col-lg col-md-12">
                                <div class="text-wrapper align-left">
                                    <h5 class="mbr-section-title mbr-fonts-style mb-4 display-2">
                                        <strong>{{ $product->name }}</strong>
                                    </h5>
                                    <p class="price mbr-fonts-style mb-4 display-7">
                                        ${{ $product->price }}
                                    </p>
                                    <p class="mbr-text mbr-fonts-style mb-4 display-7">
                                        {!! $product->description !!}
                                    </p>
                                    <div class="mbr-section-btn mt-3">
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal">
                                            Купить сейчас
                                        </button>
                                        <div class="modal fade" id="exampleModal" tabindex="-1"
                                             aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog " style="margin-left: 5vw;margin-right: 5vw" >
                                                <div class="modal-content " style="width: 80vw">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Отправить заказ</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">Продолжить
                                                        </button>
                                                        @include('sections.message-form')
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        {{--                                        <a class="btn btn-lg btn-primary display-7" href="/">Купить сейчас</a>--}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
