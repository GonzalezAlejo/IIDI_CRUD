@extends('maintask')

@section('Main_Title', 'Task Manager')
    
@section('Page_title', 'Task Manager')

@section('content')
    <h3>
        Create Task
    </h3>
    <form action="{{ route('task.store') }}" method="POST">
        <x-task-form-body/>
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