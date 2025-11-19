<?php

namespace Database\Seeders;

use App\Models\Image;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ImagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $images = [
            ['url' => 'images/product-1.jpg'],
            ['url' => 'images/product-2.jpg'],
            ['url' => 'images/product-3.jpg'],
        ];

        foreach ($images as $info) {
            $image = new Image();
            $image->fill($info);
            $image->save();
        }
    }
}
