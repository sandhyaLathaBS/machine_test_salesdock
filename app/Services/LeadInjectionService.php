<?php
namespace App\Services;

use App\DTO\ContactDTO;
use App\Contact;

class LeadInjectionService
{
    use ContactInjectionTrait;

    public function inject(ContactDTO $contactDTO): void
    {
        $this->inject($contactDTO);
    }

}




?>