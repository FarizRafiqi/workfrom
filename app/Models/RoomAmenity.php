<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;

class RoomAmenity extends Pivot
{
    use HasFactory;

    public function room()
    {
        return $this->belongsTo(Room::class);
    }

    public function amenity()
    {
        return $this->belongsTo(Amenity::class);
    }
}
