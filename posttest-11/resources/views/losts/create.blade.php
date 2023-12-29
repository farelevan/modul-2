<!-- resources/views/losts/create.blade.php -->

@extends('layouts.app')

@section('content')
    <h2>Add Item</h2>
    <form action="{{ route('losts.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="Nama Barang" class="form-label">Nama_Barang</label>
            <input type="text" class="form-control" id="Nama_Barang" name="Nama_Barang" required>
        </div>
        <div class="mb-3">
            <label for="Lokasi" class="form-label">Lokasi</label>
            <input type="text" class="form-control" id="Lokasi" name="Lokasi" required>
        </div>
        <button type="submit" class="btn btn-primary">Add Item</button>
    </form>
@endsection
