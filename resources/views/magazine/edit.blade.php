<x-layout.main title="edit" main_link="magazine.index" main_page="STORE"/>
<div class="p-2 w-25">
    <form action="{{ route('magazine.update', $productShop) }}" method="POST">
        @csrf
        <x-forms.select name="shop_id" :array-options="$shops" :value="$productShop->shop->id" label="Shops" default="Выбери магазин"/>
        <x-forms.select name="product_id" :array-options="$products" :value="$productShop->product->id" label="Products" default="Выбери товар"/>
        <x-forms.input name="price" label="Price" :value="$productShop->price"/>
        <input type="submit" name="sub" value="submit" class="btn btn-success">
    </form>
</div>
