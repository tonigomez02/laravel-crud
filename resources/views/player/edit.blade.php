@extends('layouts.baseLayout')

@section('content')
    <h2>Edit players</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="/players/{{$player->id}}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="" class="form-label">Name</label>
            <input id="name" name="name" type="text" class="form-control" value="{{$player->name}}">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Lastname</label>
            <input id="lastname" name="lastname" type="text" class="form-control" value="{{$player->lastname}}">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Position</label>
            <input id="position" name="position" type="text" class="form-control" value="{{$player->position}}">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Salary</label>
            <input id="salary" name="salary" type="text" class="form-control" value="{{$player->salary}}">
        </div>
        <a href="/players" class="btn btn-secondary">Cancel</a>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
@endsection
