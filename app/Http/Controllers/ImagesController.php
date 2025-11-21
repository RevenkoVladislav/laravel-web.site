<?php

namespace App\Http\Controllers;

use App\Http\Requests\Images\StoreRequest;
use App\Models\Image;
use Illuminate\Http\Request;

class ImagesController extends Controller
{
    public function create(string $item, int $id)
    {
        $model = config('imageables')[$item]::findOrFail($id);
        return view('images.upload', compact('model', 'item'));
    }

    public function store(StoreRequest $request, string $item, int $id)
    {
        $uploads = $request->validated()['image'];
        $model = config('imageables')[$item]::findOrFail($id);

        foreach ($uploads as $upload) {
            $url = $upload->store('images', 'public');
            $image = new Image;
            $image->fill(['url' => $url]);
            $model->images()->save($image);
        }
    }
}
