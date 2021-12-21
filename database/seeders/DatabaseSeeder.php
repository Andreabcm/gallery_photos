<?php

namespace Database\Seeders;

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
        
        Gallery::factory()->create([
        
            'Image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTB9aErbX4vxT8UVQPF94YoVrFDKb2zeRZXqQ&usqp=CAU',            
            'Title' => 'Muebles',
    
        ]);

    }
}
