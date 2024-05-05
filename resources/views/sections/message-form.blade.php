<section data-bs-version="5.1" class="form03 cid-ubUb8y0xZ9" id="form03-5"
         style="margin-top: 15vh; margin-bottom: 20vh">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg item-wrapper">
                <div class="mbr-section-head mb-5">
                    <h3 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2">
                        <strong>Свяжитесь с нами</strong>
                    </h3>
                </div>
                <div class="col-lg-12 mx-auto mbr-form" data-form-type="formoid">
                    <form action="/message" method="POST" class="mbr-form form-with-styler"
                          data-form-title="Form Name">
                        @csrf
                        <div class="row">
                            <div hidden="hidden" data-form-alert="" class="alert alert-success col-12">Спасибо, что
                                заполнили форму!
                            </div>
                            <div hidden="hidden" data-form-alert-danger="" class="alert alert-danger col-12">
                                Упс...! Какая-то проблема!
                            </div>
                        </div>
                        <div class="dragArea row">
                            <div class="col-md col-sm-12 form-group mb-3 mb-3" data-for="name">
                                <input type="text" name="name" placeholder="Имя" data-form-field="name"
                                       class="form-control" value="" id="name-form03-5">
                            </div>
                            <div class="col-md col-sm-12 form-group mb-3 mb-3" data-for="email">
                                <input type="email" name="email" placeholder="E-mail" data-form-field="email"
                                       class="form-control" value="" id="email-form03-5">
                            </div>
                            <div class="col-12 form-group mb-3 mb-3" data-for="phone">
                                <input type="tel" name="phone" placeholder="Номер телефона" data-form-field="phone"
                                       class="form-control" value="" id="phone-form03-5">
                            </div>
                            <div class="col-12 form-group mb-3 mb-3" data-for="textarea">
                                <textarea name="textarea" placeholder="Сообщение" data-form-field="textarea"
                                          class="form-control" id="textarea-form03-5"></textarea>
                            </div>
                            @if(isset($product))
                                <input hidden type="text" name="product" class="form-control" value="{{ $product->name.' '. $product->price }}">
                            @endif
                            <div class="col-lg-12 col-md-12 col-sm-12 align-center mbr-section-btn">
                                <button type="submit" class="btn btn-primary display-7">
                                    Отправить сообщение
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="image-wrapper">
                    <img class="w-100" src="{{ asset('images/main/photo-1546992772-3318f1f3a1be.webp') }}"
                         alt="Zmeika.pro">
                </div>
            </div>
        </div>
    </div>
</section>

