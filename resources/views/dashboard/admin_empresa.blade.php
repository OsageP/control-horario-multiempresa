<!-- resources/views/dashboard/admin_empresa.blade.php -->
@extends('layouts.app')

@section('title', 'Dashboard - Admin Empresa')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header bg-success text-white">
                    Panel de Administrador de Empresa
                </div>

                <div class="card-body">
                    <h4>Bienvenido, {{ auth()->user()->name }}</h4>
                    <p>Desde aquí puedes gestionar usuarios, turnos, fichajes y generar informes legales.</p>

                    <div class="mb-4 d-flex flex-wrap gap-2">
                        <a href="{{ route('empleados.index') }}" class="btn btn-primary">
                            Gestionar Empleados
                        </a>
                        <a href="{{ route('turnos.index') }}" class="btn btn-secondary ms-2">
                            Turnos Laborales
                        </a>
                        <a href="{{ route('ausencias.index') }}" class="btn btn-info ms-2">
                            Ausencias
                        </a>
                        <a href="#" class="btn btn-warning ms-2">
                            Exportar a MITES
                        </a>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="card mb-3">
                                <div class="card-header">Resumen de Jornadas</div>
                                <div class="card-body">
                                    <p><strong>Total empleados:</strong> 150</p>
                                    <p><strong>Fichajes hoy:</strong> 128</p>
                                    <p><strong>Jornadas completas:</strong> 120</p>
                                    <p><strong>Jornadas incompletas:</strong> 8</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card mb-3">
                                <div class="card-header">Alertas Legales</div>
                                <div class="card-body">
                                    <ul class="list-group">
                                        <li class="list-group-item list-group-item-danger">Empleado con exceso de horas semanales</li>
                                        <li class="list-group-item list-group-item-warning">Turno nocturno sin descanso suficiente</li>
                                        <li class="list-group-item list-group-item-success">Ausencia médica verificada</li>
                                    </ul>
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