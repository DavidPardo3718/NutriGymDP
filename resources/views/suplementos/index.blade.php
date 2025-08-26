@extends('layouts.app')

@section('title', 'Suplementos - NutriGym')

@section('content')
<div class="container my-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h1 class="fw-bold">
                <i class="fas fa-pills text-primary me-2"></i>
                Gestión de Suplementos
            </h1>
            <p class="text-muted">Administra el catálogo de suplementos alimenticios</p>
        </div>
        <div>
            <a href="{{ route('suplementos.create') }}" class="btn btn-primary">
                <i class="fas fa-plus me-2"></i>Nuevo Suplemento
            </a>
            <a href="{{ url('/') }}" class="btn btn-outline-secondary ms-2">
                <i class="fas fa-home me-2"></i>Volver al Inicio
            </a>
        </div>
    </div>

    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <i class="fas fa-check-circle me-2"></i>
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    <div class="card shadow-sm">
        <div class="card-body">
            @if($suplementos->count() > 0)
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead class="table-dark">
                            <tr>
                                <th>Imagen</th>
                                <th>Nombre</th>
                                <th>Marca</th>
                                <th>Categoría</th>
                                <th>Precio</th>
                                <th>Stock</th>
                                <th>Estado</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($suplementos as $suplemento)
                                <tr>
                                    <td>
                                        @if($suplemento->imagen)
                                            <img src="{{ Storage::url($suplemento->imagen) }}"
                                                 class="rounded" width="50" height="50"
                                                 style="object-fit: cover;" alt="{{ $suplemento->nombre }}">
                                        @else
                                            <div class="bg-light rounded d-flex align-items-center justify-content-center"
                                                 style="width: 50px; height: 50px;">
                                                <i class="fas fa-pills text-muted"></i>
                                            </div>
                                        @endif
                                    </td>
                                    <td>
                                        <strong>{{ $suplemento->nombre }}</strong>
                                        @if($suplemento->presentacion)
                                            <br><small class="text-muted">{{ $suplemento->presentacion }}</small>
                                        @endif
                                    </td>
                                    <td>{{ $suplemento->marca ?? 'N/A' }}</td>
                                    <td>
                                        @if($suplemento->categoria)
                                            <span class="badge bg-secondary">{{ $suplemento->categoria }}</span>
                                        @else
                                            <span class="text-muted">N/A</span>
                                        @endif
                                    </td>
                                    <td class="fw-bold text-success">${{ number_format($suplemento->precio, 2) }}</td>
                                    <td>
                                        @if($suplemento->stock > 10)
                                            <span class="badge bg-success">{{ $suplemento->stock }}</span>
                                        @elseif($suplemento->stock > 0)
                                            <span class="badge bg-warning">{{ $suplemento->stock }}</span>
                                        @else
                                            <span class="badge bg-danger">Sin stock</span>
                                        @endif
                                    </td>
                                    <td>
                                        @if($suplemento->activo)
                                            <span class="badge bg-success">Activo</span>
                                        @else
                                            <span class="badge bg-danger">Inactivo</span>
                                        @endif
                                    </td>
                                    <td>
                                        <div class="btn-group btn-group-sm">
                                            <a href="{{ route('suplementos.show', $suplemento) }}"
                                            class="btn btn-outline-info" title="Ver">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                            <a href="{{ route('suplementos.edit', $suplemento) }}"
                                            class="btn btn-outline-primary" title="Editar">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <form action="{{ route('suplementos.destroy', $suplemento) }}"
                                                method="POST" class="d-inline"
                                                onsubmit="return confirm('¿Estás seguro de eliminar este suplemento?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-outline-danger" title="Eliminar">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="d-flex justify-content-center mt-4">
                    {{ $suplementos->links() }}
                </div>
            @else
                <div class="text-center py-5">
                    <i class="fas fa-pills fa-3x text-muted mb-3"></i>
                    <h5 class="text-muted">No hay suplementos registrados</h5>
                    <p class="text-muted">Comienza agregando tu primer suplemento al catálogo.</p>
                    <a href="{{ route('suplementos.create') }}" class="btn btn-primary">
                        <i class="fas fa-plus me-2"></i>Crear Primer Suplemento
                    </a>
                </div>
            @endif
        </div>
    </div>
</div>
@endsection