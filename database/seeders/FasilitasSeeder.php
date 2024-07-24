<?php

namespace Database\Seeders;

use App\Models\Fasilitas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FasilitasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Fasilitas::create([
            'title1' => 'Title 1 Example',
                'deskripsi1' => 'Deskripsi 1 Example',
                'title2' => 'Title 2 Example',
                'deskripsi2' => 'Deskripsi 2 Example',
                'title3' => 'Title 3 Example',
                'deskripsi3' => 'Deskripsi 3 Example',
                'title4' => 'Title 4 Example',
                'deskripsi4' => 'Deskripsi 4 Example',
                'title5' => 'Title 5 Example',
                'deskripsi5' => 'Deskripsi 5 Example',
                'title6' => 'Title 6 Example',
                'deskripsi6' => 'Deskripsi 6 Example',
                'foto' => 'path/to/example.jpg', // Path example for the foto
                'created_at' => now(),
                'updated_at' => now(),
        ]);
    }
}
