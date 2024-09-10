
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Editar Actividad</h1>

        <form action="{{ route('activities.update', $activity->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="type" class="form-label">Tipo de Actividad</label>
                <select name="type" id="type" class="form-control">
                    <option value="surf" {{ $activity->type == 'surf' ? 'selected' : '' }}>Surf</option>
                    <option value="windsurf" {{ $activity->type == 'windsurf' ? 'selected' : '' }}>Windsurf</option>
                    <option value="kayak" {{ $activity->type == 'kayak' ? 'selected' : '' }}>Kayak</option>
                    <option value="atv" {{ $activity->type == 'atv' ? 'selected' : '' }}>ATV</option>
                    <option value="hot air balloon" {{ $activity->type == 'hot air balloon' ? 'selected' : '' }}>Globo aerostático</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="datetime" class="form-label">Fecha y Hora</label>
                <input type="datetime-local" name="datetime" id="datetime" class="form-control" value="{{ $activity->datetime }}" required>
            </div>

            <div class="mb-3">
                <label for="paid" class="form-label">¿Pagado?</label>
                <input type="checkbox" name="paid" id="paid" {{ $activity->paid ? 'checked' : '' }}>
            </div>

            <div class="mb-3">
                <label for="notes" class="form-label">Notas</label>
                <textarea name="notes" id="notes" class="form-control">{{ $activity->notes }}</textarea>
            </div>

            <button type="submit" class="btn btn-primary">Actualizar Actividad</button>
        </form>
    </div>
@endsection
