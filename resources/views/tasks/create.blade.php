<!-- resources/views/tasks/index.blade.php -->

@extends('layouts.app')

@section('content')

    <!-- Bootstrap Boilerplate... -->
<div class="container">
    <div class="panel-body">
        <!-- Display Validation Errors -->
        @include('common.errors')

        <!-- New Task Form -->
        {!! Form::open(['method' => 'POST', 'url' => route('tasks.store'), 'class' => 'form-horizontal']) !!}
        
            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                {!! Form::label('name', Lang::get('messages.input_name')) !!}
                {!! Form::text('name', null, ['class' => 'form-control', 'required' => 'required']) !!}
                <small class="text-danger">{{ $errors->first('name') }}</small>
            </div>
        
            <div class="btn-group pull-right">
                {!! Form::submit(Lang::get('messages.save'), ['class' => 'btn btn-info pull-right']) !!}
            </div>
        
        {!! Form::close() !!}

    </div>
</div>
    <!-- TODO: Current Tasks -->
@endsection
