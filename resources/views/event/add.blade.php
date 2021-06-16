@extends('admin.layout')

@section('title','Add New Event')

@section('body')
    <div class="container my-3">
        <h1>Add New Event</h1>
        <form method="POST" action="/admin/addEvent">
            @csrf
            <div class="form-group">
                <label for="ename">Event Name</label>
                <input type="text" class="form-control" id="ename" placeholder="Enter Event Name" name="ename">
            </div>
            <div class="form-group">
                <label for="edescription">Event Description</label>
                <textarea class="form-control" id="edescription" rows="4" name="edescription"></textarea>
            </div>
            <div class="form-group">
                <label for="department">Department</label>
                <select id="department" class="form-control" name="edepartment">
                    @foreach ($departments as $department)
                    <option value={{$department->id}} >{{$department->name}}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Add Event</button>
        </form>
    </div>
@endsection
