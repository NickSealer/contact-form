<?php

namespace Taskuniverse\ContactForm;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Mail;
use Taskuniverse\ContactForm\Mail as Mailer;
use Taskuniverse\ContactForm\Requests\MailRequest;

class ContactController extends Controller
{

  public function index()
  {
    return view('contactform::mails.contact');
  }

  public function sendEmail(MailRequest $request)
  {
    $data = $request->all();
    $mail = (Object) $data;
    Mail::to(env('MAIL_USERNAME'))->send(new Mailer($mail));
    flash('Your message has been sended. We will contact you as soon as we can. Thank you!')->success()->important();
    return back();
  }

}
