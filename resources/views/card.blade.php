<div class="col-sm-6 col-md-4">
    <div class="thumbnail">
        <div class="labels"></div>
        <img src="http://internet-shop.tmweb.ru/storage/products/iphone_x.jpg" alt="{{$product->name}}">
        <div class="caption">
            <h3>{{$product->name}}</h3>
            <p>{{$product->price}} ₽</p>

            <form action="{{ route('basket-add', [$product]) }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-primary" role="button">Add to cart</button>
                <a href="{{route('product', [$product->category->code, $product->code])}}" class="btn btn-default" role="button">More about</a>
            </form>
        </div>
    </div>
</div>