@extends('layouts.app')

@section('content')
<a href="{{ route('note.index') }}">Back</a>
<div>
    <h2> {{ $note->title }} </h2>
    <p> {{ $note->description }} </p>
</div>
@endsection
