@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Añadir Nueva Tarea</h1>
    <form action="{{ route('tasks.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label class="form-label">Título</label>
            <input type="text" name="title" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Descripción</label>
            <textarea name="description" class="form-control"></textarea>
        </div>
        <div class="mb-3">
            <label class="form-label">Fecha Límite</label>
            <input type="date" name="due_date" class="form-control">
        </div>
        <button type="submit" class="btn btn-success">Guardar Tarea</button>
        <a href="{{ route('tasks.index') }}" class="btn btn-secondary">Volver</a>
    </form>
</div>
@endsection
