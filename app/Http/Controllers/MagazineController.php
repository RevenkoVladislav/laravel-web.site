<?php

namespace App\Http\Controllers;

use App\Http\Requests\Magazine\MagazineRequest;
use App\Models\Product;
use App\Models\Shop;
use Illuminate\Http\Request;

class MagazineController extends Controller
{
    public function index()
    {
        $shops = Shop::all();
        $products = Product::all();
        return view('magazine.index', compact('shops', 'products'));
    }

    public function store(MagazineRequest $request)
    {
        dd($request->validated());
    }
}
