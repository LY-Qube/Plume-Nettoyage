<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{

    /**
     * The URI to redirect to if validation fails.
     *
     * @var string
     */
    protected $redirect = '?#contact';


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
            "contact.name"      => ['required','regex:/^[a-zA-Z -]+$/','min:3'],
            "contact.email"     => "nullable|string|email",
            "contact.phone"     => ['required','string','regex:/^(?:(?:(?:\+|00)33[ ]?(?:\(0\)[ ]?)?)|0){1}[1-9]{1}([ .-]?)(?:\d{2}\1?){3}\d{2}$/']
        ];
    }

    /**
     * Translate errors message
     * @return string[]
     */
    public function messages(): array
    {
        return [
            'contact.name.required'     => 'Nous avons besoin de votre Nom et Prénom.',
            'contact.name.regex'        => "Merci d'indiquer votre vrai Nom et Prénom.",
            'contact.name.min'          => "Merci d'indiquer votre vrai Nom et Prénom.",
            'contact.phone.regex'       => "Merci d'indiquer votre vrai numéro de téléphone.",
            'contact.phone.string'      => "Merci d'indiquer votre vrai numéro de téléphone.",
            'contact.phone.required'    => "Nous avons besoin de votre numéro de téléphone.",
            'contact.email.string'      => "Merci d'indiquer votre vrai adresse e-mail.",
            'contact.email.email'       => "Merci d'indiquer votre vrai adresse e-mail.",
        ];
    }

}
