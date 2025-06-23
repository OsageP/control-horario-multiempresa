@extends('layouts.app')

@section('title', 'Mi Jornada')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-10">
        <div class="card">
            <div class="card-header bg-white border-bottom">
                <h5>Mi Jornada Laboral</h5>
            </div>

            <div class="card-body">
                <p>Bienvenido, {{ auth()->user()->name }}.</p>
                <p>Estás viendo tu resumen de fichajes y turnos.</p>

                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action">Ver Mis Fichajes</a>
                    <a href="#" class="list-group-item list-group-item-action">Mis Turnos</a>
                    <a href="#" class="list-group-item list-group-item-action">Solicitudes Pendientes</a>
                    <a href="#" class="list-group-item list-group-item-action">Vacaciones Disponibles</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection