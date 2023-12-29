<!-- resources/views/losts/show.blade.php -->

@extends('layouts.app')

@section('content')
    <h2>Nama Barang: <b> {{ $lost->nama_barang }} </b> </h2>
    <p>Lokasi Ditemukan: <b> {{ $lost->lokasi }} </b> </p>
    <p>Nomor Telepon Penemu: <b> {{ $lost->notelepon }} </b> </p>
    <a href="{{ route('losts.edit', $lost->id) }}" class="btn btn-warning">Edit</a>
    <form action="{{ route('losts.destroy', $lost->id) }}" method="POST" style="display:inline">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete</button>
    </form>
    <a href="{{ route('losts.index') }}" class="btn btn-secondary">Back to List</a>
@endsection
