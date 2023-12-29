<!-- resources/views/losts/edit.blade.php -->

@extends('layouts.app')

@section('content')
    <h2>Edit Book</h2>
    <form action="{{ route('losts.update', $lost->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $lost->title }}" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description" rows="3" required>{{ $lost->description }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update Book</button>
    </form>
@endsection
