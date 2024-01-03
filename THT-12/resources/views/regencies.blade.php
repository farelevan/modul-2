<!-- resources/views/regencies.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>List of Regencies in {{ $provinceName }}</h1>

    <ul>
        @foreach($regencies as $regency)
            <li>
                <a href="{{ url('/districts/' . $regency['id'] . '/' . $provinceId) }}">
                    {{ $regency['name'] }}
                </a>
            </li>
        @endforeach
    </ul>

    <a href="{{ url('/provinces') }}">Back to Provinces</a>
@endsection
