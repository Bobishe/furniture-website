<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\furniture;
use App\Models\vorcs_table;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('welcome');
    }

    public function admin(){

        return view('admin');

    }

    public function add(Request $request)
    {
        // Получаем данные из формы
        $name = $request->input('name');
        $category = $request->input('category');
        $description = $request->input('description');
        $price = $request->input('price');

        // Получаем файл из формы и сохраняем его
        $image = $request->file('image');
        $image_name = uniqid() . '.' . $image->getClientOriginalExtension();
        $image_path = 'assets/img/catalog/' . $image_name;
        $image->move(public_path('assets/img/catalog'), $image_name);

        //олучаем максимально езначение артикула
        $max_article = Furniture::max('article');
        $max_article++;

        // Создаем новый товар в базе данных
        $product = new Furniture;
        $product->article = $max_article;
        $product->name = $name;
        $product->category = $category;
        $product->description = $description;
        $product->price = $price;
        $product->image = $image_path;
        $product->save();

        // Возвращаемся на страницу со списком товаров
        return redirect()->route('admin');
    }

// Добавить запись в наши работы
    public function add_works(Request $request)
    {
        // Получаем данные из формы
        $description = $request->input('description');
        $category = $request->input('category');


        // Получаем файл из формы и сохраняем его
        $image = $request->file('img');
        $image_name = uniqid() . '.' . $image->getClientOriginalExtension();
        $image_path = 'assets/img/works/' . $image_name;
        $image->move(public_path('assets/img/works'), $image_name);


        // Создаем новый товар в базе данных
        $works = new vorcs_table;
        $works->description = $description;
        $works->category = $category;
        $works->img = $image_path;
        $works->save();

        // Возвращаемся на страницу со списком товаров
        return redirect()->route('admin');
    }



//Поиск товара
    public function search_admin(Request $request)
    {
        // Получаем артикул товара из GET запроса
        $article = $request->input('article');
        $flag = $request->input('flag');



        // Ищем товар по артикулу в базе данных
        $product = Furniture::where('article', $article)->first();

        // Если товар не найден, возвращаемся на страницу со списком товаров
        if (!$product) {
            return redirect()->route('admin', ['item' => '0'] );
        }


        // Если товар найден, отображаем страницу с информацией о товаре
        return view('admin', [
            'item' => $product,
        ]);

    }

    //Удаление товара
    public function delete($id){

        $product = Furniture::findOrFail($id); // Находим запись по ID

        $product->delete(); // Удаляем запись из базы данных

        return view('admin');
    }

    //Редактирование товара
    public function update(Request $request){
        $id = $request->input('id');
        $product = Furniture::findOrFail($id);

        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->price = $request->input('price');

        // Проверяем, загружен ли файл изображения и сохраняем его
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = uniqid() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('assets/img/catalog'), $filename);
            $product->image = 'assets/img/catalog/' . $filename;
        }

        $product->save();

        return view('admin');
    }
}
