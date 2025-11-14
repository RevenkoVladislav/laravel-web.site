<x-layout.main title="store" main_link="magazine.index" main_page="STORE"/>

<div class="col-12">
    <div class="p-2 w-25">
        <h2>Добавить запись</h2>
        <form action="{{ route('magazine.store') }}" method="POST">
            @csrf
            <x-forms.select name="shop_id" :array-options="$shops" label="Shops" default="Выбери магазин"/>
            <x-forms.select name="product_id" :array-options="$products" label="Products" default="Выбери товар"/>
            <x-forms.input name="price" label="Price"/>
            <input type="submit" name="sub" value="submit" class="btn btn-success">
        </form>
    </div>
    <h1 class="text-center">Цены в магазинах</h1>
    <div class="card">
        <div class="card-body table-responsive p-0">
            <table class="table table-hover text-nowrap">
                <thead>
                <tr>
                    <th class="text-center">Магазин</th>
                    <th class="text-center">Название товара</th>
                    <th class="text-center">Цена в магазине</th>
                    <th class="text-center">Редактировать</th>
                    <th class="text-center">Удалить</th>
                </tr>
                </thead>
                <tbody>
                @foreach($productShops as $item)
                <tr>
                    <td class="text-center"><p class="text-info">{{ $item->shop->shop_name }}</p></td>
                    <td class="text-center"><p class="text-info">{{ $item->product->product_name }}</p></td>
                    <td class="text-center"><p class="text-info">{{ $item->price }}</p></td>
                    <td class="text-center"><a href="{{ route('magazine.edit', $item->id) }}">Редактировать</a></td>
                    <td class="text-center">
                        <form action="{{ route('magazine.destroy', $item->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Удалить</button>
                        </form>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
