<?php

namespace Database\Seeders;

use App\Models\User;

use App\Models\ProjectCategory;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        User::create([
            'name' => 'Wisnu Hidayat',
            'email' => 'nextwznu@gmail.com',
            'password' => bcrypt('1122334455'),
            'remember_token' => Str::random(60),
        ]);
        ProjectCategory::create([
            'name' => 'Laravel'
        ]);
        ProjectCategory::create([
            'name' => 'Tailwind CSS'
        ]);
        ProjectCategory::create([
            'name' => 'JQuery'
        ]);
        ProjectCategory::create([
            'name' => 'Codeigniter 4'
        ]);
    }
}
