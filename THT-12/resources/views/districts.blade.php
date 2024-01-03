<!-- resources/views/districts.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>List of Districts in {{ $regencyName }} - {{ $provinceName }}</h1>

    <ul>
        @foreach($districts as $district)
            <li>
                <a href="{{ url('/villages/' . $district['id'] . '/' . $regencyId . '/' . $provinceId) }}">
                    {{ $district['name'] }}
                </a>
            </li>
        @endforeach
    </ul>

    <a href="{{ url('/regencies/' . $provinceId) }}">Back to Regencies</a>
@endsection
