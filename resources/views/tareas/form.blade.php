<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('empleados_id') }}
            {{ Form::text('empleados_id', $tareas->empleados_id, ['class' => 'form-control' . ($errors->has('empleados_id') ? ' is-invalid' : ''), 'placeholder' => 'Empleados Id']) }}
            {!! $errors->first('empleados_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('title') }}
            {{ Form::text('title', $tareas->title, ['class' => 'form-control' . ($errors->has('title') ? ' is-invalid' : ''), 'placeholder' => 'Title']) }}
            {!! $errors->first('title', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('description') }}
            {{ Form::text('description', $tareas->description, ['class' => 'form-control' . ($errors->has('description') ? ' is-invalid' : ''), 'placeholder' => 'Description']) }}
            {!! $errors->first('description', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('last_used_at') }}
            {{ Form::text('last_used_at', $tareas->last_used_at, ['class' => 'form-control' . ($errors->has('last_used_at') ? ' is-invalid' : ''), 'placeholder' => 'Last Used At']) }}
            {!! $errors->first('last_used_at', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>