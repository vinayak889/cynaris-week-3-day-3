@extends('students.layout')

@section('title', 'Edit Student')

@section('content')
    <h1>Edit Student</h1>
    <form action="{{ route('students.update', $student) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="name">Name</label>
        <input id="name" name="name" type="text" value="{{ old('name', $student->name) }}" required>

        <label for="email">Email</label>
        <input id="email" name="email" type="email" value="{{ old('email', $student->email) }}" required>

        <label for="course">Course</label>
        <input id="course" name="course" type="text" value="{{ old('course', $student->course) }}" required>

        <button type="submit">Update Student</button>
        <a href="{{ route('students.index') }}">Cancel</a>
    </form>
@endsection
