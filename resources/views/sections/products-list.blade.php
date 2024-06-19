<!--== Start Page Content Wrapper ==-->
<div class="page-content-wrapper sp-y">
    <div class="container container-wide">
        <div class="row">
            <div class="col-lg-9">

                <div class="product-wrapper product-layout layout-grid">
                    <div class="row mtn-30">
                        @foreach($products as $product)
                            @include('pages.catalog.product-card')
                        @endforeach
                    </div>
                </div>

                {{ $products->links('elements.paginate') }}
            </div>

            <div class="col-lg-3">
                <div class="sidebar-area">
                    <div class="sidebar-item">
                        <h4 class="sidebar-title">Категории</h4>
                        <div class="sidebar-body">
                            <ul class="sidebar-list">
                                @foreach($categories as $category)
                                    <li>
                                        <a title="{{ $category->name }}" class="link category-link" href="{{ route('catalog.index', $category->name) }}">
                                            <span class="product-count">({{ $category->product_count }}) </span>{{ $category->name }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--== End Page Content Wrapper ==-->
