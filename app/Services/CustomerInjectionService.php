<?php
namespace App\Services;

use App\DTO\ContactDTO;
use App\Contact;

class CustomerInjectionService implements ContactInjectionServiceInterface
{
    use ContactInjectionTrait;

    public function inject(ContactDTO $contactDTO): void
    {
        $this->inject($contactDTO);
    }
}

?>