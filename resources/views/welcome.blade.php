@extends('layouts.app')

@section('content')

    <div class="promo">
        <div class="container" style="height: 90vh">
            <h1 class="promo_h1" data-aos="fade-right" data-aos-delay="300">Качественная мебель</h1>
            <h3 class="promo_h3" data-aos="fade-right" data-aos-delay="500">Наполни пространство дизайном</h3>
            <a href="/catalog" type="button" class="btn btn-primary" data-aos="fade-right" data-aos-delay="700">Смотреть каталог</a>
        </div>
    </div>

    <div class="container1" data-aos="zoom-in">
        <div class="container">
            {{--<h2>О нас</h2>--}}
            <div class="container1_promo">
                <h5 class="my_h5">
                    Наша компания специализируется на изготовлении качественной корпусной мебели.

                    Особенностью нашего предприятия является то, что мы не занимаемся реализацией готовых предметов
                    мебели
                    через выставочные залы, магазины или мебельные салоны. Мы работаем напрямую с нашими заказчиками,
                    исключая из стоимости систему дополнительных наценок, связанных с посредниками.

                    Благодаря этому подходу мы гарантируем оптимальный баланс между доступной стоимостью и высоким
                    качеством
                    нашей продукции. Изготавливая корпусную мебель с использованием передовых технологий и материалов,
                    мы
                    стремимся удовлетворить самые разные потребности наших клиентов.
                </h5>
            </div>
        </div>
    </div>

    <div class="container2">
        <div class="container" data-aos="zoom-in" data-aos-delay="100">
            <a href="/works">
                <div class="container_eny ">
                    <div class="container_works_img">
                        <h2 style="background-color: #f5f7f8; text-align: center; padding-top: 0!important;">Мебель собственного производства</h2>
                    </div>
                </div>
            </a>
        </div>
        <div class="container2_my container mt-1">



            <a href="/catalog/9" class="container2_small" data-aos="fade-right" data-aos-delay="500">
                <h2>Стулья</h2>
                <p>(стулья / табуреты)</p>
                <div class="container2_small_img_1"></div>
            </a>
            <a href="/catalog/1" class="container2_big " data-aos="fade-right" data-aos-delay="200">
                <h2>Гостиные</h2>
                <p>(готовые решения / модульные системы)</p>
                <div class="container2_big_img_1">

                </div>
            </a>
            <a href="/catalog/7" class="container2_big " data-aos="fade-left" data-aos-delay="100">
                <h2>Малые формы</h2>
                <p>(интерьерные полки / комоды / стеллажи / трельяжи)</p>
                <div class="container2_big_img_2">
                </div>
            </a>
            <a href="/catalog/6" class="container2_small " data-aos="fade-left" data-aos-delay="500">
                <h2>Шкафы</h2>
                <p>(шкафы распашные / шкафы купе)</p>
                <div class="container2_small_img_2"></div>
            </a>
        </div>
    </div>

    <div class="container3">
        <div class="container">
            <div class="container3_content" >
                <h2 style="padding: 0; color: white" data-aos="fade-left"  data-aos-delay="100">Свяжитесь с нами</h2>
                <form method="post" action="/send_mail" class="contact-form">
                    @csrf
                    <input data-aos="fade-left"  data-aos-delay="200" type="email" id="email" name="email" placeholder="Ваш Email" required>
                    <input data-aos="fade-left"  data-aos-delay="300" type="text" id="name" name="name" placeholder="Имя" required>
                    <input data-aos="fade-left"  data-aos-delay="400" type="tel" id="phone" name="phone" placeholder="Номер телефона" required>
                    <textarea data-aos="fade-left"  data-aos-delay="500" id="message" name="message" placeholder="Сообщение" required></textarea>
                    <button data-aos="fade-left"  data-aos-delay="600" type="submit">Отправить</button>
                </form>
            </div>
        </div>
    </div>

    <div class="container4">
        <div class="container">
            <div class="container4_content">
                <div class="container4_contact">
                    <h2>Контакты</h2>
                    <div class="info">
                        <ul class="list-group list-group-flush">
                            <li data-aos="fade-right"  data-aos-delay="300"><i class="bi bi-house"></i>Октябрьская ул., 85А, Бородино</li>
                            <li data-aos="fade-right"  data-aos-delay="400"><i class="bi bi-telephone"></i>+7 (902) 940-67-03</li>
                            <li data-aos="fade-right"  data-aos-delay="500"><i class="bi bi-envelope"></i>mebel.borodino@mail.ru</li>
                            <li data-aos="fade-right"  data-aos-delay="600"><i class="bi bi-alarm"></i>Ежедневно, 09:00–20:00</li>
                        </ul>
                    </div>
                </div>
                <div class="map" style="position:relative;overflow:hidden;" data-aos="fade-right"  data-aos-delay="200">
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

@endsection
