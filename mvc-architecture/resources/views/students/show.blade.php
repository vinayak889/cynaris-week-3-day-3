@extends('students.layout')

@section('title', 'Student Details')

@section('content')
    <h1>Student Details</h1>
    <p><strong>Name:</strong> {{ $student->name }}</p>
    <p><strong>Email:</strong> {{ $student->email }}</p>
    <p><strong>Course:</strong> {{ $student->course }}</p>
    <a href="{{ route('students.edit', $student) }}">Edit Student</a>
    <a href="{{ route('students.index') }}">Back to Students</a>
@endsection
