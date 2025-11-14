<x-layout.main title="store" main_link="magazine.index" main_page="STORE"/>
<h1 class="text-center">Цены в магазинах</h1>
<div class="col-12">
    <div class="p-2 w-25">
        <form action="{{ route('magazine.store') }}" method="POST">
            @csrf
            <x-forms.select name="shop_id" :array-options="$shops" label="Shops" default="Выбери магазин"/>
            <x-forms.select name="product_id" :array-options="$products" label="Products" default="Выбери товар"/>
            <x-forms.input name="price" label="Price"/>
            <input type="submit" name="sub" value="submit" class="btn btn-success">
        </form>
    </div>
    <div class="card">

        <div class="card-body table-responsive p-0">
            <table class="table table-hover text-nowrap">
                <thead>
                <tr>
                    <th class="text-center">Магазин</th>
                    <th class="text-center">Название товара</th>
                    <th class="text-center">Цена в магазине</th>
                </tr>
                </thead>
                <tbody>
                @foreach($productShops as $item)
                <tr>
                    <td class="text-center"><p class="text-info">{{ $item->shop->shop_name }}</p></td>
                    <td class="text-center"><p class="text-info">{{ $item->product->product_name }}</p></td>
                    <td class="text-center"><p class="text-info">{{ $item->price }}</p></td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
