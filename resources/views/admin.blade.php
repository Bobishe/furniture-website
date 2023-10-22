@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row mt-5 mb-5">
            <nav class="navbar navbar-light bg-light col-3">
                <div class="container-fluid">
                    <button id="btn1" class="navbar-brand">Добавить товар</button>
                    <button id="btn2" class="navbar-brand">Наши работы</button>
                    <button id="btn3" class="navbar-brand">Удалить товар</button>
                    <button id="btn4" class="navbar-brand">Редактировать карточку товара</button>
                </div>
            </nav>
            <div class="nav_items col-9">


                {{--Добавить товар--}}
                <div id="block1" style="">
                    <form method="POST" action="{{ route('product.store') }}" enctype="multipart/form-data" id="image-form">
                        @csrf

                        <div class="mb-3">
                            <label for="name" class="form-label">Название товара</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>

                        <div class="mb-3">
                            <label for="category" class="form-label">Категория</label>
                            <select class="form-select" id="category" name="category" required>
                                <option selected disabled value="">Выберите категорию</option>
                                <option value="1">Гостинные</option>
                                <option value="2">Спальни</option>
                                <option value="3">Подростковые комнаты</option>
                                <option value="4">Прихожие</option>
                                <option value="5">Обувницы</option>
                                <option value="6">Шкафы</option>
                                <option value="7">Малые формы</option>
                                <option value="8">Столы</option>
                                <option value="9">Стулья</option>
                                <option value="10">Кухонные гарнитуры</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label">Описание</label>
                            <textarea class="form-control" id="description" name="description" rows="3"
                                      required></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="price" class="form-label">Цена</label>
                            <input type="number" class="form-control" id="price" name="price" required>
                        </div>

                        <div class="mb-3">
                            <label for="image" class="form-label">Изображение</label>
                            <input type="file" class="form-control" id="image" name="image"
                                   accept="image/png,image/jpeg,image/jpg" required>
                        </div>



                        <button type="submit" class="btn btn-primary" form="image-form" id="add">Добавить товар</button>
                    </form>
                </div>


                {{--Наши работы--}}
                <div id="block2" style="display: none;">
                    <form method="POST" action="{{ route('works.store') }}" enctype="multipart/form-data" id="form111">
                        @csrf

                        <div class="mb-3">
                            <label for="name" class="form-label">Описание</label>
                            <input type="text" class="form-control" id="description" name="description" required>
                        </div>

                        <div class="mb-3">
                            <label for="category" class="form-label">Категория</label>
                            <select class="form-select" id="category" name="category" required>
                                <option selected disabled value="">Выберите категорию</option>
                                <option value="1">Шкафы</option>
                                <option value="2">Кухни</option>
                                <option value="3">Ресепшен</option>
                                <option value="4">Фартуки</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="image" class="form-label">Изображение</label>
                            <input type="file" class="form-control" id="image" name="img"
                                   accept="image/png,image/jpeg,image/jpg" required>
                        </div>



                        <button type="submit" class="btn btn-primary" form="form111" id="add">Добавить товар</button>
                    </form>
                </div>


                {{--Поиск товара--}}
                <div id="block3" style="display: none; padding-bottom: 15vh;">
                    <form method="GET" action="{{ route('product.search.admin') }}">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Введите артикул товара" name="article">
                            {{--<input type="hidden" name="flag" value="delete">--}}
                            <button class="btn btn-outline-secondary" type="submit">Найти</button>
                        </div>
                    </form>
                    {{--Если существует--}}
                    @if(isset($item))

                        <div class="item_content">
                            <div class="item_content_img">
                                <img src="/{{$item['image']}}" style="" alt="Картинка продукта">
                            </div>

                            <div class="item_content_text">
                                <h2>{{$item['name']}}</h2>
                                <h5 style="margin-top: 10px;">Артикул товара: {{$item['article']}}</h5>
                                <h3>Цена: {{$item['price']}} ₽</h3>
                                @auth

                                    <form id="form1" method="POST" action="/delete/{{$item['id']}}">
                                        @csrf
                                        <button type="submit" class="btn btn-danger" form="form1">Удалить</button>
                                    </form>

                                @endauth
                                <div style="height: 20px;"></div>
                                <h4 style="padding-bottom: 10px; padding-left: 20px;">Описание:</h4>
                                <h5> {{$item['description']}}</h5>
                                <h4 style="padding: 30px 0 10px 20px;">Изготовление:</h4>
                                <h5>30 - 60 дней</h5>
                            </div>
                        </div>

                    @endif
                    {{--Если НЕ существует--}}
                    @if(!isset($item))
                        <h2>Товар не найден!</h2>
                    @endif

                </div>


                <div id="block4" style="display: none; padding-bottom: 15vh">
                    <form method="GET" action="{{ route('product.search.admin') }}">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Введите артикул товара" name="article">
                            {{--<input type="hidden" name="flag" value="update">--}}
                            <button class="btn btn-outline-secondary" type="submit">Найти</button>
                        </div>
                    </form>
                    {{--Если существует--}}
                    @if(isset($item))

                        <div class="item_content">
                            <div class="item_content_img">
                                <img src="/{{$item['image']}}" style="" alt="Картинка продукта">
                            </div>


                            {{--Добавить товар--}}

                            <form id="form2" method="POST" action="/update" enctype="multipart/form-data">
                                @csrf

                                <input type="hidden" name="id" value="{{$item['id']}}">

                                <div class="mb-3">
                                    <label for="name" class="form-label">Название товара</label>
                                    <input type="text" class="form-control" id="name" name="name" value="{{$item['name']}}" required>
                                </div>



                                <div class="mb-3">
                                    <label for="description" class="form-label">Описание</label>
                                    <textarea  class="form-control " id="my-textarea" name="description" rows="8"
                                              required>{{$item['description']}}</textarea>
                                </div>

                                <div class="mb-3">
                                    <label for="price" class="form-label">Цена</label>
                                    <input type="number" class="form-control" id="price" name="price" value="{{$item['price']}}" required>
                                </div>

                                <div class="mb-3">
                                    <label for="image" class="form-label">Изображение</label>
                                    <input type="file" class="form-control" id="image" name="image"
                                           accept="image/png,image/jpeg,image/jpg">
                                </div>

                                <button type="submit" class="btn btn-primary" form="form2">Внести изменения</button>
                            </form>


                        </div>

                    @endif
                    {{--Если НЕ существует--}}
                    @if(!isset($item))
                        <h2>Товар не найден!</h2>
                    @endif
                </div>
            </div>
        </div>
    </div>







    <script>

        /*const textarea = document.getElementById("my-textarea");


        // Добавляем обработчик событий на событие "input"
        textarea.addEventListener("input", function() {
            // Устанавливаем высоту textarea равной его scrollHeight
            this.style.height = this.scrollHeight + "px";
        });*/


        // Получаем кнопки и блоки по их id
        var btn1 = document.getElementById("btn1");
        var btn2 = document.getElementById("btn2");
        var btn3 = document.getElementById("btn3");
        var btn4 = document.getElementById("btn4");
        var block1 = document.getElementById("block1");
        var block2 = document.getElementById("block2");
        var block3 = document.getElementById("block3");
        var block4 = document.getElementById("block4");

        // Добавляем обработчик событий для каждой кнопки
        btn1.addEventListener("click", function () {
            // Скрываем остальные блоки и показываем блок 1
            block2.style.display = "none";
            block3.style.display = "none";
            block4.style.display = "none";
            block1.style.display = "block";
        });

        btn2.addEventListener("click", function () {
            // Скрываем остальные блоки и показываем блок 2
            block1.style.display = "none";
            block3.style.display = "none";
            block4.style.display = "none";
            block2.style.display = "block";
        });

        btn3.addEventListener("click", function () {
            // Скрываем остальные блоки и показываем блок 3
            block1.style.display = "none";
            block2.style.display = "none";
            block4.style.display = "none";
            block3.style.display = "block";
        });

        btn4.addEventListener("click", function () {
            // Скрываем остальные блоки и показываем блок 4
            block1.style.display = "none";
            block2.style.display = "none";
            block3.style.display = "none";
            block4.style.display = "block";
        });
    </script>

@endsection
