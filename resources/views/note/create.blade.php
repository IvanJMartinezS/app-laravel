@extends('layouts.app')

@section('content')
<a href="{{ route('note.index') }}">Back</a>
<form action="{{ route('note.store') }}" method="POST">
    @csrf
    <label for="title">Title: </label>
    <input type="text" name="title" id="title"> <br />
    @error('title')
        <p style="color: red"> {{ $message }} </p>
    @enderror

    <label for="description">Description: </label>
    <input type="text" name="description" id="description"> <br />
    @error('description')
    <p style="color: red"> {{ $message }} </p>
    @enderror

    <input type="submit" value="create note">
</form>
@endsection