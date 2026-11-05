@extends('students.layout')

@section('title', 'Add Student')

@section('content')
    <h1>Add Student</h1>
    <form action="{{ route('students.store') }}" method="POST">
        @csrf
        <label for="name">Name</label>
        <input id="name" name="name" type="text" value="{{ old('name') }}" required>

        <label for="email">Email</label>
        <input id="email" name="email" type="email" value="{{ old('email') }}" required>

        <label for="course">Course</label>
        <input id="course" name="course" type="text" value="{{ old('course') }}" required>

        <button type="submit">Save Student</button>
        <a href="{{ route('students.index') }}">Cancel</a>
    </form>
@endsection
