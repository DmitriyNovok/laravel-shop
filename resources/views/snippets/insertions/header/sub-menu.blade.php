@foreach(config('shop.menu.list.header') as $item_menu)
<li>
    <a href="{{ $item_menu['href'] }}">{{ $item_menu['title'] }}</a>
</li>
@endforeach