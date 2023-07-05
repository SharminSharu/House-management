<?php

namespace Database\Seeders;

use App\Models\Room;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoomsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         // Room::factory(10)->create();
         Room::create([
            'name' => 'A',
            
            'description' => '2 bedroom, 1 balcony, 1 kitchen, 1 washroom, dining & drawing',
            // 'image' => "{{asset('frontend/images/flat/3.jpg')}}",
            'image' => "https://media.gettyimages.com/id/163520684/photo/living-room-with-tv.jpg?s=612x612&w=gi&k=20&c=Oh1I1TfTz1ygk3FcaKsjAEyBc6nS2kfiXcBUxua-glk=",
            'price' => 9000,
            'size'=>'800'
        ]);
        Room::create([
            'name' => 'B',
          
            'description' => '2 bedroom, 1 balcony, 1 kitchen, 2 washroom, dining & drawing',
            'image'=>'https://images.pexels.com/photos/439227/pexels-photo-439227.jpeg?cs=srgb&dl=pexels-medhat-ayad-439227.jpg&fm=jpg',
            'price' => 12000,
            'size'=>'1200'
        ]);
        Room::create([
            'name' => 'C',
            
            'description' => '3 bedroom, 2 balcony, 1 kitchen, 2 washroom, dining & drawing',
            'image'=>'https://static9.depositphotos.com/1009647/1232/i/450/depositphotos_12322746-stock-photo-studio-apartment.jpg',
            'price' => 15000,
            'size'=>'1380'
        ]);
        Room::create([
            'name' => 'D',
          
            'description' => '3 bedroom, 3 balcony, 1 kitchen, 3 washroom, dining & drawing',
            'image'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSfC8ZHR3-5-fTLevI-fl-Z_-0IBoLxKYew9NWcU94O-QcqbG2XQuccnHXhHEjHEDu_f9Q&usqp=CAU',
            'price' => 18000,
            'size'=>'1400'
        ]);
    }
}
