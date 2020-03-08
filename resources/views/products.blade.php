@extends('layouts.template')

@section('title', 'Productos')

@section('css')
    {{ '/css/products.css' }}
@endsection


@section('main')

<h2>PRODUCTOS</h2>

      <section class="row products-list">

        @foreach ($Products as $Product)
            <div class="product-container col-12 col-md-4 col-lg-3">
                <a href="products/{{$Product->id}}" class="product">
                    <img class="img-fluid img-thumbnail" src="/product_img/{{$Product->image}}" alt="">
                    <h3 class="product-name">{{$Product->name}}</h3>
                    <span class="product-price">${{$Product->price}}</span>
                </a>
            </div>
        @endforeach

      </section>

@endsection