<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    public function building()
    {
        return $this->belongsTo(Building::class);
    }

    public function useCases()
    {
        // buat kondisi agar use case yang diambil melalui tabel RoomUseCase diurutkan berdasarkan parent_id yang ada di tabel UseCase
        // jika parent_id null maka muncul pertama, jika tidak maka muncul setelah parent_id null
        return $this->belongsToMany(UseCase::class)
            ->using(RoomUseCase::class);
    }

    public function images()
    {
        return $this->hasMany(RoomImage::class);
    }
}
