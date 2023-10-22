<?php

namespace App\Http\Controllers;

use App\Models\furniture;

use Illuminate\Http\Request;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
use App\Models\vorcs_table;



class main extends Controller
{
    public function catalog()
    {
        return view('catalog');
    }

    public function show($id)
    {

        if ($id == 'eny') {


            $furnitureItems = Furniture::orderBy('category')->paginate(20);


            return view('catalog_list', [
                'id' => $id,
                'furnitureItems' => $furnitureItems
            ]);
        } else {
            $furnitureItems = Furniture::where('category', $id)->paginate(20);

            return view('catalog_list', [
                'id' => $id,
                'furnitureItems' => $furnitureItems
            ]);
        }
    }


    public function item($id){

            $item = Furniture::findOrFail($id);
            return view('item', ['item' => $item]);

    }


    public function show_test(){

        $items = Furniture::paginate(5);
        return view('test', ['items' => $items]);

    }


    //Поиск товара
    public function search(Request $request)
    {
        // Получаем артикул товара из GET запроса
        $article = $request->input('article');

        // Ищем товар по артикулу в базе данных
        $product = Furniture::where('article', $article)->first();

        // Если товар не найден, возвращаемся на страницу со списком товаров
        if (!$product) {
            return redirect()->route('admin');
        }

        $url = '/catalog/item/'.$product['id'];

        // Если товар найден, отображаем страницу с информацией о товаре
        return redirect($url);
    }

    public function contact(){
        return view('contact');
    }

    public function send_mail(Request $request){


        //Create an instance; passing `true` enables exceptions
        $mail = new PHPMailer(true);

        $email = $request['email'];
        $name = $request['name'];
        $phone = $request['phone'];
        $message = $request['message'];

        if (!empty($request['url'])) {
            $url = $request['url'];
        }

        try {
            //Server settings
            $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'crezy.zeka100@gmail.com';                     //SMTP username
            $mail->Password   = 'qvsnkzrsmtvosxuu';                               //SMTP password
            /*$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;   */         //Enable implicit TLS encryption
            $mail->SMTPSecure = 'ssl'; // Включение SSL (другие варианты: 'tls')
            $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            //Recipients
            $mail->setFrom('crezy.zeka100@gmail.com', 'Клиент');
            $mail->addAddress('mebel.borodino@mail.ru', $name);     //Add a recipient
            $mail->addAddress('mebel.borodino@mail.ru');               //Name is optional
            $mail->addReplyTo('mebel.borodino@mail.ru', 'Information');
            $mail->addCC('mebel.borodino@mail.ru');
            $mail->addBCC('mebel.borodino@mail.ru');

            //Attachments
            /*$mail->addAttachment('');         //Add attachments
            $mail->addAttachment('', '');    //Optional name*/

            //Content
            $mail->isHTML(true);                                      //Set email format to HTML

            $mail->CharSet = 'UTF-8';                                  //Set charset to UTF-8
            $mail->ContentType = 'text/html; charset=UTF-8';           //Set Content-Type header with charset

            $mail->Subject = 'Сообщение от клиента!';


            if (!empty($url)) {
                $message_all = $message.'<br> Ссылка на товар заинтересовавший клиента: '.$url.' <br> Почта отправителя: '.$email.' <br> Номер телефона отправителя: '.$phone;
            }else{
                $message_all = $message.' <br> Почта отправителя: '.$email.' <br> Номер телефона отправителя: '.$phone;
            }


            $mail->Body    = $message_all;
            $mail->AltBody = '';

            $mail->SMTPDebug = 0;
            $mail->send();



            return view('catalog', ['mail' => 1]);

        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }


    //Отзывы
    public function reviews(){
        return view('reviews');
    }


    //Наши работы
    public function works(){

        $data = vorcs_table::orderBy('category')->paginate(20);

        return view('works', ['data' => $data]);
    }


}
