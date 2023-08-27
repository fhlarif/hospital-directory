<?php

namespace App\Livewire;

use Livewire\Component;
use App\Livewire\Traits\InstitutionTrait;

class HospitalCreateLivewire extends Component
{
    use InstitutionTrait;

    public function render()
    {
        return view('livewire.hospital-create-livewire');
    }

    public function handleCreate()
    {
        $this->form->save();
        session()->flash('success', 'Institution created!');
        $this->reset();
    }
}
