<?php

namespace App\Livewire;

use App\Models\Room;
use Livewire\Attributes\Url;
use Livewire\Component;

class ShowRooms extends Component
{
    #[Url]
    public $search = '';

    public function render()
    {
        $rooms = Room::where('name', 'like', '%' . $this->search . '%')
                            ->paginate(4);

        return view('livewire.show-rooms', compact('rooms'));
    }

    public function filter($keyword)
    {
        $rooms = null;
        return view('livewire.show-rooms', compact('rooms'));
    }
}
