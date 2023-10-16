<?php

namespace App\Livewire;

use App\Models\Building;
use Livewire\Attributes\Url;
use Livewire\Component;

class ShowBuildings extends Component
{
    #[Url]
    public $search = '';

    public function render()
    {
        $buildings = Building::where('name', 'like', '%' . $this->search . '%')
                            ->orWhere('address', 'like', '%' . $this->search . '%')
                            ->paginate(4);

        return view('livewire.show-buildings', compact('buildings'));
    }

    public function filter($keyword)
    {
        $buildings = null;
        return view('livewire.show-buildings', compact('buildings'));
    }
}
