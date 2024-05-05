@extends('app.app')
@section('content')
    <section data-bs-version="5.1" class="header16 cid-ubp1pqX3ci mbr-fullscreen mbr-parallax-background"
             id="hero-17-ubp1pqX3ci">
        <div class="container-fluid">
            <div class="row">
                <div class="content-wrap col-12 col-md-12">
                    <h1 class="mbr-section-title mbr-fonts-style mbr-white mb-4 display-1" style="text-shadow: 3px 3px 6px rgba(0,0,0,0.5);">
                        <strong>Змеи в Минске</strong>
                    </h1>
                    <p class="mbr-fonts-style mbr-text mbr-white mb-4 display-7" style="font-size: 26px;text-shadow: 3px 3px 6px rgba(0,0,0,0.87);">
                        Захватывающий мир змей прямо у вас дома! Приходите и выбирайте своего нового хищника.
                    </p>
                    <div class="mbr-section-btn">
                        <a class="btn btn-white-outline display-7" href="{{ route('catalog.index')}} " style="text-shadow: 3px 3px 6px rgba(0,0,0,0.87);">Укусить сейчас</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
{{--    <section data-bs-version="5.1" class="image05 cid-ubp1pqYLVI" id="image-7-ubp1pqYLVI">--}}
{{--        <div class="container">--}}
{{--            <div class="row ">--}}
{{--                <div class="col-12 col-lg-8">--}}
{{--                    <div class="image-wrapper mb-4">--}}
{{--                        <img class="w-100" src="{{ asset('/images/main/photo-1585095595274-aeffce35511a.webp') }}"--}}
{{--                             alt="Zmeika.pro">--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-12 col-lg">--}}
{{--                    <p class="mbr-side-description mbr-fonts-style mb-4 align-center display-7">Познакомьтесь с нашими--}}
{{--                        удивительными змеями и выберите своего нового питомца прямо сейчас!</p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
    @include('sections.products-list')
    @include('sections.latest-news')
    <section data-bs-version="5.1" class="list1 cid-ubp1pqZyJ6" id="faq-1-ubp1pqZyJ6">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-12 col-lg-10 m-auto">
                    <div class="content">
                        <div class="row justify-content-center mb-5">
                            <div class="col-12 content-head">
                                <div class="mbr-section-head">
                                    <h4 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2">
                                        <strong>Часто задаваемые вопросы</strong>
                                    </h4>

                                </div>
                            </div>
                        </div>
                        <div id="bootstrap-accordion_6" class="panel-group accordionStyles accordion" role="tablist"
                             aria-multiselectable="true">
                            <div class="card">
                                <div class="card-header" role="tab" id="headingOne">
                                    <a role="button" class="panel-title collapsed" data-toggle="collapse"
                                       data-bs-toggle="collapse" data-core="" href="#collapse1_6" aria-expanded="false"
                                       aria-controls="collapse1">
                                        <h6 class="panel-title-edit mbr-semibold mbr-fonts-style mb-0 display-5">Какие
                                            змеи у вас есть?</h6>
                                        <span class="sign mbr-iconfont mobi-mbri-arrow-down"></span>
                                    </a>
                                </div>
                                <div id="collapse1_6" class="panel-collapse noScroll collapse" role="tabpanel"
                                     aria-labelledby="headingOne" data-parent="#accordion"
                                     data-bs-parent="#bootstrap-accordion_6">
                                    <div class="panel-body">
                                        <p class="mbr-fonts-style panel-text display-7">У нас есть питоны, удавы,
                                            королевские питоны и много других экзотических видов змей!</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" role="tab" id="headingOne">
                                    <a role="button" class="panel-title collapsed" data-toggle="collapse"
                                       data-bs-toggle="collapse" data-core="" href="#collapse2_6" aria-expanded="false"
                                       aria-controls="collapse2">
                                        <h6 class="panel-title-edit mbr-semibold mbr-fonts-style mb-0 display-5">Могу ли
                                            я погладить змею?</h6>
                                        <span class="sign mbr-iconfont mobi-mbri-arrow-down"></span>
                                    </a>
                                </div>
                                <div id="collapse2_6" class="panel-collapse noScroll collapse" role="tabpanel"
                                     aria-labelledby="headingOne" data-parent="#accordion"
                                     data-bs-parent="#bootstrap-accordion_6">
                                    <div class="panel-body">
                                        <p class="mbr-fonts-style panel-text display-7">Конечно! Наши змеи дружелюбны и
                                            обожают внимание. Приходите и заводите новых змеиных друзей!</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" role="tab" id="headingOne">
                                    <a role="button" class="panel-title collapsed" data-toggle="collapse"
                                       data-bs-toggle="collapse" data-core="" href="#collapse3_6" aria-expanded="false"
                                       aria-controls="collapse3">
                                        <h6 class="panel-title-edit mbr-semibold mbr-fonts-style mb-0 display-5">Как
                                            часто нужно кормить змею?</h6>
                                        <span class="sign mbr-iconfont mobi-mbri-arrow-down"></span>
                                    </a>
                                </div>
                                <div id="collapse3_6" class="panel-collapse noScroll collapse" role="tabpanel"
                                     aria-labelledby="headingOne" data-parent="#accordion"
                                     data-bs-parent="#bootstrap-accordion_6">
                                    <div class="panel-body">
                                        <p class="mbr-fonts-style panel-text display-7">Зависит от вида, но обычно
                                            достаточно кормить змею раз в неделю. Наши специалисты подскажут вам все
                                            детали!</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" role="tab" id="headingOne">
                                    <a role="button" class="panel-title collapsed" data-toggle="collapse"
                                       data-bs-toggle="collapse" data-core="" href="#collapse4_6" aria-expanded="false"
                                       aria-controls="collapse4">
                                        <h6 class="panel-title-edit mbr-semibold mbr-fonts-style mb-0 display-5">Могут
                                            ли змеи быть домашними питомцами?</h6>
                                        <span class="sign mbr-iconfont mobi-mbri-arrow-down"></span>
                                    </a>
                                </div>
                                <div id="collapse4_6" class="panel-collapse noScroll collapse" role="tabpanel"
                                     aria-labelledby="headingOne" data-parent="#accordion"
                                     data-bs-parent="#bootstrap-accordion_6">
                                    <div class="panel-body">
                                        <p class="mbr-fonts-style panel-text display-7">Конечно! Змеи - отличные
                                            компаньоны, они тихие, красивые и не требуют много внимания. Приходите
                                            выбирать своего нового друга!</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" role="tab" id="headingOne">
                                    <a role="button" class="panel-title collapsed" data-toggle="collapse"
                                       data-bs-toggle="collapse" data-core="" href="#collapse5_6" aria-expanded="false"
                                       aria-controls="collapse5">
                                        <h6 class="panel-title-edit mbr-semibold mbr-fonts-style mb-0 display-5">Как
                                            ухаживать за змеей?</h6>
                                        <span class="sign mbr-iconfont mobi-mbri-arrow-down"></span>
                                    </a>
                                </div>
                                <div id="collapse5_6" class="panel-collapse noScroll collapse" role="tabpanel"
                                     aria-labelledby="headingOne" data-parent="#accordion"
                                     data-bs-parent="#bootstrap-accordion_6">
                                    <div class="panel-body">
                                        <p class="mbr-fonts-style panel-text display-7">Ухаживать за змеей легко! Они
                                            требуют чистого воды, света и правильной температуры. Наши эксперты помогут
                                            вам сделать все правильно!</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section data-bs-version="5.1" class="article12 cid-ubp1pqYB48" id="about-us-12-ubp1pqYB48">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-10">
                    <h3 class="mbr-section-title mbr-fonts-style mb-4 mt-0 display-2">
                        <strong>О нашем магазине</strong>
                    </h3>
                    <p class="mbr-text mbr-fonts-style display-7">Zmeika.pro - это не просто магазин, это целый мир змей
                        и приключений!</p>
                    <p class="mbr-text mbr-fonts-style display-7">Мы предлагаем широкий выбор экзотических видов змей
                        для всех уровней опыта.</p>
                    <p class="mbr-text mbr-fonts-style display-7">Приходите к нам и погрузитесь в удивительный мир
                        рептилий!</p>
                </div>
            </div>
        </div>
    </section>
    <section data-bs-version="5.1" class="article9 cid-ubp1pqZBnh" id="generic-text-9-ubp1pqZBnh">
        <div class="container">
            <div class="row justify-content-center">
                <div class="card col-md-12 col-lg-10">
                    <div class="card-wrapper">
                        <div class="card-content-text">
                            <h3 class="card-title mbr-fonts-style mbr-white mt-3 mb-4 display-2">
                                <strong>Добро пожаловать в мир змей!</strong>
                            </h3>
                            <div class="row card-box align-left">
                                <div class="item features-without-image col-12">
                                    <div class="item-wrapper">

                                        <p class="mbr-text mbr-fonts-style display-7">Zmeika.pro - это не просто
                                            магазин, это целый мир удивительных и загадочных созданий. Мы предлагаем вам
                                            окунуться в уникальную атмосферу и познакомиться с самыми экзотическими
                                            змеями.</p>
                                    </div>
                                </div>
                                <div class="item features-without-image col-12">
                                    <div class="item-wrapper">

                                        <p class="mbr-text mbr-fonts-style display-7">Наша команда экспертов готова
                                            поделиться знаниями о змеях, помочь в выборе и уходе за вашим новым
                                            питомцем. Приходите к нам и откройте для себя мир змей в новом свете!</p>
                                    </div>
                                </div>
                                <div class="item features-without-image col-12">
                                    <div class="item-wrapper">

                                        <p class="mbr-text mbr-fonts-style display-7">Не упустите шанс стать частью
                                            увлекательного мира змей. Посетите наш магазин и ощутите волшебство змейской
                                            жизни прямо здесь, в Минске!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="image-wrapper d-flex justify-content-center mt-3">
                            <img src="{{ asset('/images/main/photo-1596376376140-b62b9468f081.jpeg') }}"
                                 alt="Mobirise Website Builder">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section data-bs-version="5.1" class="header09 cid-ubp1pqZY4y" id="call-to-action-7-ubp1pqZY4y">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-8">
                    <h1 class="mbr-section-title mbr-fonts-style mb-4 display-1">
                        <strong>Захвати свою змею сегодня!</strong>
                    </h1>
                    <p class="mbr-fonts-style mbr-text mb-4 display-7">Уникальные виды змей ждут тебя. Не упусти
                        шанс!</p>
                    <div class="mbr-section-btn">
                        <a class="btn btn-primary display-7" href="{{ route('catalog.index') }}">Купить змею</a>
                        <a class="btn btn-secondary display-7" href="{{ route('news.index') }}">Узнать больше</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section data-bs-version="5.1" class="social4 cid-ubp1pr1GGh" id="follow-us-1-ubp1pr1GGh">
        <div class="container">
            <div class="media-container-row">
                <div class="col-12">
                    <h3 class="mbr-section-title align-center mb-5 mbr-fonts-style display-2">
                        <strong>Подписывайтесь на нас</strong>
                    </h3>
                    <div class="social-list align-center">
                        <a class="iconfont-wrapper bg-facebook m-2 " target="_blank" href="https://www.facebook.com/profile.php?id=61552662807474&locale=ru_RU">
                            <span class="socicon-facebook socicon"></span>
                        </a>
                        <a class="iconfont-wrapper bg-instagram m-2" href="https://www.instagram.com/vladimirsnake23/" target="_blank">
                            <span class="socicon-instagram socicon"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
