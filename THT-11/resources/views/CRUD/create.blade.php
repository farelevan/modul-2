<!-- resources/views/losts/create.blade.php -->

@extends('layouts.app')

@section('content')
    <h2>Add Item</h2>
    <form action="{{ route('losts.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nama_barang" class="form-label">Nama Barang</label>
            <input type="text" class="form-control" id="nama_barang" name="nama_barang" required>
        </div>
        <div class="mb-3">
            <label for="lokasi" class="form-label">Lokasi</label>
            <input type="text" class="form-control" id="lokasi" name="lokasi" required>
        </div>
        <div class="mb-3">
            <label for="notelepon" class="form-label">Nomor Telepon</label>
            <input type="number" class="form-control" id="notelepon" name="notelepon" required pattern="\d*">
        </div>
        <button type="submit" class="btn btn-primary">Add Item</button>
    </form>
@endsection
