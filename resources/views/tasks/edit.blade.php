@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Tarea</h1>
    <form action="{{ route('tasks.update', $task) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label class="form-label">Título</label>
            <input type="text" name="title" class="form-control" value="{{ $task->title }}" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Descripción</label>
            <textarea name="description" class="form-control">{{ $task->description }}</textarea>
        </div>
        <div class="mb-3">
            <label class="form-label">Fecha Límite</label>
            <input type="date" name="due_date" class="form-control" value="{{ $task->due_date }}">
        </div>
        <button type="submit" class="btn btn-primary">Actualizar Tarea</button>
        <a href="{{ route('tasks.index') }}" class="btn btn-secondary">Volver</a>
    </form>
</div>
@endsection
