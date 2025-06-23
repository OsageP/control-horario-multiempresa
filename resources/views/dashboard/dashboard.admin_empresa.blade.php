@extends('layouts.app')

@section('title', 'Panel Admin Empresa')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-10">
        <div class="card">
            <div class="card-header bg-success text-white">
                Panel de Administrador de Empresa
            </div>

            <div class="card-body">
                <p>Desde aquí puedes gestionar empleados, turnos y ausencias de tu empresa.</p>

                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action">Gestionar Empleados</a>
                    <a href="#" class="list-group-item list-group-item-action">Turnos Laborales</a>
                    <a href="#" class="list-group-item list-group-item-action">Ausencias</a>
                    <a href="#" class="list-group-item list-group-item-action">Exportar a MITES</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection