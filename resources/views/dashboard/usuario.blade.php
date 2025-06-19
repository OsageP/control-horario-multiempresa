@extends('layouts.app')

@section('title', 'Mi Perfil')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header bg-light">
                    Mi Jornada Laboral
                </div>

                <div class="card-body">
                    <h4>Hola, {{ auth()->user()->name }}</h4>
                    <p>Este es tu resumen de jornada. Puedes revisar tus fichajes, solicitudes y vacaciones.</p>

                    <div class="mb-4 d-flex flex-wrap gap-2">
                        <a href="{{ route('fichaje.actual') }}" class="btn btn-primary">
                            Ver Mis Fichajes
                        </a>
                        <a href="{{ route('mis-turnos') }}" class="btn btn-secondary">
                            Mis Turnos
                        </a>
                        <a href="{{ route('solicitudes.create') }}" class="btn btn-success">
                            Nueva Solicitud
                        </a>
                        <a href="{{ route('vacaciones.ver') }}" class="btn btn-info">
                            Mis Vacaciones
                        </a>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="card mb-3">
                                <div class="card-header">Fichaje Actual</div>
                                <div class="card-body">
                                    <p><strong>Entrada:</strong> 09:00</p>
                                    <p><strong>Salida estimada:</strong> 17:00</p>
                                    <p><strong>Hoy:</strong> 8 horas trabajadas</p>
                                    <button class="btn btn-danger">Registrar Salida</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card mb-3">
                                <div class="card-header">Mis Solicitudes Pendientes</div>
                                <div class="card-body">
                                    @php
                                        $solicitudes = [
                                            ['tipo' => 'Vacaciones', 'fecha' => '2025-06-15', 'estado' => 'pendiente'],
                                            ['tipo' => 'Permiso médico', 'fecha' => '2025-06-10', 'estado' => 'aprobado']
                                        ];
                                    @endphp

                                    @if(count($solicitudes) > 0)
                                        <ul class="list-group">
                                            @foreach ($solicitudes as $solicitud)
                                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                                    {{ $solicitud['tipo'] }} ({{ $solicitud['fecha'] }})
                                                    <span class="badge bg-{{ $solicitud['estado'] == 'aprobado' ? 'success' : 'warning' }}">
                                                        {{ ucfirst($solicitud['estado']) }}
                                                    </span>
                                                </li>
                                            @endforeach
                                        </ul>
                                    @else
                                        <p>No tienes solicitudes pendientes.</p>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection