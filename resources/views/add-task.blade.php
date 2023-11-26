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
            <form method="post" action="{{route('add')}}">
                @csrf
                <div class="form-group">
                    <label for="title_add">Title:</label>
                    <input type="text" name="title" class="form-control" id="title_add" >
                </div>
                <div class="form-group">
                    <label for="description_add">Description:</label>
                    <input type="text" name="description" class="form-control" id="description_add" >
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-outline-success mt-3">Add Task</button>
                </div>

            </form>

        </div>
    </div>
@endsection
