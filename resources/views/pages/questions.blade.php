@extends('app.app')

@section('content')
    <section data-bs-version="5.1" class="list1 cid-ubp1pqZyJ6" id="faq-1-ubp1pqZyJ6" style="margin-top: 10vh">
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
                            @if(isset($questions))
                                @foreach($questions as $question)
                                    <div class="card">
                                        <div class="card-header" role="tab" id="headingOne">
                                            <a role="button" class="panel-title collapsed" data-toggle="collapse"
                                               data-bs-toggle="collapse" data-core="" href="#collapse1_6"
                                               aria-expanded="false"
                                               aria-controls="collapse1">
                                                <h6 class="panel-title-edit mbr-semibold mbr-fonts-style mb-0 display-5">{{ $question->question }}</h6>
                                                <span class="sign mbr-iconfont mobi-mbri-arrow-down"></span>
                                            </a>
                                        </div>
                                        <div id="collapse1_6" class="panel-collapse noScroll collapse" role="tabpanel"
                                             aria-labelledby="headingOne" data-parent="#accordion"
                                             data-bs-parent="#bootstrap-accordion_6">
                                            <div class="panel-body">
                                                <p class="mbr-fonts-style panel-text display-7">{{ $question->answer }}</p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
