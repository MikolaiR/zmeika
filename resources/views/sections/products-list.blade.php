<section data-bs-version="5.1" class="pricing02 cid-ubp1pr0aoi" id="product-list-9-ubp1pr0aoi">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12 content-head">
                <div class="mbr-section-head mb-5">
                    <h4 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2">
                        <a href="{{ route('catalog.index') }}" style="color: black"><strong>Наш ассортимент</strong></a>
                    </h4>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($products as $product)
                <div class="item features-image col-12 col-md-6 col-lg-4">
                    <div class="item-wrapper">
                        <div class="item-img">
                            <img src="{{ Storage::url($product->image) }}" alt="{{ $product->name }}">
                        </div>
                        <div class="item-content">
                            <h5 class="item-title mbr-fonts-style display-5">
                                <strong>{{ $product->name }}</strong>
                            </h5>
                            <h6 class="item-subtitle mbr-fonts-style display-7">${{ $product->price }}</h6>
                            <p class="mbr-text mbr-fonts-style display-7">{!! Str::limit($product->description, 100, '...') !!}</p>
                            <div class="mbr-section-btn item-footer">
                                <a href="{{ route('catalog.detail', ['slug' => $product->slug])}}" class="btn item-btn btn-primary display-7">Подробнее</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
