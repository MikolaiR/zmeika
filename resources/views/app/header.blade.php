@php
    $segments = \Illuminate\Support\Facades\Request::segments();
    $url = url('/');
@endphp
<!--== Start Page Header Area ==-->
<div class="page-header-wrap bg-img" data-bg="{{ '/assets/img/banner/banner_'.random_int(1,5).'.webp' }}">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <div class="page-header-content">
                    <div class="page-header-content-inner">
                        <h1>{{ seo()->meta()->title() }}</h1>
                        <ul class="breadcrumb">
                            @foreach($segments as $key => $segment)
                                @if(!(count($segments) === 3 && $key === 1) )
                                    @php
                                        $url .= '/' . $segment;
                                    @endphp
                                    <li class="{{ $loop->last ? 'current' : '' }}">
                                        <a href="{{ $url }}">{{ $segment }}</a>
                                    </li>
                                @endif
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--== End Page Header Area ==-->
