@extends('app.app')
@section('content')
    <section data-bs-version="5.1" class="features024 cid-ubG69XTSqA" id="features024-4" style="padding-top: 120px; padding-bottom: 50px">
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
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Купить сейчас</button>
                                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form>
                                                            <div class="mb-3">
                                                                <label for="recipient-name" class="col-form-label">Recipient:</label>
                                                                <input type="text" class="form-control" id="recipient-name">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="message-text" class="col-form-label">Message:</label>
                                                                <textarea class="form-control" id="message-text"></textarea>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                        <button type="button" class="btn btn-primary">Send message</button>
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
