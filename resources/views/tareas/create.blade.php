@extends('layouts.web')

@section('title')
    Realizar Tareas
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Realizar Tareas</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('tareas.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('tareas.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
