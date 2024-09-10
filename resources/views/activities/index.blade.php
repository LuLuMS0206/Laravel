
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Mis Actividades</h1>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <a href="{{ route('activities.create') }}" class="btn btn-primary">Nueva Actividad</a>

        <table class="table mt-3">
            <thead>
                <tr>
                    <th>Tipo</th>
                    <th>Fecha</th>
                    <th>Pagado</th>
                    <th>Satisfacción</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($activities as $activity)
                    <tr>
                        <td>{{ $activity->type }}</td>
                        <td>{{ $activity->datetime }}</td>
                        <td>{{ $activity->paid ? 'Sí' : 'No' }}</td>
                        <td>{{ $activity->satisfaction ?? 'N/A' }}</td>
                        <td>
                            <a href="{{ route('activities.show', $activity->id) }}" class="btn btn-info">Ver</a>
                            <a href="{{ route('activities.edit', $activity->id) }}" class="btn btn-warning">Editar</a>
                            <form action="{{ route('activities.destroy', $activity->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5">No tienes actividades registradas.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
