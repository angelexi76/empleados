@extends('layouts.web')

@section('title')
Update Post
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Actualizar Tareas</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('tareas.update', $tareas->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('tareas.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
