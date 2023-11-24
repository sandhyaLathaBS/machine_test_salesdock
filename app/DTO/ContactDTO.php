<?php
namespace App\DTO;

class ContactDTO
{
    public $first_name;
    public $last_name;
    public $postal_code;
    public $city;
    public $street_name;

    public function __construct($first_name, $last_name, $postal_code, $city= null, $street_name = null)
    {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->postal_code = $postal_code;
        $this->city = $city;
        $this->street_name = $street_name;
    }
}
?>