@extends('maintask')

@section('Main_Title', 'Task Viewer')
    
@section('Page_title', 'Task Viewer')

@section('content')
    <h3>
        List of Tasks
    </h3>
    <table class="table table-stripped table-hover">
        <thead>
            <tr>
                <th>
                    Title
                </th>
                <th>
                    Description
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach($tasks as $task)
                <tr>
                    <td>
                        {{ $task->title }}
                    </td>
                    <td>
                        {{ $task->description }}
                    </td>
                    <td>
                        <a href="{{ route('task.edit',$task) }}">Edit</a>
                        <a href="{{ route('task.show',$task) }}">show</a>
                    </td>
                    
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
