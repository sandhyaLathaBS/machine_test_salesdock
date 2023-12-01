<?php
namespace App\Services;

use App\DTO\ContactDTO;

class MainInjectionService
{
    protected $injectionServices;

    public function __construct(array $injectionServices)
    {
        $this->injectionServices = $injectionServices;
    }

    public function injectData(ContactDTO $contactDTO, string $type)
    {
        if (isset($this->injectionServices[$type])) {
            $this->injectionServices[$type]->inject($contactDTO);
        }
    }
}


?>