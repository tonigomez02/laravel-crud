@extends('layouts.baseLayout')

@section('content')
    <h2>Add new player</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="/players" method="POST">
        @csrf
        <div class="mb-3">
            <label for="" class="form-label">Name</label>
            <input id="name" name="name" type="text" class="form-control">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Lastname</label>
            <input id="lastname" name="lastname" type="text" class="form-control">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Position</label>
            <input id="position" name="position" type="text" class="form-control">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Salary</label>
            <input id="salary" name="salary" type="text" class="form-control">
        </div>
        <a href="/players" class="btn btn-secondary">Cancel</a>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
@endsection
