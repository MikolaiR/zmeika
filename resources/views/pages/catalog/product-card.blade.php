<!-- Start Product Item -->
<div class="col-sm-6 col-lg-4 vh-20 p-4">
    <div class="product-item h-100 p-4">
        <div class="product-item__thumb h-75">
            <a class="h-75" href="{{ route('catalog.detail', ['slug' => $product->slug]) }} ">
                @php
                    $previewImage = $product->getFirstPreviewImage();
                    $linkImage = $previewImage ? $previewImage->url_preview :
                   (isset($product->contents[0]->url) ? $product->contents[0]->url :
                    'public/images/contents/no-image.webp');
                @endphp
                <img class="thumb-primary h-75" src="{{ Storage::url($linkImage) }}" alt="{{ $product->name }}"/>
                <img class="thumb-secondary" src="{{ Storage::url($linkImage) }}" alt="{{ $product->name }}" />
            </a>
            <div class="ratting">
                <span><i class="ion-android-star"></i></span>
                <span><i class="ion-android-star"></i></span>
                <span><i class="ion-android-star"></i></span>
                <span><i class="ion-android-star"></i></span>
                <span><i class="ion-android-star"></i></span>
            </div>
        </div>

        <div class="product-item__content text-center">
            <div class="product-item__info">
                <h4 class="title">
                    <a href="{{ route('catalog.detail', ['slug' => $product->slug]) }}">{{ $product->name }}</a>
                </h4>
                <span class="price"> <strong>Цена:</strong> {{ $product->price }} бел.р.</span>
            </div>

            <div class="product-item__desc">
                <p>{!! $product->description !!}</p>
            </div>
        </div>
    </div>
</div>
<!-- End Product Item -->
