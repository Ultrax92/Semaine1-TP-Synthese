<div class="card">
    <a href="{{ route('animal.show', $animal->id) }}">
        <img src="{{ asset($animal->photo) }}" alt="{{ $animal->name }}">
    </a>

    <div class="card-body">
        <h3>{{ $animal->name }}</h3>
        <div class="infos">
            <strong>Espèce :</strong> {{ $animal->species }}<br>
            <strong>Age :</strong> {{ $animal->age }} ans<br>
            {{ \Illuminate\Support\Str::limit($animal->description, 60) }}
        </div>
    </div>

    <div class="actions">
        <a href="{{ route('animal.update', $animal->id) }}" class="link-blue">Modifier</a>
        <a href="{{ route('animal.delete', $animal->id) }}" class="link-blue">Supprimer</a>
    </div>
</div>