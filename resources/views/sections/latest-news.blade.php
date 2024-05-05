<section data-bs-version="5.1" class="features03 cid-ubp1pqYw5h" id="news-1-ubp1pqYw5h">
    <div class="container-fluid">
        <div class="row justify-content-center mb-5">
            <div class="col-12 content-head">
                <div class="mbr-section-head">
                    <h4 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2">
                        <strong>Удивительные новости</strong>
                    </h4>

                </div>
            </div>
        </div>
        <div class="row">
            @foreach($news as $new)
                <div class="item features-image col-12 col-md-6 col-lg-3 active">
                    <div class="item-wrapper">
                        <div class="item-img mb-3">
                            <img src="{{ Storage::url($new->image) }}" alt="{{ $new->title }}" title="{{ $new->title }}">
                        </div>
                        <div class="item-content align-left">
                            <h5 class="item-title mbr-fonts-style mt-0 mb-2 display-5">
                                <strong>{{ $new->title }}</strong>
                            </h5>
                            <p class="mbr-text mbr-fonts-style mb-3 display-7">{{ $new->updated_at }}</p>
                            <p class="mbr-text mbr-fonts-style mb-3 display-7">{!! Str::limit($new->description, 100, '...') !!}</p>
                            <div class="mbr-section-btn item-footer">
                                <a href="{{ route('news.detail', ['slug' => $new->slug])}}" class="btn item-btn btn-primary display-7">Ура!</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
