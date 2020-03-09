@extends('layouts.template')

@section('title', 'Administrador de productos')

@section('main')
    <h1>Panel de administración de productos</h1>

    <a href="admin" class="btn btn-outline-secondary m-3">Volver al panel</a>

    <table class="table table-stripped table-bordered table-hover">
        <thead class="thead-dark">
            <tr>
                <th>id</th>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Stock</th>
                <th>Descripción</th>
                <th>Imagen</th>
                <th>Marca</th>
                <th>Categoría</th>
                <th colspan="2">
                <a href="addProduct" class="btn btn-light">
                    Agregar nuevo producto
                </a>
                </th>
            </tr>
        </thead>
    <tbody>
        
        @foreach($Products as $Product)

            <tr>
                <td>{{ $Product->id }}</td>
                <td>{{ $Product->name }}</td>
                <td>${{ $Product->price }}</td>
                <td>{{ $Product->stock }}</td>
                <td>{{ $Product->description }}</td>
                <td><img class="img-fluid img-thumbnail main-image" src="product_img/{{$Product->image}}" alt=""></td>
                <td>{{ $Product->mark->name }}</td>
                <td>{{ $Product->category->name }}</td>
                <td><a href="editProduct/{{ $Product->id }}" class="btn btn-outline-secondary">Modificar</a></td>
                <td><a href="deleteProduct/{{ $Product->id }}" class="btn btn-outline-secondary">Eliminar</a></td>
            </tr>
        @endforeach



    </tbody>
    </table>

    <a href="admin" class="btn btn-outline-secondary m-3">Volver al panel</a>
@endsection