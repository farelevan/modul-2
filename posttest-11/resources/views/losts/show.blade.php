<!-- resources/views/losts/show.blade.php -->

@extends('layouts.app')

@section('content')
    <h2>{{ $lost->Nama_Barang }}</h2>
    <p>{{ $lost->Lokasi }}</p>
    <a href="{{ route('losts.edit', $lost->id) }}" class="btn btn-warning">Edit</a>
    <form action="{{ route('losts.destroy', $lost->id) }}" method="POST" style="display:inline">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete</button>
    </form>
    <a href="{{ route('losts.index') }}" class="btn btn-secondary">Back to List</a>
@endsection
