<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;

class RoomUseCase extends Pivot
{
    use HasFactory;

    public function room()
    {
        return $this->belongsTo(Room::class);
    }

    public function useCase()
    {
        return $this->belongsTo(UseCase::class);
    }
}
