<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function save(ContactRequest $request)
    {
        $name = $request->name;
        $email = $request->email;
        $dateTime = $request->datetime;
        $country = $request->country;
        $phone = $request->phone;
        $message = $request->message;
        $txt = ' <b>Имя: </b>' . $name . "\n\n" .
            ' <b>Номер телефона:  </b>' . $phone . "\n\n" .
            ' <b>Эл. адрес:  </b>' . $email . "\n\n" .
            ' <b>Дата:  </b>' . $dateTime . "\n\n" .
            ' <b>Страна:  </b>' . $country . "\n\n" .
            ' <b>Сообщение:  </b>' . $message;
        $txt = urlencode($txt);
        $url = "https://api.telegram.org/bot".$_ENV["TELEGRAM_TOKEN"]."/sendMessage?chat_id=".$_ENV["TELEGRAM_CHAT_ID"]."&text=$txt" . "&parse_mode=html";
        file_get_contents($url);

        Contact::create($request->all());
        return redirect()->back()->with('message',"Спасибо за заявку");
    }
//    public function store(PageMessageRequest $request)
//    {
//        try {
//            $this->dispatchNow(new PageMessageJob($request));
//
////            Alert::success(__('site.tour_alert1'), trans('site.tour_alert2'));
//            if ($request->has('name')) {
//                $name = $request->name;
//                $email = $request->email;
//                $phone = $request->phone;
//                $message = $request->message;
//                $txt = ' <b>Имя: </b>' . $name . "\n\n" .
//                    ' <b>Номер телефона:  </b>' . $phone . "\n\n" .
//                    ' <b>Эл. адрес:  </b>' . $email . "\n\n" .
//                    ' <b>Сообщение:  </b>' . $message;
//                $txt = urlencode($txt);
//
//                $url = "https://api.telegram.org/bot".$_ENV["TELEGRAM_TOKEN"]."/sendMessage?chat_id=".$_ENV["TELEGRAM_CHAT_ID"]."&text=$txt" . "&parse_mode=html";
//
//                file_get_contents($url);
//            }
//
//            return view('site.feedback');
//            //return redirect($route)->with('success', 'Task Created Successfully!');
//        } catch (\Exception $exception) {
//            // Alert::error('Error', trans('admin.store_failed'));
//            return redirect()->route('site.feedback')->with('danger', trans('admin.store_failed'));
//        }
//    }
}
