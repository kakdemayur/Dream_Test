<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserstableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $imagePath = "{{ asset('assests\image\Kakde Mayur.jpg') }}";

        User::create([
            'name' => 'kakde',
            'role' => 'Admin',
            'email' => 'kakde5@example.com',
            'password' => bcrypt('kakde5'),
            'image' => $imagePath,
        ]);

         User::create([
            'name' => 'Mayur kakde',
            'role' => 'Admin',
            'email' => 'akikhs00@gmail.com',
            'password' => bcrypt('akik87'),
            'image' => $imagePath,
        ]);
    }
}
