<?php

namespace Database\Seeders;

use App\Models\Course;
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
        $c1 = Course::findOrFail(2);
        $images = [
            ['url' => 'images/product-1_1.jpg'],
            ['url' => 'images/product-2_1.jpg'],
            /* ['url' => 'images/product-3.jpg'], */
        ];

        foreach ($images as $info) {
            $image = new Image();
            $image->fill($info);
            $c1->images()->save($image);
        }
    }
}
