@extends('layouts.web')

@section('template_title')
    {{ $tareas->name ?? 'Show Tareas' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Tareas</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('tareas.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Empleados Id:</strong>
                            {{ $tareas->empleados_id }}
                        </div>
                        <div class="form-group">
                            <strong>Title:</strong>
                            {{ $tareas->title }}
                        </div>
                        <div class="form-group">
                            <strong>Description:</strong>
                            {{ $tareas->description }}
                        </div>
                        <div class="form-group">
                            <strong>Last Used At:</strong>
                            {{ $tareas->last_used_at }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
