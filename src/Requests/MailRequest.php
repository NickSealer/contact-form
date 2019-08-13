<?php

namespace Taskuniverse\ContactForm\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MailRequest extends FormRequest
{
  /**
  * Determine if the user is authorized to make this request.
  *
  * @return bool
  */
  public function authorize()
  {
    return true;
  }

  /**
  * Get the validation rules that apply to the request.
  *
  * @return array
  */
  public function rules()
  {
    return [
      'nombres' => 'required|Min:10,Max50',
      'apellidos' => 'required|Min:10,Max50',
      'cc' => 'required|numeric',
      'email' => 'required|E-Mail',
      'subject' => 'required|Min:10,Max:50',
      'message' => 'required|Min:120,Max:5000,regex:/^.+@.+$/i'
    ];
  }

  public function messages()
  {
    return [
      'nombres.required' => 'Nombres is required.',
      'apellidos.required' => 'Apellidos is required.',
      'cc.required' => 'CC is required.',
      'email.required' => 'Email is required.',
      'subject.required' => 'Subject is required.',
      'message.required' => 'Message is required.'
    ];
  }

}
