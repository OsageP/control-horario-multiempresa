@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Registrar Empresa</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('company.store') }}">
                        @csrf

                        <div class="mb-3">
                            <label for="name" class="form-label">Nombre de la Empresa</label>
                            <input id="name" type="text" class="form-control" name="name" required autofocus>
                        </div>

                        <div class="mb-3">
                            <label for="slug" class="form-label">Slug (Identificador único)</label>
                            <input id="slug" type="text" class="form-control" name="slug" required>
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email (opcional)</label>
                            <input id="email" type="email" class="form-control" name="email">
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary">
                                Continuar al Registro de Usuario
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection