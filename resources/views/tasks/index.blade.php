@extends('layouts.app')

@section('content')
<!-- Create Task Form... -->

<!-- Current Tasks -->
<div class="container">
    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('messages.current_task')
        </div>
        <div class="panel-body">
            <a href="{{ route('tasks.create') }}" class="btn btn-primary">@lang('messages.create_new_task')</a>
            <table class="table table-striped task-table">

                <!-- Table Headings -->
                <thead>
                    <th>Task</th>
                    <th>&nbsp;</th>
                </thead>

                <!-- Table Body -->
                <tbody>
                    @forelse ($tasks as $task)
                    <tr>
                        <!-- Task Name -->
                        <td class="table-text">
                            <div>{{ $task->name }}</div>
                        </td>
                        <td>
                            <a href="{{ route('tasks.edit', ['id' => $task->id]) }}" class="btn btn-primary">@lang('messages.edit')</a>
                        </td>
                        <td>
                            <!-- TODO: Delete Button -->
                            {!! Form::open(['method' => 'Delete', 'url' => route('tasks.destroy', ['id' => $task->id]),
                            'class' => 'form-horizontal']) !!}
                            {!! Form::submit(Lang::get('messages.delete'), 
                            ['class' => 'btn btn-danger pull-right']) !!}
                            {!! Form::close() !!}
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="2">@lang('messages.no_data')</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
