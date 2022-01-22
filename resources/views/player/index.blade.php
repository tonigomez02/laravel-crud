@extends('layouts.baseLayout')

@section('content')
<a href="players/create" class="btn btn-primary mt-5">Add</a>

<table class="table table-dark table-striped mt-4">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Lastname</th>
            <th scope="col">Position</th>
            <th scope="col">Salary</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($players as $player)
            <tr>
                <td>{{$player->id}}</td>
                <td>{{$player->name}}</td>
                <td>{{$player->lastname}}</td>
                <td>{{$player->position}}</td>
                <td>{{$player->salary}}</td>
                <td>
                    <form action="/players/{{$player->id}}" method="POST">
                        @method("DELETE")
                        @csrf
                        <a href="/players/{{$player->id}}/edit" class="btn btn-info">Edit</a>
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
