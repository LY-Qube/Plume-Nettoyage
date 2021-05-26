<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CallMeRequest extends FormRequest
{
    /**
     * The URI to redirect to if validation fails.
     *
     * @var string
     */
    protected $redirect = '?#call-me';


    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            "call.name"      => ['required','regex:/^[a-zA-Z -]+$/','min:3'],
            "call.email"     => "nullable|string|email",
            "call.phone"     => ['required','string','regex:/^(?:(?:(?:\+|00)33[ ]?(?:\(0\)[ ]?)?)|0){1}[1-9]{1}([ .-]?)(?:\d{2}\1?){3}\d{2}$/']
        ];
    }

    /**
     * Translate errors message
     * @return string[]
     */
    public function messages(): array
    {
        return [
            'call.name.required'     => 'Nous avons besoin de votre Nom et Prénom.',
            'call.name.regex'        => "Merci d'indiquer votre vrai Nom et Prénom.",
            'call.name.min'          => "Merci d'indiquer votre vrai Nom et Prénom.",
            'call.phone.regex'       => "Merci d'indiquer votre vrai numéro de téléphone.",
            'call.phone.string'      => "Merci d'indiquer votre vrai numéro de téléphone.",
            'call.phone.required'    => "Nous avons besoin de votre numéro de téléphone.",
        ];
    }

}
