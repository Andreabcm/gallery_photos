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
            'name' => 'Andrea',
            'email'=> 'andrea@gmail.com',
        ]);

        User::factory()->create([
            'name' => 'David',
            'email'=> 'david@gmail.com',
        ]);


        Gallery::factory()->create([
        
            'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTB9aErbX4vxT8UVQPF94YoVrFDKb2zeRZXqQ&usqp=CAU',            
            'title' => 'Muebles',
            'user_id' => '1',
        ]);

        Gallery::factory()->create([
        
            'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTB9aErbX4vxT8UVQPF94YoVrFDKb2zeRZXqQ&usqp=CAU',            
            'title' => 'Muebles',
            'user_id' => '2',
        ]);

        Gallery::factory()->create([
        
            'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTB9aErbX4vxT8UVQPF94YoVrFDKb2zeRZXqQ&usqp=CAU',            
            'title' => 'Muebles',
            'user_id' => '2',
        ]);

    }
}
