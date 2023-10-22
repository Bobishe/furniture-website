@extends('layouts.app')

@section('content')

    <h5 class="my_h5 container mt-5">
        <a data-aos="fade-left" data-aos-delay="100" href="/">Главная</a> <a data-aos="fade-left"
                                                                             data-aos-delay="200" href="#">\</a>
        <a data-aos="fade-left"
           data-aos-delay="300" href="#">Наши работы</a>
    </h5>

    <div class="container catalog_list mt-3 mb-5" >


        @foreach($data as $item)

                <?php
                switch ($item['category']) {

                    case 1:
                        $category = "Шкафы";
                        break;
                    case 2:
                        $category = "Кухни";
                        break;
                    case 3:
                        $category = "Ресепшен";
                        break;
                    case 4:
                        $category = "Фартуки";
                        break;
                };
                ?>





            <div class="card mt-5 my_card" style="width: 38rem;">
                <img src="{{$item['img']}}" class="card-img-top" alt="Мебель Бородино Уяр Рыбинский район">
                <div class="card-body">
                    <p>Категория: {{$category}}</p>
                    <h5 class="">{{$item['description']}}</h5>
                </div>
            </div>
        @endforeach
    </div>


@endsection
