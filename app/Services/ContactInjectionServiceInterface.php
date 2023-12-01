<?php
namespace App\Services;

use App\DTO\ContactDTO;
use App\Contact;

// interface ContactInjectionServiceInterface
// {
//     public function inject(ContactDTO $contactDTO);

// }

trait ContactInjectionTrait
{
    public function inject(ContactDTO $contactDTO) {
        $contact = new Contact();
        $contact->first_name = $contactDTO->first_name;
        $contact->last_name = $contactDTO->last_name;
        $contact->postal_code = $contactDTO->postal_code;
        $contact->city = $contactDTO->city;
        $contact->save();
    }
}
