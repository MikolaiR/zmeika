<!--== Start Footer Area Wrapper ==-->
<footer class="footer-area">
    <div class="footer-widget-area">
        <div class="container container-wide">
            <div class="row">
                <div class="col-lg-3">
                    <div class="widget-item">
                        <div class="about-widget">
                            <a href="{{ route('home') }}"><img src="{{ url('') }}/images/logo.png" alt="Logo" /></a>
                            <p>Zmeika - это не просто магазин, а целый мир змей, где каждый найдет себе идеального питомца.</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3">
                    <div class="widget-item">
                        <h4 class="widget-title">Информация</h4>
                        <div class="widget-body">
                            <ul class="widget-list">
                                <li>
                                    <a href="{{ route('contacts') }}">Контакты</a>
                                </li>
                            </ul>
                            <address>
                                Belarus, Minsk <br>
                                https://zmeika.pro
                            </address>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3">
                    <div class="widget-item">
                        <h4 class="widget-title">Карта сайта></h4>
                        <div class="widget-body">
                            <ul class="widget-list">
                                <li><a href="{{ route('home') }}">Главная</a></li>
                                <li><a href="{{ route('catalog.index') }}">Каталог</a></li>
                                <li><a href="{{ route('news.index') }}">Новости</a></li>
                                <li><a href="{{ route('contacts') }}">Контакты</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3">
                    <div class="widget-item">
                        <h4 class="widget-title">Поддержка</h4>
                        <div class="widget-body">
                            <ul class="widget-list">
                                <li><a href="https://www.facebook.com/profile.php?id=61552662807474&locale=ru_RU"
                                       target="_blank">Facebook</a>
                                </li>
                                <li><a href="https://www.instagram.com/vladimirsnake23/"
                                    target="_blank">Instagram</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--== End Footer Area Wrapper ==-->

<!-- Scroll Top Button -->
<button class="btn-scroll-top"><i class="ion-chevron-up"></i></button>

<!--== Start Responsive Menu Wrapper ==-->
<aside class="off-canvas-wrapper off-canvas-menu">
    <div class="off-canvas-overlay"></div>
    <div class="off-canvas-inner">
        <!-- Start Off Canvas Content -->
        <div class="off-canvas-content">
            <div class="off-canvas-header">
                <div class="logo ">
                    <a href="{{ route('home') }}">
                        <img src="{{ asset('/assets/img/logo.png') }}" alt="Logo">
                    </a>
                </div>
                <div class="close-btn">
                    <button class="btn-close">
                        <i class="ion-android-close"></i>
                    </button>
                </div>
            </div>

            <!-- Content Auto Generate Form Main Menu Here -->
            <div class="res-mobile-menu mobile-menu">

            </div>
        </div>
    </div>
</aside>
<!--== End Responsive Menu Wrapper ==-->
