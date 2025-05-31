@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Person</h2>
    <form method="POST" action="{{ route('people.update', $person) }}">
        @csrf
        @method('PUT')
        <div>
            <label>Name:</label>
            <input type="text" name="name" value="{{ old('name', $person->name) }}" required>
            @error('name') <div style="color: red;">{{ $message }}</div> @enderror
        </div>
        <div>
            <label>Age:</label>
            <input type="number" name="age" value="{{ old('age', $person->age) }}" required>
            @error('age') <div style="color: red;">{{ $message }}</div> @enderror
        </div>
        <button type="submit">Update</button>
    </form>
    <a href="{{ route('people.index') }}">Back to list</a>
</div>
@endsection