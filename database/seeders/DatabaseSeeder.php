<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Gallery;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        
        User::factory()->create([
            'name' => 'Usuario',
            'email'=> 'usuario@gmail.com',
        ]);

        User::factory()->create([
            'name' => 'User',
            'email'=> 'user@gmail.com',
        ]);


        Gallery::factory(5)->create([
            'image' => 'uploads/niña.jpg',            
            'title' => 'flowers',
            'user_id' => '1',
        ]);

        Gallery::factory(5)->create([
        
            'image' => 'uploads/niña.jpg',           
            'title' => 'flowers',
            'user_id' => '2',
        ]);

    }
}
