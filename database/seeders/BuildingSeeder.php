<?php

namespace Database\Seeders;

use App\Models\Building;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BuildingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Building::insert([
            [
                'name' => 'Clapham',
                'lat' => '3.599892429777907',
                'lng' => '98.67891777330354',
                'address' => 'Komp. Ruko Centre Point Medan Jalan Timor Blok G No. III/IV 2nd Floor, Gang Buntu, Medan Timur, Medan City, North Sumatra 20231',
                'created_at' => now()
            ],
            [
                'name' => 'The 101',
                'lat' => '-6.228354449141431',
                'lng' => '106.82719878002041',
                'address' => 'Kawasan, Jl. Mega Kuningan Barat Jl. DR. Ide Anak Agung Gde Agung No.1, RT.5/RW.2, Kuningan, Kuningan Tim., Kecamatan Setiabudi, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12950',
                'created_at' => now()
            ],
            [
                'name' => 'Yafurni',
                'lat' => '3.5834123256406065',
                'lng' => '98.66152348720092',
                'address' => 'Jl. Iskandar Muda No.7, Petisah Hulu, Kec. Medan Baru, Kota Medan, Sumatera Utara 20153',
                'created_at' => now()
            ],
            [
                'name' => 'Kalingga',
                'lat' => '3.585278221817658',
                'lng' => '98.6707715818098',
                'address' => 'Jl. Kalingga No.14, Petisah Tengah, Kec. Medan Petisah, Kota Medan, Sumatera Utara 20112',
                'created_at' => now()
            ],
            [
                'name' => 'Spasi',
                'lat' => '3.5756090541407732',
                'lng' => '98.68012792472538',
                'address' => 'Komplek Multatuli Indah, Jl. Multatuli No.30-31, Hamdan, Kec. Medan Maimun, 20212',
                'created_at' => now()
            ]
        ]);

        Building::factory()->count(15)->create();
    }
}
