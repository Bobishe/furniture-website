@extends('layouts.app')

@section('content')

    <div class="mt-5 mb-5 container my_flex">
        <h5 class="my_h5">
            <a href="/" data-aos="fade-left" >Главная</a> \
            <a href="/catalog" data-aos="fade-left" >Каталог
            </a> \ <a data-aos="fade-left" >{{$item['name']}}</a>
        </h5>

        <div class="item_content">

            <div class="item_content_img" data-aos="fade-right" data-aos-offset="100">
                <img src="/{{$item['image']}}" style="" alt="Картинка продукта">
            </div>

            <div class="mt-5 item_content_text" >

                <h2 data-aos="fade-left" data-aos-delay="200">{{$item['name']}}</h2>
                <h5 data-aos="fade-left" data-aos-delay="300" style="margin-top: 10px;">Артикул товара: {{$item['article']}}</h5>
                <h3 data-aos="fade-left" data-aos-delay="400">Цена: {{$item['price']}} ₽</h3>
                <h4 data-aos="fade-left" data-aos-delay="500" style="padding-bottom: 10px; padding-left: 20px;">Описание:</h4>
                <h5 data-aos="fade-left" data-aos-delay="600"> {{$item['description']}}</h5>
                <h4 data-aos="fade-left" data-aos-delay="700" style="padding: 30px 0 10px 20px;">Изготовление:</h4>

            </div>
        </div>


        <?php
        $protocol = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') ? "https://" : "http://";
        $current_page_url = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

        ?>


        <div class="container mt-5" data-aos="fade-left" data-aos-delay="1000" style="text-align: center">
            <div style="margin-left: auto; margin-right: auto" >
                <h2 style="padding: 0; color: black">Сделать заказ</h2>
                <p style="color: black">В заказ будет добавлен товар с данной страницы</p>
                <form method="post" action="/send_mail" class="contact-form1">
                    @csrf
                    <input  type="hidden" name="url" value="{{$current_page_url}}">
                    <input type="email" id="email" name="email" placeholder="Ваш Email" required>
                    <input type="text" id="name" name="name" placeholder="Имя" required>
                    <input type="tel" id="phone" name="phone" placeholder="Номер телефона" required>
                    <textarea id="message" name="message" placeholder="Сообщение" required></textarea>
                    <button type="submit">Отправить</button>
                </form>
            </div>
        </div>


    </div>

@endsection
