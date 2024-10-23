@extends('layouts.master')

@section('title', 'IvoirRp - Ajouter un Clients')

@section('content')
@if($message = Session::get('message'))
    <div class="alert alert-success alert-dismissible fade show">
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        <strong>{{ $message }}</strong>
    </div>
@endif

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ url('admin/add-client') }}" method="POST" class="mt-5 bg-light p-5 rounded shadow" enctype="multipart/form-data" id="clientForm">
                @csrf

        <!-- Compte Contribuable -->
        <div class="mb-3">
            <label for="Compte_contribuable" class="form-label">Compte Contribuable <span class="text-danger">*</span></label>
            <input type="text" class="form-control bg-primary text-white @error('Compte_contribuable') is-invalid @enderror" id="Compte_contribuable" name="Compte_contribuable" required value="{{ old('Compte_contribuable') }}" minlength="9" maxlength="9">
            @error('Compte_contribuable')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
            <small class="form-text text-muted">Le compte contribuable doit contenir exactement 9 caractères.</small>
            
            <!-- Message d'erreur dynamique -->
            <div id="compteError" class="text-danger" style="display: none;"></div>
        </div>

        <!-- Autres Champs -->
        <div class="other-fields" style="display: none;">
                 <!-- Nom Société -->
                 <div class="mb-3">
                    <label for="Nom_Société" class="form-label">Nom Société <span class="text-danger">*</span></label>
                    <input type="text" class="form-control bg-primary text-white @error('Nom_Société') is-invalid @enderror" id="Nom_Société" name="Nom_Société" required value="{{ old('Nom_Société') }}">
                    @error('Nom_Société')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Abreviation -->
                <div class="mb-3">
                    <label for="abreviation" class="form-label">Abréviation</label>
                    <input type="text" class="form-control bg-primary text-white @error('abreviation') is-invalid @enderror" id="abreviation" name="abreviation" value="{{ old('abreviation') }}">
                    @error('abreviation')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Téléphone -->
                <div class="mb-3">
                    <label for="Telephone" class="form-label">Téléphone <span class="text-danger">*</span></label>
                    <input type="text" class="form-control bg-primary text-white @error('Telephone') is-invalid @enderror" id="Telephone" name="Telephone" pattern="^\d{10}$" maxlength="10" required value="{{ old('Telephone') }}">
                    @error('Telephone')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Cellulaire -->
                <div class="mb-3">
                    <label for="Cellulaire" class="form-label">Cellulaire <span class="text-danger">*</span></label>
                    <input type="text" class="form-control bg-primary text-white @error('Cellulaire') is-invalid @enderror" id="Cellulaire" name="Cellulaire" pattern="^\d{10}$" maxlength="10" required value="{{ old('Cellulaire') }}">
                    @error('Cellulaire')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Email -->
                <div class="mb-3">
                    <label for="Email" class="form-label">Email</label>
                    <input type="email" class="form-control bg-primary text-white @error('Email') is-invalid @enderror" id="Email" name="Email" value="{{ old('Email') }}">
                    @error('Email')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                
                {{-- <div class="mb-3">
                    <label for="Compte_contribuable" class="form-label">Compte Contribuable <span class="text-danger">*</span></label>
                    <input type="text" class="form-control bg-primary text-white @error('Compte_contribuable') is-invalid @enderror" id="Compte_contribuable" name="Compte_contribuable" required value="{{ old('Compte_contribuable') }}" minlength="9" maxlength="9">
                    @error('Compte_contribuable')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    <small class="form-text text-muted">Le compte contribuable doit contenir exactement 9 caractères.</small>
                </div> --}}

                <!-- RCCM -->
                <div class="mb-3">
                    <label for="RCCM" class="form-label">RCCM</label>
                    <input type="text" class="form-control bg-primary text-white @error('RCCM') is-invalid @enderror" id="RCCM" name="RCCM" value="{{ old('RCCM') }}">
                    @error('RCCM')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Direction 1 -->
                <div class="mb-3">
                    <label for="Direction_1_Nom_et_Prenoms" class="form-label">Nom et Prénoms Direction 1 <span class="text-danger">*</span></label>
                    <input type="text" class="form-control bg-primary text-white @error('Direction_1_Nom_et_Prenoms') is-invalid @enderror" id="Direction_1_Nom_et_Prenoms" name="Direction_1_Nom_et_Prenoms" required value="{{ old('Direction_1_Nom_et_Prenoms') }}">
                    @error('Direction_1_Nom_et_Prenoms')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="Direction_1_Contact" class="form-label">Contact Direction 1 <span class="text-danger">*</span></label>
                    <input type="text" class="form-control bg-primary text-white @error('Direction_1_Contact') is-invalid @enderror" id="Direction_1_Contact" name="Direction_1_Contact" required value="{{ old('Direction_1_Contact') }}">
                    @error('Direction_1_Contact')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Direction 2 -->
                <div class="mb-3">
                    <label for="Direction_2_Nom_et_Prenoms" class="form-label">Nom et Prénoms Direction 2 <span class="text-danger">*</span></label>
                    <input type="text" class="form-control bg-primary text-white @error('Direction_2_Nom_et_Prenoms') is-invalid @enderror" id="Direction_2_Nom_et_Prenoms" name="Direction_2_Nom_et_Prenoms" required value="{{ old('Direction_2_Nom_et_Prenoms') }}">
                    @error('Direction_2_Nom_et_Prenoms')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="Direction_2_Contact" class="form-label">Contact Direction 2 <span class="text-danger">*</span></label>
                    <input type="text" class="form-control bg-primary text-white @error('Direction_2_Contact') is-invalid @enderror" id="Direction_2_Contact" name="Direction_2_Contact" required value="{{ old('Direction_2_Contact') }}">
                    @error('Direction_2_Contact')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Direction 3 -->
                <div class="mb-3">
                    <label for="Direction_3_Nom_et_Prenoms" class="form-label">Nom et Prénoms Direction 3 <span class="text-danger">*</span></label>
                    <input type="text" class="form-control bg-primary text-white @error('Direction_3_Nom_et_Prenoms') is-invalid @enderror" id="Direction_3_Nom_et_Prenoms" name="Direction_3_Nom_et_Prenoms" required value="{{ old('Direction_2_Nom_et_Prenoms') }}">
                    @error('Direction_3_Nom_et_Prenoms')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="Direction_3_Contact" class="form-label">Contact Direction 3 <span class="text-danger">*</span></label>
                    <input type="text" class="form-control bg-primary text-white @error('Direction_3_Contact') is-invalid @enderror" id="Direction_3_Contact" name="Direction_3_Contact" required value="{{ old('Direction_3_Contact') }}">
                    @error('Direction_3_Contact')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Adresse -->
                <div class="mb-3">
                    <label for="Adresse" class="form-label">Adresse</label>
                    <input type="text" class="form-control bg-primary text-white @error('Adresse') is-invalid @enderror" id="Adresse" name="Adresse" value="{{ old('Adresse') }}">
                    @error('Adresse')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Commune -->
                <div class="mb-3">
                    <label for="Commune" class="form-label">Commune <span class="text-danger">*</span></label>
                    <input type="text" class="form-control bg-primary text-white @error('Commune') is-invalid @enderror" id="Commune" name="Commune" required value="{{ old('Commune') }}">
                    @error('Commune')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Quartier -->
                <div class="mb-3">
                    <label for="Quartier" class="form-label">Quartier <span class="text-danger">*</span></label>
                    <input type="text" class="form-control bg-primary text-white @error('Quartier') is-invalid @enderror" id="Quartier" name="Quartier" required value="{{ old('Quartier') }}">
                    @error('Quartier')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Rue -->
                <div class="mb-3">
                    <label for="Rue" class="form-label">Rue <span class="text-danger">*</span></label>
                    <input type="text" class="form-control bg-primary text-white @error('Rue') is-invalid @enderror" id="Rue" name="Rue" required value="{{ old('Rue') }}">
                    @error('Rue')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Zone -->
                <div class="mb-3">
                    <label for="Zone" class="form-label">Zone <span class="text-danger">*</span></label>
                    <input type="text" class="form-control bg-primary text-white @error('Zone') is-invalid @enderror" id="Zone" name="Zone" required value="{{ old('Zone') }}">
                    @error('Zone')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Autre (Note) -->
                <div class="mb-3">
                    <label for="Autre" class="form-label">Autre</label>
                    <textarea class="form-control bg-primary text-white" id="Autre" name="Autre" rows="3">{{ old('Autre') }}</textarea>
                </div>

                <button type="submit" class="btn btn-primary">Enregistrer</button>
        </div>










            </form>
        </div>
    </div>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const compteContribuableInput = document.getElementById('Compte_contribuable');
        const otherFields = document.querySelector('.other-fields');
        const compteError = document.getElementById('compteError');
    
        compteContribuableInput.addEventListener('input', function () {
            const value = compteContribuableInput.value;
            const regex = /^\d{7}-[A-Z]$/; // Regex pour vérifier le format 7 chiffres - 1 lettre majuscule
            let errorMessage = '';
    
            if (value.length !== 9) {
                errorMessage = 'Le compte contribuable doit comporter exactement 9 caractères.';
            } else if (!/^\d{7}-[A-Z]$/.test(value)) {
                const parts = value.split('-');
    
                if (parts.length !== 2) {
                    errorMessage = 'Le format doit être "7 chiffres - 1 lettre majuscule".';
                } else {
                    if (parts[0].length !== 7) {
                        errorMessage += 'La première partie doit contenir exactement 7 chiffres. ';
                    } else if (!/^\d+$/.test(parts[0])) {
                        errorMessage += 'La première partie doit contenir uniquement des chiffres. ';
                    }
                    if (parts[1].length !== 1) {
                        errorMessage += 'La deuxième partie doit contenir une seule lettre. ';
                    } else if (!/^[A-Z]$/.test(parts[1])) {
                        errorMessage += 'La deuxième partie doit être une lettre majuscule. ';
                    }
                }
            }
    
            if (errorMessage) {
                otherFields.style.display = 'none'; // Masque les autres champs
                compteError.style.display = 'block'; // Affiche le message d'erreur
                compteError.textContent = errorMessage; // Affiche le message d'erreur dynamique
            } else {
                otherFields.style.display = 'block'; // Affiche les autres champs
                compteError.style.display = 'none'; // Masque le message d'erreur
            }
        });
    });
    </script>
@endSection