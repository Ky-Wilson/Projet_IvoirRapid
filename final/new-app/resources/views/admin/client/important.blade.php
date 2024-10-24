@extends('layouts.master')

@section('title', 'IvoirRp - Infos Importantes Clients')

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Informations Importantes des Clients</h1>

    <div class="card">
        <div class="card-header">
            <h4>Clients - Infos Importantes 
                <a href="{{ url('admin/add-client') }}" class="btn btn-primary btn-sm float-end d-print-none">Ajouter un Client</a>
                <button onclick="window.print()" class="btn btn-secondary btn-sm float-end d-print-none me-2">Imprimer</button>
            </h4>
        </div>
    </div>

    <div class="table-responsive">
        <table class="table table-striped table-bordered mt-3" id="printTable">
            <thead class="table-light">
                <tr>
                    <th scope="col" class="text-nowrap">Code Unique</th>
                    <th scope="col" class="text-nowrap">Nom Société</th>
                    <th scope="col" class="text-nowrap">Téléphone</th>
                    <th scope="col" class="text-nowrap">Email</th>
                    <th scope="col" class="text-nowrap">Compte Contribuable</th>
                    <th scope="col" class="text-nowrap">Adresse</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($clients as $client)
                <tr>
                    <td class="text-nowrap">{{ $client->code_unique }}</td>
                    <td class="text-nowrap">{{ $client->Nom_Société }}</td>
                    <td class="text-nowrap">{{ $client->Telephone }}</td>
                    <td class="text-nowrap">{{ $client->Email }}</td>
                    <td class="text-nowrap">{{ $client->Compte_contribuable }}</td>
                    <td class="text-nowrap">{{ $client->Adresse }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
    @if(session('message'))
        <div class="alert alert-success" role="alert">
            {{ session('message') }}
        </div>
    @endif
</div>

<!-- CSS spécifique pour l'impression -->
<style>
    @media print {
        body * {
            visibility: hidden; /* Cache tous les éléments */
        }
        #printTable, #printTable * {
            visibility: visible; /* Rend visible uniquement le tableau */
        }
        #printTable {
            position: absolute; /* Positionne le tableau pour occuper toute la page */
            left: 0;
            top: 0;
        }
        /* Empêche les retours à la ligne dans le tableau */
        #printTable td, #printTable th {
            white-space: nowrap; 
        }
    }
</style>
@endsection
