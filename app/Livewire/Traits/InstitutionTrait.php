<?php

namespace App\Livewire\Traits;

use App\Models\Institution;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Cache;
use App\Livewire\Forms\InstitutionForm;

trait InstitutionTrait
{
    public bool $show = false;

    public InstitutionForm $form;

    public function states(): Collection
    {
        $states = Cache::get('states_result');
        if (!isset($states)) {
            $states = Institution::distinct('state')->pluck('state');
            Cache::put('states_result', $states, now()->addWeeks(2));
        }

        return $states;
    }

    public function handleShow(): void
    {
        $this->show = !$this->show;
    }
}
