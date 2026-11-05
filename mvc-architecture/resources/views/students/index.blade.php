@extends('students.layout')

@section('title', 'Students')

@section('content')
    <h1>Students</h1>
    <a class="button" href="{{ route('students.create') }}">Add Student</a>

    @if ($students->isEmpty())
        <p>No students have been added yet.</p>
    @else
        <table>
            <thead><tr><th>Name</th><th>Email</th><th>Course</th><th>Actions</th></tr></thead>
            <tbody>
                @foreach ($students as $student)
                    <tr>
                        <td>{{ $student->name }}</td>
                        <td>{{ $student->email }}</td>
                        <td>{{ $student->course }}</td>
                        <td>
                            <a href="{{ route('students.show', $student) }}">View</a> |
                            <a href="{{ route('students.edit', $student) }}">Edit</a>
                            <form class="inline" action="{{ route('students.destroy', $student) }}" method="POST"
                                  onsubmit="return confirm('Delete this student?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $students->links() }}
    @endif
@endsection
