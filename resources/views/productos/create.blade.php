<!-- resources/views/productos/create.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Crear Producto</h1>

    <form action="{{ route('productos.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre:</label>
            <input type="text" name="nombre" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="precio" class="form-label">Precio:</label>
            <input type="number" name="precio" step="0.01" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="stock" class="form-label">Stock:</label>
            <input type="number" name="stock" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-success">Guardar</button>
        <a href="{{ route('productos.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
