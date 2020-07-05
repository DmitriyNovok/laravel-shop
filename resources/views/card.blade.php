<div class="col-sm-6 col-md-4">
    <div class="thumbnail">
        <div class="labels"></div>
        <img src="http://internet-shop.tmweb.ru/storage/products/iphone_x.jpg" alt="iPhone X 64GB">
        <div class="caption">
            <h3>iPhone X 64GB</h3>
            <p>71990 ₽</p>
            <p>
            @isset($category->name)
            <form action="{{ route('basket') }}" method="POST">
                <button type="submit" class="btn btn-primary" role="button">Add to cart</button>
                <a href="http://internet-shop.tmweb.ru/mobiles/iphone_x_64"
                   class="btn btn-default"
                   role="button">More about</a>
                <input type="hidden" name="_token" value="oiZDDgx4xacrb6W6XFcf74ukeiPmkytVyCyACy6P">
            </form>
            @endisset
            </p>
        </div>
    </div>
</div>