<h1>Liste des Livres</h1>
<a href="/livre/create">Ajouter un nouveau livre</a>
<ul>
    @foreach($livres as $livre)
        <li>
            <a href="/livre/{{ $livre->id }}">{{ $livre->title }} - {{ $livre->author }}</a>
        </li>
    @endforeach
</ul>
