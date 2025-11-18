<?php

namespace Database\Seeders;

use App\Models\CategoryForMessage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoryForMessageSeed extends Seeder
{
    public function run(): void
    {
        $cats = [
            [ 'url' => 'sport', 'title' => 'Спорт' ],
            [ 'url' => 'lara', 'title' => 'Laravel' ],
            [ 'url' => 'webdev', 'title' => 'Веб-разработка' ]
        ];

        foreach($cats as $cat){
            $category = new CategoryForMessage();
            $category->fill($cat);
            $category->save();
        }

    }
}
