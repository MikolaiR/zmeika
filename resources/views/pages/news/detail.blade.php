@extends('app.app')
@section('content')
    <section data-bs-version="5.1" class="image05 cid-ubp1pqYLVI" id="image-7-ubp1pqYLVI" style="margin-top: 50px">
        <div class="container">
{{--            <H1 style="padding-bottom: 20px;text-align: center">{{ $new->title }}</H1>--}}
            <div class="row ">
{{--                <div class="col-12 col-lg-8">--}}
{{--                    <div class="image-wrapper mb-4">--}}
{{--                        <img--}}
{{--                            style="max-width:400px;float: left; margin-right: 10px;"--}}
{{--                            class="w-100" src="{{ Storage::url($new->image) }}" alt="{{ $new->title }}">--}}
{{--                    </div>--}}
{{--                </div>--}}
                <div style="padding-top: 30px">
                    {!! $new->description !!}
                </div>
            </div>
        </div>
    </section>
@endsection
