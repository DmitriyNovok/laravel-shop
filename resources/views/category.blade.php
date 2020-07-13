@extends('master')

@section('title', 'Категория ' . $category->name)

@section('content')
    <div class="starter-template">
        <h1>
            {{$category->name}} ({{$category->getProducts->count()}})
        </h1>
        <p>
            {{$category->description}}
        </p>
        <div class="row">
            @foreach($category->getProducts as $product)
                @include('card', ['product' => $product])
            @endforeach
        </div>
    </div>
@endsection