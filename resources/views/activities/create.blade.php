
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Nueva Actividad</h1>

        <form action="{{ route('activities.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="type" class="form-label">Tipo de Actividad</label>
                <select name="type" id="type" class="form-control">
                    <option value="surf">Surf</option>
                    <option value="windsurf">Windsurf</option>
                    <option value="kayak">Kayak</option>
                    <option value="atv">ATV</option>
                    <option value="hot air balloon">Globo aerostático</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="datetime" class="form-label">Fecha y Hora</label>
                <input type="datetime-local" name="datetime" id="datetime" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="paid" class="form-label">¿Pagado?</label>
                <input type="checkbox" name="paid" id="paid">
            </div>

            <div class="mb-3">
                <label for="notes" class="form-label">Notas</label>
                <textarea name="notes" id="notes" class="form-control"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Crear Actividad</button>
        </form>
    </div>
@endsection
