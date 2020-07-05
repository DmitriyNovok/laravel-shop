<form method="GET" action="/products">
    <div class="filters row">
        <div class="col-sm-6 col-md-3">
            <label for="price_from">Price from
                <input type="text" name="price_from" id="price_from" size="6" value="">
            </label>
            <label for="price_to">to
                <input type="text" name="price_to" id="price_to" size="6"  value="">
            </label>
        </div>
        <div class="col-sm-2 col-md-2">
            <label for="hit"><input type="checkbox" name="hit" id="hit">Hit</label>
        </div>
        <div class="col-sm-2 col-md-2">
            <label for="new"><input type="checkbox" name="new" id="new"> New</label>
        </div>
        <div class="col-sm-2 col-md-2">
            <label for="recommend"><input type="checkbox" name="recommend" id="recommend"> Recommend</label>
        </div>
        <div class="col-sm-6 col-md-3">
            <button type="submit" class="btn btn-primary">Filter</button>
            <a href="http://internet-shop.tmweb.ru" class="btn btn-warning">Reset</a>
        </div>
    </div>
</form>