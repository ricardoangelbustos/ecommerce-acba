@extends('layouts.template')

@section('title', 'Tu carrito')

@section('css')
    {{ '/css/cart.css' }}
@endsection


@section('main')
<section class="row">
    
    <section class=" products-list col-12 col-md-7">
        
        @foreach ($Products as $Product)
        
        <article class="row product-added">
            <img class="col-3 img-fluid img-thumbnail" src="product_img/{{$Product->image}}" alt="">
            <div class="col-7 product-added-info">
                <h4>{{$Product->name}}</h4>
                <form method="post" action="/modifyProductQuantity">
                    @csrf
                    <input type="hidden" name="product_id" value="{{$Product->id}}"></input>
                    Cantidad: <input type="number" name="quantity" min="1" max="50" value="@if(old('product_id') == $Product->id){{old('product_id')}}@else{{$Product->pivot->quantity}}@endif">
                    <input type="submit" value="modificar">
                </form>
                <span class="price">${{$Product->price}}</span>
            </div>
            <div class="remove-btn col-2">
                <form method="post" action="/removeProduct">
                    @csrf
                    <input type="hidden" name="product_id" value="{{$Product->id}}"></input>
                    <button type="submit" class="btn btn-danger">Quitar</button><br>
                </form>
            </div>
        </article>
        
        @endforeach
        
    </section>
    
    <section class="proceder col-12 col-md-5">
        <form action="/checkout" method="POST">
            @csrf
            <span class="total-price-label">Total: </span> <span class="total-price">${{$totalPrice}} </span>
            <br>
            <input type="hidden" name="checkout" value="{{$totalPrice}}"></input>
            <button type="submit" class="btn btn-success">Proceder a pagar</button>

            @if ($errors->any())
            <div class="alert alert-danger text-left"> No hay stock suficiente de:
                <ul class="text-left">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
        </form>
    </section>

</section>
@endsection