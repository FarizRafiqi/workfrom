<?php

namespace Database\Seeders;

use App\Models\Room;
use App\Models\RoomImage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoomImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $rooms = Room::all();
        foreach ($rooms as $room) {
            $images = [
                'https://source.unsplash.com/random/640x480?room,office&sig=' . rand(1, 100),
                'https://source.unsplash.com/random/640x480?room,office&sig=' . rand(101, 200),
                'https://source.unsplash.com/random/640x480?room,office&sig=' . rand(201, 300),
            ];

            foreach ($images as $image) {
                RoomImage::create([
                    'room_id' => $room->id,
                    'image' => $image,
                ]);
            }
        }

//        RoomImage::factory()->count(20)->create();
    }
}
