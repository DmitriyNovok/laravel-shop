@foreach(config('shop.menu.list.header') as $item_menu)
<li class="active">
    <a href="{{ $item_menu['href'] }}">{{ $item_menu['title'] }} </a>
</li>
@endforeach