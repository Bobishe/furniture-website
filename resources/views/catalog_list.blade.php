@extends('layouts.app')

@section('content')

    <div class="mt-5 mb-5 container">
        <h5 class="my_h5">
            <a href="/">Главная</a> \ <a href="/catalog">Каталог</a> \ <?php
                                                                       switch ($id) {
                                                                           case 'eny':
                                                                               echo "Все товары";
                                                                               break;
                                                                           case 1:
                                                                               echo "Гостинные";
                                                                               break;
                                                                           case 2:
                                                                               echo "Спальни";
                                                                               break;
                                                                           case 3:
                                                                               echo "Подростковые комнаты";
                                                                               break;
                                                                           case 4:
                                                                               echo "Прихожие";
                                                                               break;
                                                                           case 5:
                                                                               echo "Обувницы";
                                                                               break;
                                                                           case 6:
                                                                               echo "Шкафы";
                                                                               break;
                                                                           case 7:
                                                                               echo "Малые формы";
                                                                               break;
                                                                           case 8:
                                                                               echo "Столы";
                                                                               break;
                                                                           case 9:
                                                                               echo "Стулья";
                                                                               break;
                                                                           case 10:
                                                                               echo "Кухонные гарнитуры";
                                                                               break;
                                                                       };
                                                                       ?>


        </h5>

        @if($id == 'eny')



                <div class="catalog_list">
                    @foreach($furnitureItems as $item)


                                <?php
                                switch ($item['category']) {

                                    case 1:
                                        $category = "Гостинные";
                                        break;
                                    case 2:
                                        $category = "Спальни";
                                        break;
                                    case 3:
                                        $category = "Подростковые комнаты";
                                        break;
                                    case 4:
                                        $category = "Прихожие";
                                        break;
                                    case 5:
                                        $category = "Обувницы";
                                        break;
                                    case 6:
                                        $category = "Шкафы";
                                        break;
                                    case 7:
                                        $category = "Малые формы";
                                        break;
                                    case 8:
                                        $category = "Столы";
                                        break;
                                    case 9:
                                        $category = "Стулья";
                                        break;
                                    case 10:
                                        $category = "Кухонные гарнитуры";
                                        break;
                                };
                                ?>

                            <div class="card" style="width: 18rem;">
                                <img src="{{asset($item['image'])}}" class="card-img-top" alt="Изображение мебели на заказ Бородино">
                                <div class="card-body">
                                    <h5 class="card-title">{{$item['name']}}</h5>
                                    <p>Категория: {{$category}}</p>
                                        <?php
                                        $words = preg_split('/\s+/', $item['description'], -1, PREG_SPLIT_NO_EMPTY);
                                        $new_text = implode(' ', array_slice($words, 0, 10));
                                        $words = explode(' ', $new_text);
                                        $count = count($words);

                                        ?>
                                    <p class="card-text">{{$new_text}}<?php if ($count >= 10) echo '...' ?></p>
                                    <a href="/catalog/item/{{$item['id']}}" class="btn btn-primary">Подробнее</a>

                                </div>
                            </div>

                    @endforeach
                </div>

        @endif



        @if($id != 'eny')
            <div class="catalog_list">
                @foreach($furnitureItems as $item)
                    <div class="card" style="width: 18rem;">
                        <img src="{{asset($item['image'])}}" class="card-img-top" alt="Изображение мебели на заказ Бородино">
                        <div class="card-body">
                            <h5 class="card-title">{{$item['name']}}</h5>
                                <?php
                                $words = preg_split('/\s+/', $item['description'], -1, PREG_SPLIT_NO_EMPTY);
                                $new_text = implode(' ', array_slice($words, 0, 10));
                                $words = explode(' ', $new_text);
                                $count = count($words);

                                ?>
                            <p class="card-text">{{$new_text}}<?php if ($count >= 10) echo '...' ?></p>
                            <a href="/catalog/item/{{$item['id']}}" class="btn btn-primary">Подробнее</a>

                        </div>
                    </div>
                @endforeach
            </div>
        @endif

        <div class="paginate">
            {{ $furnitureItems->links('simple-bootstrap-5') }}
        </div>


    </div>

@endsection
