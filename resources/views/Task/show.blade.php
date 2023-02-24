@extends('maintask')

@section('Main_Title', 'Task Viewer')
    
@section('Page_title', 'Task Viewer')

@section('content')
    <h3>
        <i>{{ $task->title }}</i>
    </h3>
    <ul>
        <li>
            Description: <strong>{{ $task->description }}</strong>
        </li>
    </ul>
    <div class="row">
        <div class="col-sm-12">
            <form action="{{ route('task.destroy',$task) }}" method="post">
                @csrf
                @method('delete')
                <button class="btn btn-danger btn-sm" type="submit">
                    Delete
                </button>
            </form>
        </div>
    </div>
    
@endsection