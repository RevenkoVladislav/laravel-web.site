<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImagesController extends Controller
{
    public function create(string $item, int $id)
    {
        $model = config('imageables')[$item]::findOrFail($id);
        return $model;
    }
}
