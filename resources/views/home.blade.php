@extends('layouts.app')

@section('content')
    <h1>Nos animaux</h1>

    <div class="grid">
        @foreach($animals as $animal)
            <x-animal-card :animal="$animal" />
        @endforeach
    </div>
@endsection