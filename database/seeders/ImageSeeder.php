<?php

namespace Database\Seeders;
ini_set('memory_limit', '20480M');
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Image;
use App\Models\User;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        Image::factory()
        ->count(1000)
        ->create()
        ->each(function ($image) {
            $image->user()->save(User::factory()->make());
        })
        ;
    }
}
