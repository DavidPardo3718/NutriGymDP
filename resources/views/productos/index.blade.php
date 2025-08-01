<!-- resources/views/productos/index.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-center mb-4">Lista de Productos</h1>

    <div class="d-flex justify-content-end mb-3">
    <a href="{{ route('productos.create') }}" class="btn btn-primary mb-3">Agregar Producto</a>
</div>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Stock</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($productos as $producto)
            <tr>
                <td>{{ $producto->id }}</td>
                <td>{{ $producto->nombre }}</td>
                <td>${{ number_format($producto->precio, 2)}}</td>
                <td>{{ $producto->stock }}</td>
                <td>
                    <a href="{{ route('productos.show', $producto->id) }}" class="btn btn-info btn-sm">Ver</a>
                    <a href="{{ route('productos.edit', $producto->id) }}" class="btn btn-warning btn-sm">Editar</a>
                    <form action="{{ route('productos.destroy', $producto->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button onclick="return confirm('¿Estás seguro?')" class="btn btn-danger btn-sm">Eliminar</button>
                    </form>
                </td>
</tr>
@empty
<tr>
    <td colspan="5" class="text-center">No hay productos registrados.</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
