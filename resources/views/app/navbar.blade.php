<header class="header-area">
    <div class="container container-wide">
        <div class="d-flex flex-row align-items-center">
            <div class="col-sm-4 col-lg-2">
                <div class="site-logo text-center text-sm-left">
                    <a href="/">
                        <img class="lg:h-10" src="{{ url('') }}/images/logo.png" alt="Logo" />
                    </a>
                </div>
            </div>
            <div class="col-lg-7 d-none d-lg-block">
                <div class="site-navigation">
                    <ul class="main-menu nav">
                        <li>
                            <a href="{{ route('home') }}">Главная</a>
                        </li>
                        <li>
                            <a href="{{ route('catalog.index') }}">Каталог</a>
                        </li>
                        <li>
                            <a href="{{ route('contacts') }}">Контакты</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-8 col-lg-3">
                <div class="site-action d-flex justify-content-center justify-content-sm-end align-items-center">
                    <div class="responsive-menu d-lg-none">
                        <button class="btn-menu">
                            <i class="fa fa-bars"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
