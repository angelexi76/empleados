@extends('layouts.web')

@section('title')
    Tareas
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 p-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Tareas') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('tareas.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Realizar tarea') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body p-8">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Empleados Id</th>
										<th>Titulo Tarea</th>
										<th>Descripcion de Tareas</th>
										<th>Ultima entrada</th>
                                        <th>Acciones</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tareas as $tareas)
                                        <tr>
                                            
                                            
											<td>{{ $tareas->empleados_id}}</td>
											<td>{{ $tareas->title }}</td>
											<td>{{ $tareas->description }}</td>
											<td>{{ $tareas->last_used_at }}</td>
                                            <td>{{ $tareas->acciones }}</td>

                                            <td>
                                                <form action="{{ route('tareas.destroy',$tareas->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('tareas.show',$tareas->id) }}"><i class="fa fa-fw fa-eye"></i> Mostrar Tarea</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('tareas.edit',$tareas->id) }}"><i class="fa fa-fw fa-edit"></i> Editar tarea</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Borrar Tarea</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
@endsection
