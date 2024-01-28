<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        
        // \App\Models\Pokemon::create([
            //     "name" => "Pikachu"
            // ]);
            
            // \App\Models\Laporan::factory()->create([
            //     'nis'           => '11804',
            //     'nama_pelapor'  => 'Athar',
            //     'kelas'         => '12',
            //     'isi_laporan'   => 'tolong aku',
            // ]);

            // \App\Models\User::create([
            //     'name'       => 'admin',
            //     'email'          => 'admin@gmail.com',
            //     'password'       => 'admin12345'
            // ]);

            // \App\Models\Laporan::factory(10)->create();

            $this->call([
                AddUserSeeder::class
            ]);
            
    }
}
