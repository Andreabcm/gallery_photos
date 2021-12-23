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
            'title' => 'flowers',
            'user_id' => '1',
        ]);

        Gallery::factory()->create([
            'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTB9aErbX4vxT8UVQPF94YoVrFDKb2zeRZXqQ&usqp=CAU',             
            'title' => 'flowers',
            'user_id' => '1',
        ]);

        Gallery::factory()->create([
            'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTB9aErbX4vxT8UVQPF94YoVrFDKb2zeRZXqQ&usqp=CAU',   
            'title' => 'flowers',
            'user_id' => '1',
        ]);

        Gallery::factory()->create([
        
            'image' => 'https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.vivafutbol.es%2Fmytvshows%2Ffrases-bonitas-10937&psig=AOvVaw2m-Z7VWx65zXXs_BAr3Uw7&ust=1640347470857000&source=images&cd=vfe&ved=2ahUKEwjYy97T8Pn0AhVvAmMBHUc6ANgQjRx6BAgAEAk',            
            'title' => 'flowers',
            'user_id' => '2',
        ]);

        Gallery::factory()->create([
        
            'image' => 'https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.consejosgratis.es%2Ffrases-cortas-y-bonitas-para-sms%2F&psig=AOvVaw3jC5A2gcz_wIwjxn86OKIY&ust=1640347445569000&source=images&cd=vfe&ved=0CAsQjRxqFwoTCIijsMfw-fQCFQAAAAAdAAAAABAL',            
            'title' => 'flowers',
            'user_id' => '2',
        ]);

        Gallery::factory()->create([
        
            'image' => 'https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.consejosgratis.es%2Ffrases-cortas-y-bonitas-para-sms%2F&psig=AOvVaw3jC5A2gcz_wIwjxn86OKIY&ust=1640347445569000&source=images&cd=vfe&ved=0CAsQjRxqFwoTCIijsMfw-fQCFQAAAAAdAAAAABAL',            
            'title' => 'flowers',
            'user_id' => '2',
        ]);

    }
}
