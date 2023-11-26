@extends('layouts.app')

{{--Content--}}
@section('content')
<div class="container">
    <div class="row">
        @if(session('status'))
            <div class="alert alert-success mt-4">
                {{session('status')}}
            </div>
        @endif
        @foreach($tasks as $task)
            <div class="card mt-5">
                <div class="card-header">
                    {{$task->title}}
                </div>
                <div class="card-body">
                    <h5 class="card-title">{{$task->description}}</h5>
                    <p class="card-text">Create: {{$task->created_at}}  |  Update:{{$task->updated_at}}</p>
                    <a href="{{route('update-task', $task->id)}}" class="btn btn-outline-primary">Update</a>
                    <form action="{{route('delete', $task->id)}}" method="post" class="d-inline-block">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-outline-danger">Delete</button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection



