<?php

namespace App\Http\Controllers;


use App\Http\Requests\CallMeRequest;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use App\Models\User;
use App\Notifications\ContactNotification;
use Illuminate\Http\RedirectResponse;

/**
 * Class ContactController
 * @package App\Http\Controllers
 */
class ContactController extends Controller
{

    /**
     * @param ContactRequest $request
     * @return RedirectResponse
     */
    public function contact(ContactRequest $request): RedirectResponse
    {
        // Get values
        $values = $this->getContactValues($request,'contact');

        return $this->event($values);
    }

    /**
     * @param CallMeRequest $request
     * @return RedirectResponse
     */
    public function call(CallMeRequest $request): RedirectResponse
    {
        // Get values
        $values = $this->getContactValues($request,'call');

        return $this->event($values);
    }

    /**
     * @param array $values
     * @return RedirectResponse
     */
    private function event(array $values): RedirectResponse
    {
        // Store new contact
        $contact = $this->store($values);
        // send email with contact coordination
        $this->notification($contact);
        // push flash session with success message
        $this->session();
        // redirect to welcome page
        return redirect()->route('welcome');
    }

    /**
     * @param $request
     * @param string $prefix
     * @return array
     */
    private function getContactValues($request,string $prefix): array
    {
        return [
            'name'          => $request->$prefix['name'],
            'email'         => (isset($request->$prefix['email'])) ? $request->$prefix['email'] : null,
            'phone'         => $request->$prefix['phone'],
        ];
    }

    /**
     * @param array $values
     * @return Contact
     */
    private function store(array $values): Contact
    {
        $contact = new Contact($values);
        $contact->save();
        return $contact;
    }

    private function session()
    {
        session()->flash('success', 'Votre demande a bien été transmit aux staff de communication vous serais contacter dès que possible');
    }

    /**
     * @param Contact $contact
     */
    private function notification(Contact $contact)
    {
        $user = new User(['email' => config('mail.from.address')]);
        $user->notify(new ContactNotification($contact));
    }

}
