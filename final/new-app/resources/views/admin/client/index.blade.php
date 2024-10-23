@extends('layouts.master')

@section('title', 'IvoirRp - Clients')

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Clients</h1>

    <div class="card">
        <div class="card-header">
            <h4>Liste des Clients <a href="{{ url('admin/add-client') }}" class="btn btn-primary btn-sm float-end">Ajouter un Client</a>
            </h4>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table table-striped table-bordered mt-3">
            <thead class="table-light">
                <tr>
                    <th scope="col" class="text-nowrap">ID</th>
                    <th scope="col" class="text-nowrap">Code Unique</th>
                    <th scope="col" class="text-nowrap">Nom Société</th>
                    <th scope="col" class="text-nowrap">Abreviation</th>
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
                    <th scope="col" class="text-nowrap">Commune</th>
                    <th scope="col" class="text-nowrap">Quartier</th>
                    <th scope="col" class="text-nowrap">Rue</th>
                    <th scope="col" class="text-nowrap">Zone</th>
                    <th scope="col" class="text-nowrap">Autre</th>
                    <th scope="col" class="text-nowrap">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($clients as $client)
                <tr>
                    <td>{{ $loop->index+1 }}</td>
                    <td class="text-nowrap">{{ $client->code_unique }}</td>
                    <td>{{ $client->Nom_Société }}</td>
                    <td>{{ $client->abreviation }}</td> <!-- Abreviation -->
                    <td>{{ $client->Telephone }}</td> <!-- Téléphone -->
                    <td>{{ $client->Cellulaire }}</td> <!-- Cellulaire -->
                    <td>{{ $client->Email }}</td> <!-- Email -->
                    <td>{{ $client->Compte_contribuable }}</td> <!-- Compte Contribuable -->
                    <td class="text-nowrap">{{ $client->RCCM }}</td> <!-- RCCM -->
                    <td class="text-nowrap">{{ $client->Direction_1_Nom_et_Prenoms }}</td> <!-- Direction 1 (Nom et Prénoms) -->
                    <td class="text-nowrap">{{ $client->Direction_1_Contact }}</td> <!-- Direction 1 (Contact) -->
                    <td class="text-nowrap">{{ $client->Direction_2_Nom_et_Prenoms }}</td> <!-- Direction 2 (Nom et Prénoms) -->
                    <td class="text-nowrap">{{ $client->Direction_2_Contact }}</td> <!-- Direction 2 (Contact) -->
                    <td class="text-nowrap">{{ $client->Direction_3_Nom_et_Prenoms }}</td> <!-- Direction 3 (Nom et Prénoms) -->
                    <td class="text-nowrap">{{ $client->Direction_3_Contact }}</td> <!-- Direction 3 (Contact) -->
                    <td>{{ $client->Adresse }}</td> <!-- Adresse -->
                    <td>{{ $client->Commune }}</td> <!-- Commune -->
                    <td>{{ $client->Quartier }}</td> <!-- Quartier -->
                    <td>{{ $client->Rue }}</td> <!-- Rue -->
                    <td>{{ $client->Zone }}</td> <!-- Zone -->
                    <td>{{ $client->Autre }}</td> <!-- Autre -->
                    <td>
                        <a href="client/{{ $client->id }}/edit" class="btn btn-warning btn-sm">Éditer</a>
                        <form action="/client/{{ $client->id }}/delete" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm mt-2" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce client ?');">Supprimer</button>
                        </form>
                    </td>
                </tr>
                @endforeach
                <!-- Vous pouvez ajouter d'autres lignes ici -->
            </tbody>
        </table>
    </div>
    

    @if(session('message'))
        <div class="alert alert-success" role="alert">
            {{ session('message') }}
        </div>
    @endif
</div>
@endSection
