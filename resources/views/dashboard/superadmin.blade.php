@extends('layouts.app')

@section('title', 'Dashboard - Superadmin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    Panel de Superadministrador
                </div>

                <div class="card-body">
                    <h4>Bienvenido al sistema multiempresa</h4>
                    <p>Desde aquí puedes gestionar todas las empresas registradas en la plataforma.</p>

                    <div class="mb-4">
                        <a href="{{ route('empresas.index') }}" class="btn btn-success">
                            Gestionar Empresas
                        </a>
                        <a href="#" class="btn btn-info ms-2">
                            Configuración Global
                        </a>
                        <a href="#" class="btn btn-warning ms-2">
                            Auditoría General
                        </a>
                    </div>

                    <h5>Acciones Recientes</h5>
                    <ul class="list-group">
                        <li class="list-group-item">Nueva empresa creada: Empresa XYZ</li>
                        <li class="list-group-item">Actualización de convenios: Hostelería – Madrid</li>
                        <li class="list-group-item">Usuario suspendido por actividad anómala</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection