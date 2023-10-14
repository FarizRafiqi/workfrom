<?php

namespace App\Livewire;

use App\Models\Room;
use App\Models\UseCase;
use Livewire\Attributes\Url;
use Livewire\Component;

class ShowRooms extends Component
{
    #[Url]
    public $search = '';
    public $capacity;

    public int $minCap = 20;
    public int $maxCap = 500;

    public function render()
    {
        $rooms = Room::with('useCases')->where('name', 'like', '%' . $this->search . '%')
                            ->paginate(4);

        $useCases = UseCase::all();
        return view('livewire.show-rooms', compact('rooms', 'useCases'));
    }

    public function updated($property, $value)
    {

    }

    public function filter($keyword)
    {
        $rooms = null;
        return view('livewire.show-rooms', compact('rooms'));
    }
}
