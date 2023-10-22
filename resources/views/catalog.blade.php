@extends('layouts.app')

@section('content')

    <div class="container container_catalog">

        <h5 class="my_h5">
            <a data-aos="fade-left" data-aos-delay="100" href="/">Главная</a> <a data-aos="fade-left"
                                                                                 data-aos-delay="200" href="#">\</a>
            <a data-aos="fade-left"
               data-aos-delay="300" href="#">Каталог</a>
        </h5>

        <h2>Каталог</h2>
    </div>
    <div class="container" data-aos="zoom-in" data-aos-delay="100">
        <a href="/works">
            <div class="container_eny ">
                <div class="container_works_img">
                    <h2 style="background-color: #f5f7f8; text-align: center; padding-top: 0!important;">Мебель собственного производства</h2>
                </div>
            </div>
        </a>
    </div>

    <div class="container" data-aos="zoom-in" data-aos-delay="100">
        <a href="/catalog/eny">
            <div class="container_eny ">
                <div class="container_eny_img">
                    <h2>Вся мебель</h2>
                </div>
            </div>
        </a>
    </div>
    <div class="container2" style="margin-top: 20px;">
        <div class="container2_my container">

            <a href="/catalog/9" class="container2_small">
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
            <a href="/catalog/6" class="container2_small " data-aos="fade-left" data-aos-delay="400">
                <h2>Шкафы</h2>
                <p>(шкафы распашные / шкафы купе)</p>
                <div class="container2_small_img_2"></div>
            </a>

            <a href="/catalog/10" class="container2_small" data-aos="fade-right" data-aos-delay="400">
                <h2>Кухонные ганитуры</h2>
                <div class="container2_small_img_3"></div>

            </a>
            <a href="/catalog/8" class="container2_big" data-aos="fade-right" data-aos-delay="200">
                <h2>Столы</h2>
                <p>(компьютерные / письменные / журнальные)</p>
                <div class="container2_big_img_3"></div>
            </a>


            <a href="/catalog/2" class="container2_big" data-aos="fade-left" data-aos-delay="200">
                <h2>Спальни</h2>

                <div class="container2_big_img_4"></div>
            </a>
            <a href="/catalog/4" class="container2_small" data-aos="fade-left" data-aos-delay="400">
                <h2>Прихожие</h2>
                <div class="container2_small_img_4"></div>
            </a>


            <a href="/catalog/3" class="container2_small" data-aos="fade-right" data-aos-delay="400">
                <h2>Подростковые комнаты</h2>
                <div class="container2_small_img_5"></div>

            </a>
            <a href="/catalog/5" class="container2_big" data-aos="fade-right" data-aos-delay="200">
                <h2>Обувницы</h2>

                <div class="container2_big_img_5"></div>
            </a>

        </div>


    </div>
    </div>
    <div style="height: 10vh"></div>

@endsection
