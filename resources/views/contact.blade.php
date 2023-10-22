@extends('layouts.app')

@section('content')

    <div class="promo_contact">
        <div class="container" style="height: 90vh">
            <h1 class="promo_h1" data-aos="fade-right" data-aos-delay="200">Контакты</h1>
        </div>
    </div>
    <div class="container1" data-aos="zoom-in"data-aos-delay="400">
        <div class="container">
            {{--<h2>О нас</h2>--}}
            <div class="container1_promo">
                <h5 class="my_h5">
                    Если вы заинтересовались нашей продукцией и хотите узнать больше о возможностях сотрудничества, мы
                    всегда рады ответить на ваши вопросы и предоставить консультацию. Наша компания стремится обеспечить
                    индивидуальный подход к каждому клиенту, предлагая качественную корпусную мебель по доступным ценам.
                    <br>
                    Свяжитесь с нами прямо сейчас, и мы с радостью поможем вам обустроить свой дом или офис качественной
                    и стильной мебелью, учитывая все ваши пожелания и предпочтения.
                </h5>
            </div>
        </div>
    </div>
    <div class="container4">
        <div class="container">
            <div class="container4_content">
                <div class="container4_contact" data-aos="fade-right" data-aos-offset="500">
                    <h2>Контакты</h2>
                    <div class="info">
                        <ul class="list-group list-group-flush">
                            <ul class="list-group list-group-flush">
                                <li data-aos="fade-right"  data-aos-delay="300"><i class="bi bi-house"></i>Октябрьская ул., 85А, Бородино</li>
                                <li data-aos="fade-right"  data-aos-delay="400"><i class="bi bi-telephone"></i>+7 (902) 940-67-03</li>
                                <li data-aos="fade-right"  data-aos-delay="500"><i class="bi bi-envelope"></i>mebel.borodino@mail.ru</li>
                                <li data-aos="fade-right"  data-aos-delay="600"><i class="bi bi-alarm"></i>Ежедневно, 09:00–20:00</li>
                            </ul>
                        </ul>
                    </div>
                </div>
                <div class="map" style="position:relative;overflow:hidden;" data-aos="fade-right" data-aos-delay="100">
                    <a
                        href="https://yandex.ru/maps/org/mebel_na_zakaz/36431469278/?utm_medium=mapframe&utm_source=maps"
                        style="color:#eee;font-size:12px;position:absolute;top:0px;">Мебель на заказ</a><a
                        href="https://yandex.ru/maps/20085/borodino/category/custom_made_furniture/184107879/?utm_medium=mapframe&utm_source=maps"
                        style="color:#eee;font-size:12px;position:absolute;top:14px;">Мебель на заказ в Бородино</a>
                    <iframe
                        src="https://yandex.ru/map-widget/v1/?from=mapframe&ll=94.889969%2C55.900789&mode=search&oid=36431469278&ol=biz&z=17"
                        width="700" height="400" frameborder="1" allowfullscreen="true"
                        style="position:relative;"></iframe>
                </div>
            </div>
        </div>
    </div>
    <div class="container3_contact">
        <div class="container">
            <div class="container3_content_contact" >
                <h2 style="padding: 0; color: white" data-aos="fade-left" data-aos-delay="100">Свяжитесь с нами</h2>
                <form method="post" action="/send_mail" class="contact-form" >
                    @csrf

                    <input data-aos="fade-left" data-aos-delay="200" type="email" id="email" name="email" placeholder="Ваш Email" required>
                    <input data-aos="fade-left" data-aos-delay="300" type="text" id="name" name="name" placeholder="Имя" required>
                    <input data-aos="fade-left" data-aos-delay="400" type="tel" id="phone" name="phone" placeholder="Номер телефона" required>
                    <textarea data-aos="fade-left" data-aos-delay="500" id="message" name="message" placeholder="Сообщение" required></textarea>
                    <button class="container3_content_contact_btn" data-aos="fade-left" data-aos-delay="600" type="submit">Отправить</button>
                </form>
            </div>
        </div>
    </div>

@endsection
