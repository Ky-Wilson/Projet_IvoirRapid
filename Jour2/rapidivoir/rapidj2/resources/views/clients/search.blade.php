<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Clients</a>
                    </li>
                </ul>
            </div>
            <form class="d-flex" role="search" method="get" action="{{ url('client/search') }}">
                <div class="input-group me-2">
                    <input class="form-control" name="query" type="search" placeholder="Rechercher par compte contribuable" aria-label="compte contribuable">
                </div>
                <div class="input-group me-2">
                    <input class="form-control" name="zone" type="text" placeholder="Rechercher par Zone" aria-label="Zone">
                </div>
                <div class="input-group me-2">
                    <input class="form-control" name="ville" type="text" placeholder="Rechercher par Ville" aria-label="Ville">
                </div>
                <button class="btn btn-outline-success" type="submit">Rechercher</button>
            </form>
            
        </div>
    </nav>

    <div class="container">
        <div class="text-right">
            <a href="client/create" class="btn btn-primary mt-2">Nouveau client</a>
        </div>

        <div class="table-responsive">
            <table class="table table-striped table-bordered mt-3">
                <thead class="table-light">
                    <tr>
                        <th scope="col" class="text-nowrap">ID</th>
                        <th scope="col" class="text-nowrap">Nom Société</th>
                        <th scope="col" class="text-nowrap">Image</th>
                        <th scope="col" class="text-nowrap">Téléphone</th>
                        <th scope="col" class="text-nowrap">Cellulaire</th>
                        <th scope="col" class="text-nowrap">Email</th>
                        <th scope="col" class="text-nowrap">Compte Contribuable</th>
                        <th scope="col" class="text-nowrap">RCCM</th>
                        <th scope="col" class="text-nowrap">Direction 1 (Nom et Prénoms)</th>
                        <th scope="col" class="text-nowrap">Direction 1 (Contact)</th>
                        <th scope="col" class="text-nowrap">Direction 2 (Nom et Prénoms)</th>
                        <th scope="col" class="text-nowrap">Direction 2 (Contact)</th>
                        <th scope="col" class="text-nowrap">Direction 3 (Nom et Prénoms)</th>
                        <th scope="col" class="text-nowrap">Direction 3 (Contact)</th>
                        <th scope="col" class="text-nowrap">Adresse</th>
                        <th scope="col" class="text-nowrap">Ville</th>
                        <th scope="col" class="text-nowrap">Commune</th>
                        <th scope="col" class="text-nowrap">Quartier</th>
                        <th scope="col" class="text-nowrap">Rue</th>
                        <th scope="col" class="text-nowrap">Zone</th>
                        <th scope="col" class="text-nowrap">Autre</th>
                        <th scope="col" class="text-nowrap">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @if(isset($clients) && $clients->isNotEmpty())
                        @foreach ($clients as $client)
                            <tr>
                                <td>{{ $loop->index + 1 }}</td>
                                <td><a href="client/{{ $client->id }}/show">{{ $client->Nom_Société }}</a></td>
                                <td><img src="/clients/{{ $client->image }}" class="img-thumbnail"></td>
                                <td>{{ $client->Telephone }}</td>
                                <td>{{ $client->Cellulaire }}</td>
                                <td>{{ $client->Email }}</td>
                                <td>{{ $client->Compte_contribuable }}</td>
                                <td class="text-nowrap">{{ $client->RCCM }}</td>
                                <td class="text-nowrap">{{ $client->Direction_1_Nom_et_Prenoms }}</td>
                                <td class="text-nowrap">{{ $client->Direction_1_Contact }}</td>
                                <td class="text-nowrap">{{ $client->Direction_2_Nom_et_Prenoms }}</td>
                                <td class="text-nowrap">{{ $client->Direction_2_Contact }}</td>
                                <td class="text-nowrap">{{ $client->Direction_3_Nom_et_Prenoms }}</td>
                                <td class="text-nowrap">{{ $client->Direction_3_Contact }}</td>
                                <td>{{ $client->Adresse }}</td>
                                <td>{{ $client->Ville }}</td>
                                <td>{{ $client->Commune }}</td>
                                <td>{{ $client->Quartier }}</td>
                                <td>{{ $client->Rue }}</td>
                                <td>{{ $client->Zone }}</td>
                                <td>{{ $client->Autre }}</td>
                                <td>
                                    <a href="client/{{ $client->id }}/edit" class="btn btn-warning btn-sm">Éditer</a>
                                    <form action="/client/{{ $client->id }}/delete" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm mt-2" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce client ?');">Supprimer</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="21" class="text-center">Aucun client trouvé.</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
