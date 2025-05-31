@extends('layouts.app')

@section('content')
<div class="container">
    <h2>People List</h2>
    @if(session('success'))
        <div style="color: green;">{{ session('success') }}</div>
    @endif
    <a href="{{ route('people.create') }}">Add Person</a>
    <table border="1" cellpadding="8" style="margin-top:15px;">
        <tr>
            <th>Name</th>
            <th>Age</th>
            <th>Actions</th>
        </tr>
        @foreach($people as $person)
        <tr>
            <td>{{ $person->name }}</td>
            <td>{{ $person->age }}</td>
            <td>
                <a href="{{ route('people.edit', $person) }}">Edit</a>
                <form action="{{ route('people.destroy', $person) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button onclick="return confirm('Delete?')" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>
@endsection