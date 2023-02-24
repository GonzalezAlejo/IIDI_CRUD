@extends('maintask')

@section('Main_Title', 'Task Manager')
    
@section('Page_title', 'Task Manager')

@section('content')
    <h3>
        Edit Task <i>{{ $task_to_edit->title }}</i>
    </h3>
    <form action="{{ route('task.update',$task_to_edit) }}" method="POST">
        @method('put')
        <x-task-form-body :task="$task_to_edit"/>
    </form>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
@endsection