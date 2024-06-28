@extends('app.app')

@section('content')
    <!--== Start Banner Area Wrapper ==-->
    <div class="banner-area-wrapper banner-mt">
        <div class="container container-wide">
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div class="banner-item">
                        <div class="banner-item__img">
                            <a href="#">
                                <img src="{{ url('/assets/img/banner/delivery_1.webp') }}" alt="Banner"/>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="banner-item">
                        <div class="banner-item__img">
                            <a href="#"><img src="{{ url('/assets/img/banner/delivery_2.webp') }}" alt="Banner"/></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="banner-item">
                        <div class="banner-item__img">
                            <a href="#"><img src="{{ url('/assets/img/banner/delivery_3.webp') }}" alt="Banner"/></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--== End Banner Area Wrapper ==-->

    <!--== Start Call to Action Area ==-->
    <div class="call-to-action-area sm-top">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-lg-4">
                    <div class="call-to-action-item mt-0">
                        <div class="call-to-action-item__icon">
                            <img src="{{ asset('assets/img/icons/icon-1.png') }}" alt="fast delivery">
                        </div>
                        <div class="call-to-action-item__info">
                            <h3>Доставка</h3>
                            <p>Мы предлагаем безопасную и надежную доставку для вас и вашей змеи. Каждая змейка
                                транспортируется с максимальной заботой и вниманием, чтобы гарантировать её благополучие
                                и безопасность в пути.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-lg-4">
                    <div class="call-to-action-item">
                        <div class="call-to-action-item__icon">
                            <img src="{{ asset('assets/img/icons/icon-2.png') }}" alt="quality">
                        </div>
                        <div class="call-to-action-item__info">
                            <h3>Гарантия качества</h3>
                            <p>Мы гарантируем, что наши змеи абсолютно здоровы и привиты. Каждая змея проходит
                                тщательный ветеринарный осмотр и адаптируется к контактам с людьми, прежде чем попасть к
                                вам. Покупая у нас, вы можете быть уверены в высоком качестве и отличном состоянии
                                вашего питомца.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-lg-4">
                    <div class="call-to-action-item">
                        <div class="call-to-action-item__icon">
                            <img src="{{ asset('assets/img/icons/icon-3.png') }}" alt="return">
                        </div>
                        <div class="call-to-action-item__info">
                            <h3>Онлайн поддержка</h3>
                            <p>Наша команда всегда готова оказать вам квалифицированную помощь и ответить на все ваши
                                вопросы. Мы предлагаем онлайн поддержку, чтобы вы могли получить необходимые
                                консультации по уходу за вашей змеей в любое время.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--== End Call to Action Area ==-->

    <!--== Start Best Seller Products Area ==-->
    <div class="best-seller-products-area sm-top">
        <div class="container container-wide">
            <div class="row">
                <div class="col-lg-5 m-auto text-center">
                    <div class="section-title">
                        <h2 class="h3">Лучшие товары</h2>
                        <p>Мы предлагаем вам только лучшие товары для ваших змей. В нашем ассортименте вы найдете
                            качественные и проверенные аксессуары, корма и многое другое. Сделайте выбор в пользу
                            надежных и безопасных продуктов для вашего питомца.</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="product-wrapper">
                        <div class="product-carousel">
                            @foreach($products as $product)
                                <!-- Start Product Item -->
                                <div class="product-item" style="height: 25rem">
                                    <div class="product-item__thumb">
                                        <a href="{{ route('catalog.detail', $product->slug) }}">
                                            @php
                                                $previewImage = $product->getFirstPreviewImage();
                                                $linkImage = $previewImage ? $previewImage->url_preview :
                                               (isset($product->contents[0]->url) ? $product->contents[0]->url :
                                                'public/images/contents/no-image.webp');
                                            @endphp
                                            <img class="thumb-primary mh-px-200" src="{{ Storage::url($linkImage) }}" alt="{{ $product->name }}"/>
                                            <img class="thumb-secondary mh-px-200" src="{{
    Storage::url($product->contents[1]->url ?? 'public/images/contents/no-image.webp') }}" alt="{{ $product->name }}" />
                                        </a>
                                    </div>
                                    <div class="product-item__content mt-15">
                                        <h4 class="title"><a
                                                href="{{ route('catalog.detail', $product->slug) }}">{{ $product->name }}</a>
                                        </h4>
                                        <span class="price"><strong>Цена:</strong> {{ $product->price }} бел.р.</span>
                                    </div>
                                </div>
                                <!-- End Product Item -->
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--== End Best Seller Products Area ==-->

    <!--== Start Call to action Wrapper ==-->
    <div class="call-to-action-area">
        <div class="call-to-action-content-area bg-img" data-bg="assets/img/bg/bg-1.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <div class="call-to-action-txt">
                            <h2>ЛУЧШЕЕ ЭКЗОТИЧЕСКОЕ ЖИВОТНОЕ<br>УДИВИ ГОСТЕЙ</h2>
                            <p>Откройте для себя широкий ассортимент экзотических питомцев, которые станут настоящим
                                украшением вашего дома и источником восхищения для ваших гостей.</p>
                            <a href="{{ route('catalog.index') }}" class="btn btn-brand">Купи сейчас</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="call-to-action-image-area">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <img src="{{ asset('assets/img/banner/guest_1.webp') }}" alt="Car"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--== End Call to action Wrapper ==-->

    <!--== Start Newsletter Area ==-->
    <div class="newsletter-area-wrapper">
        <div class="container container-wide">
            <div class="newsletter-area-inner bg-img" data-bg="assets/img/banner/news-mail_1.webp" style="opacity: 0.9;">
                <div class="row">
                    <div class="col-lg-8 col-xl-5 m-auto">
                        <div class="newsletter-content text-center">
                            <h4>ЭКСКЛЮЗИВНЫЕ <span>НОВОСТИ</span> ДЛЯ ПОДПИСЧИКОВ</h4>
                            <h2>ПОЛУЧАЙТЕ ПОСЛЕДНИЕ НОВОСТИ И АКЦИИ</h2>
                            <p>Подпишитесь на нашу рассылку, чтобы первыми узнавать о новых поступлениях, акциях и
                                эксклюзивных предложениях. Присоединяйтесь к нашему сообществу любителей экзотических
                                животных!</p>

                            <div class="newsletter-form-wrap">
                                <form action="#" method="post">
                                    <div class="form-content">
                                        <input type="email" placeholder="Enter your email here"/>
                                        <button class="btn-newsletter">Подписаться</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--== End Newsletter Area ==-->
@endsection
