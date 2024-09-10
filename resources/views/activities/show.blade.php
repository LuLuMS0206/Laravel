
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Detalles de la Actividad</h1>

        <ul>
            <li><strong>Tipo:</strong> {{ $activity->type }}</li>
            <li><strong>Fecha y Hora:</strong> {{ $activity->datetime }}</li>
            <li><strong>¿Pagado?:</strong> {{ $activity->paid ? 'Sí' : 'No' }}</li>
            <li><strong>Satisfacción:</strong> {{ $activity->satisfaction ?? 'No especificado' }}</li>
            <li><strong>Notas:</strong> {{ $activity->notes ?? 'Ninguna' }}</li>
        </ul>

        <a href="{{ route('activities.index') }}" class="btn btn-secondary">Volver</a>
    </div>
@endsection
