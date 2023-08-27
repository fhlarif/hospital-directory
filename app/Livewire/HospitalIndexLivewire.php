<?php

declare(strict_types=1);

namespace App\Livewire;

use Livewire\Component;
use App\Models\Institution;
use Livewire\Attributes\Url;
use Livewire\WithPagination;
use Livewire\Attributes\Computed;
use Illuminate\Contracts\View\View;
use Illuminate\Pagination\LengthAwarePaginator;

class HospitalIndexLivewire extends Component
{
    use WithPagination;

    #[Url(keep: true, history: true, as: 'q')]
    public ?string $search = '';

    #[Url(keep: true, history: true, as: 't')]
    public string $type = 'name';

    public function render(): View
    {
        return view('livewire.hospital-index-livewire');
    }

    #[Computed]
    public function institutions(): LengthAwarePaginator
    {
        $query = Institution::orderBy('id', 'DESC');
        if ($this->search !== '') {
            $query = Institution::where($this->type, 'like', '%' . strtolower($this->search) . '%')->orderBy('id', 'DESC');
        }

        return $query->paginate(5);
    }

    public function handleSearch(): void
    {
        $this->resetPage();
    }

    public function handleReset(): void
    {
        $this->resetPage();
        $this->reset();
    }
}
