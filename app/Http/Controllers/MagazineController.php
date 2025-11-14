<?php

namespace App\Http\Controllers;

use App\Http\Requests\Magazine\MagazineRequest;
use App\Models\Product;
use App\Models\ProductShop;
use App\Models\Shop;
use Illuminate\Http\Request;

class MagazineController extends Controller
{
    public function index()
    {
        $productShops = ProductShop::with('product', 'shop')->get();
        $shops = Shop::all();
        $products = Product::all();
        return view('magazine.index', compact('shops', 'products', 'productShops'));
    }

    public function store(MagazineRequest $request)
    {
        $data = $request->validated();
        ProductShop::create($data);
        return redirect()->back()->with('success', 'Price in shop added!');
    }

    public function edit(ProductShop $productShop)
    {
        $shops = Shop::all();
        $products = Product::all();
        return view('magazine.edit', compact('productShop', 'shops', 'products'));
    }

    public function update(MagazineRequest $request, ProductShop $productShop)
    {
        $data = $request->validated();
        $productShop->update($data);
        return redirect()->route('magazine.index')->with('success', 'Price in shop updated!');
    }

    public function destroy(ProductShop $productShop)
    {
        $productShop->delete();
        return redirect()->back();
    }
}
