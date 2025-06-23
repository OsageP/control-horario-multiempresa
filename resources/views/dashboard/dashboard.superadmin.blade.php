@extends('layouts.app')

@section('title', 'Panel Superadmin')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-10">
        <div class="card">
            <div class="card-header bg-primary text-white">
                Panel del Superadministrador
            </div>

            <div class="card-body">
                <p>Acceso total al sistema. Puedes crear empresas y configurar convenios.</p>

                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action">Crear Nueva Empresa</a>
                    <a href="#" class="list-group-item list-group-item-action">Configurar Convenio Colectivo</a>
                    <a href="#" class="list-group-item list-group-item-action">Usuarios Registrados</a>
                    <a href="#" class="list-group-item list-group-item-action">Registros Legales</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection