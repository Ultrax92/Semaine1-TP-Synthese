@extends('layouts.app')

@section('content')
    <div class="detail-container">
        <img src="{{ asset($animal->photo) }}" alt="{{ $animal->name }}">

        <div class="detail-info">
            <h2>{{ $animal->name }}</h2>
            <p><strong>Espèce :</strong> {{ $animal->species }}</p>
            <p><strong>Age :</strong> {{ $animal->age }} ans</p>
            <p class="detail-desc">{{ $animal->description }}</p>
        </div>
    </div>
@endsection