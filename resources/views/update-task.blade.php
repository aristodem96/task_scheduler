@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="mt-5">
            @if(session('status'))
                <div class="alert alert-success mt-4">
                    {{session('status')}}
                </div>
            @endif
            @if ($errors->any())
                <div class="alert alert-danger mt-4">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form method="post" action="{{route('update', $task->id)}}">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="title">Title:</label>
                    <input type="text" name="title" class="form-control" id="title_update" value="{{$task->title}}" >
                </div>
                <div class="form-group">
                    <label for="description">Description:</label>
                    <input type="text" name="description" class="form-control" id="description_update" value="{{$task->description}}" >
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-outline-success mt-3">Update Task</button>
                </div>

            </form>

        </div>
    </div>
@endsection
