@extends('layouts.app')

@section('title', 'Crear Suplemento - NutriGym')

@section('content')
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white">
                    <div class="d-flex justify-content-between align-items-center">
                        <h4 class="mb-0">
                            <i class="fas fa-plus me-2"></i>Crear Nuevo Suplemento
                        </h4>
                        <a href="{{ route('suplementos.index') }}" class="btn btn-light btn-sm">
                            <i class="fas fa-arrow-left me-1"></i>Volver
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    <form action="{{ route('suplementos.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="nombre" class="form-label">Nombre *</label>
                                <input type="text" class="form-control @error('nombre') is-invalid @enderror"
                                    id="nombre" name="nombre" value="{{ old('nombre') }}" required>
                                @error('nombre')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="marca" class="form-label">Marca</label>
                                <input type="text" class="form-control @error('marca') is-invalid @enderror"
                                    id="marca" name="marca" value="{{ old('marca') }}">
                                @error('marca')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="descripcion" class="form-label">Descripción</label>
                            <textarea class="form-control @error('descripcion') is-invalid @enderror"
                                    id="descripcion" name="descripcion" rows="3">{{ old('descripcion') }}</textarea>
                            @error('descripcion')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="row">
                            <div class="col-md-4 mb-3">
                                <label for="precio" class="form-label">Precio *</label>
                                <div class="input-group">
                                    <span class="input-group-text">$</span>
                                    <input type="number" step="0.01" class="form-control @error('precio') is-invalid @enderror"
                                        id="precio" name="precio" value="{{ old('precio') }}" required>
                                    @error('precio')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-4 mb-3">
                                <label for="stock" class="form-label">Stock *</label>
                                <input type="number" class="form-control @error('stock') is-invalid @enderror"
                                    id="stock" name="stock" value="{{ old('stock') }}" required min="0">
                                @error('stock')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-4 mb-3">
                                <label for="categoria" class="form-label">Categoría</label>
                                <select class="form-select @error('categoria') is-invalid @enderror"
                                        id="categoria" name="categoria">
                                    <option value="">Seleccionar categoría</option>
                                    <option value="Proteínas" {{ old('categoria') == 'Proteínas' ? 'selected' : '' }}>Proteínas</option>
                                    <option value="Creatinas" {{ old('categoria') == 'Creatinas' ? 'selected' : '' }}>Creatinas</option>
                                    <option value="Vitaminas" {{ old('categoria') == 'Vitaminas' ? 'selected' : '' }}>Vitaminas</option>
                                    <option value="Pre-entreno" {{ old('categoria') == 'Pre-entreno' ? 'selected' : '' }}>Pre-entreno</option>
                                    <option value="Quemadores" {{ old('categoria') == 'Quemadores' ? 'selected' : '' }}>Quemadores</option>
                                    <option value="Aminoácidos" {{ old('categoria') == 'Aminoácidos' ? 'selected' : '' }}>Aminoácidos</option>
                                </select>
                                @error('categoria')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="presentacion" class="form-label">Presentación</label>
                                <select class="form-select @error('presentacion') is-invalid @enderror"
                                        id="presentacion" name="presentacion">
                                    <option value="">Seleccionar presentación</option>
                                    <option value="Cápsulas" {{ old('presentacion') == 'Cápsulas' ? 'selected' : '' }}>Cápsulas</option>
                                    <option value="Polvo" {{ old('presentacion') == 'Polvo' ? 'selected' : '' }}>Polvo</option>
                                    <option value="Líquido" {{ old('presentacion') == 'Líquido' ? 'selected' : '' }}>Líquido</option>
                                    <option value="Tabletas" {{ old('presentacion') == 'Tabletas' ? 'selected' : '' }}>Tabletas</option>
                                    <option value="Geles" {{ old('presentacion') == 'Geles' ? 'selected' : '' }}>Geles</option>
                                </select>
                                @error('presentacion')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="imagen" class="form-label">Imagen</label>
                                <input type="file" class="form-control @error('imagen') is-invalid @enderror"
                                    id="imagen" name="imagen" accept="image/*">
                                <div class="form-text">Formatos permitidos: JPG, PNG, GIF. Tamaño máximo: 2MB</div>
                                @error('imagen')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="activo" name="activo" value="1"
                                {{ old('activo', true) ? 'checked' : '' }}>
                                <label class="form-check-label" for="activo">
                                    Producto activo
                                </label>
                            </div>
                        </div>

                        <div class="d-flex justify-content-end gap-2">
                            <a href="{{ route('suplementos.index') }}" class="btn btn-secondary">Cancelar</a>
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-save me-2"></i>Guardar Suplemento
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection