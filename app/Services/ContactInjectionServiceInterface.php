<?php
namespace App\Services;

use App\DTO\ContactDTO;
use App\Contact;

interface ContactInjectionServiceInterface
{
    public function inject(ContactDTO $contactDTO);

}

