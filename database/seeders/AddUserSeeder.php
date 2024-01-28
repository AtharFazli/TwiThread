<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AddUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            "name"                  => "admin",
            "username"              => "admin",
            "email"                 => "admin@gmail.com",
            "profile_picture"       => "",
            "level"                 => "Admin",
            "password"              => bcrypt('password')
        ]);

        User::create([
            "name"                  => "Kobo Waker",
            "username"              => "Kobo Waker",
            "email"                 => "kobo@gmail.com",
            "profile_picture"       => "",
            "level"                 => "User",
            "password"              => bcrypt('password')
        ]);

        User::create([
            "name"                  => "Firza Halim",
            "username"              => "Firza Halim",
            "email"                 => "firza@gmail.com",
            "profile_picture"       => "",
            "level"                 => "Admin",
            "password"              => bcrypt('password')
        ]);

        User::create([
            "name"                  => "Khailul Akmal",
            "username"              => "Khailul Akmal",
            "email"                 => "akmal@gmail.com",
            "profile_picture"       => "",
            "level"                 => "Admin",
            "password"              => bcrypt('password')
        ]);

        User::create([
            "name"                  => "Advenisn",
            "username"              => "Advenisn",
            "email"                 => "advenisn@gmail.com",
            "profile_picture"       => "",
            "level"                 => "User",
            "password"              => bcrypt('password')
        ]);

        User::create([
            "name"                  => "M. Pradilyas Dimas Arya Ajimas",
            "username"              => "M. Pradilyas Dimas Arya Ajimas",
            "email"                 => "dippy@gmail.com",
            "profile_picture"       => "",
            "level"                 => "User",
            "password"              => bcrypt('password')
        ]);
    }
}
