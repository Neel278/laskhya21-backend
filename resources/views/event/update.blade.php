@extends('admin.layout')

@section('title','Add New Event')

@section('body')
    <div class="container my-3">
        <h1>Update An Event</h1>
        <form method="POST" action="/admin/searchEvent">
            @csrf
            <div class="form-group">
                <label for="department">Departments</label>
                <select id="department" class="form-control" name="edepartment">
                    @foreach ($departments as $department)
                    <option value={{$department->id}} >{{$department->name}}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Search</button>
        </form>
        @if ($events)
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">name</th>
                    <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($events as $event)
                    <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{$event->name}}</td>
                    <td>
                        <a type="button" class="btn btn-warning" href="/admin/edit/{{$event->id}}">Edit</a>
                        <a type="button" class="btn btn-danger" href="/admin/delete/{{$event->id}}">Delete</a>
                    </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
@endsection
