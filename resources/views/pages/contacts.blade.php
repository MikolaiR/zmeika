@extends('app.app')

@section('content')
    <!--== Start Page Content Wrapper ==-->
    <div class="page-content-wrapper sm-top">
        <div class="contact-page-content">
            <div class="contact-info-wrapper">
                <div class="container">
                    <div class="row mtn-30">
                        <div class="col-sm-6 col-lg-4">
                            <div class="contact-info-item">
                                <div class="con-info-icon">
                                    <i class="ion-ios-location-outline"></i>
                                </div>
                                <div class="con-info-txt">
                                    <h4>Наше местоположение</h4>
                                    <p>Belarus, Minsk</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4">
                            <div class="contact-info-item">
                                <div class="con-info-icon">
                                    <i class="ion-android-chat"></i>
                                </div>
                                <div class="con-info-txt">
                                    <h4>Свяжитесь с нами в любое время</h4>
                                    <div class="row justify-content-around align-content-center">
                                        <div>
                                            <a href="https://www.facebook.com/profile.php?id=61552662807474&locale=ru_RU" target="_blank" class="btn btn-lg btn-block kpx_btn-facebook" data-toggle="tooltip" data-placement="top" title="Facebook">
                                                <i class="pt-1 fa fa-facebook fa-2x"></i>
                                                <span class="hidden-xs"></span>
                                            </a>
                                        </div>
                                        <div>
                                            <a href="#" class="btn btn-lg btn-block kpx_btn-vk" target="_blank" data-toggle="tooltip" data-placement="top" title="vk">
                                                <i class="fa fa-vk fa-2x"></i>
                                                <span class="hidden-xs"></span>
                                            </a>
                                        </div>
                                        <div>
                                            <a href="https://www.instagram.com/vladimirsnake23/" target="_blank" class="btn btn-lg btn-block kpx_btn-instagram" data-toggle="tooltip" data-placement="top" title="instagram">
                                                <i class="fa fa-instagram fa-2x"></i>
                                                <span class="hidden-xs"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-4">
                            <div class="contact-info-item">
                                <div class="con-info-icon">
                                    <i class="ion-ios-email-outline"></i>
                                </div>
                                <div class="con-info-txt">
                                    <h4>Напишите мне</h4>
                                    <p>Поддержка 24/7
                                        kreminskiy2024@yandex.by
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="contact-map-wrapper sm-top">
                <div id="map_content" class="h-100" data-lat="53.897036" data-lng="27.527818" data-zoom="50"></div>
            </div>
        </div>
    </div>
    <!--== End Page Content Wrapper ==-->
@endsection
