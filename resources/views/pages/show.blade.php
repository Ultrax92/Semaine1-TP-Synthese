@extends('layouts.app')

@section('content')
    <div class="detail-container">
        <img src="{{ asset($animal->photo) }}" alt="{{ $animal->name }}" class="detail-img">
        
        <div class="detail-info">
            <h2>{{ $animal->name }}</h2>
            <p><strong>Espèce :</strong> {{ $animal->species }}</p>
            <p><strong>Age :</strong> {{ $animal->age }} ans</p>
            <div class="detail-desc">
                {{ $animal->description }}
            </div>
        </div>
    </div>
@endsection