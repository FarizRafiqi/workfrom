<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Building extends Model
{
    use HasFactory;

    protected $with = ['images', 'amenities', 'nearbyFacilities'];

    public function images()
    {
        return $this->hasMany(BuildingImage::class);
    }

    public function amenities()
    {
        return $this->hasManyThrough(RoomAmenity::class, Room::class);
    }

    public function nearbyFacilities()
    {
        return $this->hasMany(NearbyFacility::class);
    }
}
