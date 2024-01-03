<!-- resources/views/villages.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>List of Villages in {{ $districtName }} - {{ $regencyName }} - {{ $provinceName }}</h1>

    <ul>
        @foreach($villages as $village)
            <li>{{ $village['name'] }}</li>
        @endforeach
    </ul>

    <a href="{{ url('/districts/' . $regencyId . '/' . $provinceId) }}">Back to Districts</a>
@endsection
