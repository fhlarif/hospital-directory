<?php

namespace App\Livewire\Forms;

use Livewire\Form;
use App\Models\Institution;
use Livewire\Attributes\Rule;

class InstitutionForm extends Form
{
    #[Rule('required|min:3')]
    public ?string $name;

    #[Rule('required|email')]
    public ?string $ins_email;

    #[Rule('required')]
    public ?string $ins_phone;

    #[Rule('required')]
    public ?string $type;

    #[Rule('required')]
    public ?string $address_1;

    public ?string $address_2;

    public ?string $address_3;

    #[Rule('required')]
    public ?string $city;

    #[Rule('required')]
    public ?string $postcode;

    #[Rule('required')]
    public ?string $state;

    #[Rule('required')]
    public ?string $country;

    #[Rule('required|decimal:2,7')]
    public ?string $latitude;

    #[Rule('required|decimal:2,7')]
    public ?string $longitude;

    public function save()
    {
        Institution::create($this->validate());
    }
}
