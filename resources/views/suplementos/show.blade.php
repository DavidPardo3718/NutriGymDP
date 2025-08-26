<!-- resources/views/productos/show.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalles del Producto</h1>

    <div class="card">
        <div class="card-body">
            <p><strong>Nombre:</strong> {{ $producto->nombre }}</p>
            <p><strong>Precio:</strong> ${{ $producto->precio }}</p>
            <p><strong>Stock:</strong> {{ $producto->stock }}</p>
        </div>
    </div>

    <a href="{{ route('productos.index') }}" class="btn btn-secondary mt-3">Volver</a>
</div>
@endsection
