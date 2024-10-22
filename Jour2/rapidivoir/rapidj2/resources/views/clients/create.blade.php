<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bootstrap demo</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <style>
          /* Style personnalisé pour les champs de saisie */
          input[type="text"], input[type="email"], input[type="file"], input[type="number"], input[type="date"], textarea {
              background-color: #ADD8E6; /* Bleu clair */
              color: #0B0B0B; /* Noir foncé */
          }
  
          /* Changement de couleur du texte lors de la saisie */
          input::placeholder, textarea::placeholder {
              color: #0B0B0B; /* Noir foncé pour le placeholder aussi */
          }
      </style>
      </head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="/">Navbar</a>
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
        </div>
      </nav>
      @if($message = Session::get('success'))
      <div class="alert alert-success alert-dismissible fade show">
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        <strong>{{ $message }}</strong>
      </div>
      @endif
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    
    <div class="container">
      <div class="row">
          <div class="col-sm-12">
              <form action="/client/store" method="POST" class="mt-5" enctype="multipart/form-data" id="clientForm">
                  @csrf      
                  <!-- Nom Société -->
                  <div class="mb-3">
                      <label for="Nom_Société" class="form-label">Nom Société <span class="text-danger">*</span></label>
                      <input type="text" class="form-control @error('Nom_Société') is-invalid @enderror" id="Nom_Société" name="Nom_Société" required value="{{ old('Nom_Société') }}">
                        @error('Nom_Société')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                  </div>

                  <!-- Image -->
                  <div class="mb-3">
                      <label for="image" class="form-label">Logo/Image</label>
                      <input type="file" class="form-control" id="image" name="image">
                  </div>

                  <!-- Téléphone -->
                      <label for="Telephone" class="form-label">Téléphone <span class="text-danger">*</span></label>
                      <div class="mb-3">
                        <input type="text" class="form-control @error('Telephone') is-invalid @enderror" id="Telephone" name="Telephone" pattern="^\d{10}$" maxlength="10" required value="{{ old('Telephone') }}">
                          @error('Telephone')
                            <div class="invalid-feedback">{{ $message }}</div>
                          @enderror
                      </div>

                  <!-- Cellulaire -->
                  <div class="mb-3">
                      <label for="Cellulaire" class="form-label">Cellulaire <span class="text-danger">*</span></label>
                      <input type="text" class="form-control @error('Cellulaire') is-invalid @enderror" id="Cellulaire" name="Cellulaire" pattern="^\d{10}$" maxlength="10" required value="{{ old('Cellulaire') }}">
                      @error('Cellulaire')
                          <div class="invalid-feedback">{{ $message }}</div>
                      @enderror
                  </div>

                  <!-- Email -->
                  <div class="mb-3">
                      <label for="Email" class="form-label">Email</label>
                      <input type="email" class="form-control @error('Email') is-invalid @enderror" id="Email" name="Email" required value="{{ old('Email') }}">
                      @error('Email')
                          <div class="invalid-feedback">{{ $message }}</div>
                      @enderror
                  </div>

                  <!-- Compte Contribuable -->
                  <div class="mb-3">
                      <label for="Compte_contribuable" class="form-label">Compte Contribuable <span class="text-danger">*</span></label>
                      <input type="text" class="form-control @error('Compte_contribuable') is-invalid @enderror" id="Compte_contribuable" name="Compte_contribuable" required value="{{ old('Compte_contribuable') }}" minlength="9" maxlength="9">
                      @error('Compte_contribuable')
                          <div class="invalid-feedback">{{ $message }}</div>
                      @enderror
                      <small class="form-text text-muted">Le compte contribuable doit contenir exactement 9 caractères (exemple: 0000000-X).</small>
                  </div>

                  <!-- RCCM -->
                  <div class="mb-3">
                      <label for="RCCM" class="form-label">RCCM</label>
                      <input type="text" class="form-control" id="RCCM" name="RCCM">
                  </div>

                  <!-- Informations Direction (1, 2, 3) -->
                  <div class="mb-3">
                      <!-- Direction 1 -->
                      <div class="row">
                          <div class="col-md-6">
                              <label for="Direction_1_Nom_et_Prenoms" class="form-label">Nom et Prénoms Direction 1 <span class="text-danger">*</span></label>
                              <input type="text" class="form-control" id="Direction_1_Nom_et_Prenoms" name="Direction_1_Nom_et_Prenoms" required value="{{ old('Direction_1_Nom_et_Prenoms') }}">
                              <div class="invalid-feedback">Veuillez entrer le nom et prénoms de la direction 1.</div>
                          </div>
                          <div class="col-md-6">
                              <label for="Direction_1_Contact" class="form-label">Contact Direction 1 <span class="text-danger">*</span></label>
                              <input type="text" class="form-control" id="Direction_1_Contact" name="Direction_1_Contact" required value="{{ old('Direction_1_Contact') }}">
                              <div class="invalid-feedback">Veuillez entrer le contact de la direction 1.</div>
                          </div>
                      </div>

                      <!-- Direction 2 -->
                      <div class="row mt-3">
                          <div class="col-md-6">
                              <label for="Direction_2_Nom_et_Prenoms" class="form-label">Nom et Prénoms Direction 2</label>
                              <input type="text" class="form-control" id="Direction_2_Nom_et_Prenoms" name="Direction_2_Nom_et_Prenoms">
                          </div>
                          <div class="col-md-6">
                              <label for="Direction_2_Contact" class="form-label">Contact Direction 2</label>
                              <input type="text" class="form-control" id="Direction_2_Contact" name="Direction_2_Contact">
                          </div>
                      </div>

                      <!-- Direction 3 -->
                      <div class="row mt-3">
                          <div class="col-md-6">
                              <label for="Direction_3_Nom_et_Prenoms" class="form-label">Nom et Prénoms Direction 3</label>
                              <input type="text" class="form-control" id="Direction_3_Nom_et_Prenoms" name="Direction_3_Nom_et_Prenoms">
                          </div>
                          <div class="col-md-6">
                              <label for="Direction_3_Contact" class="form-label">Contact Direction 3</label>
                              <input type="text" class="form-control" id="Direction_3_Contact" name="Direction_3_Contact">
                          </div>
                      </div>
                  </div>

                  <!-- Adresse -->
                  <div class="mb-3">
                      <label for="Adresse" class="form-label">Adresse</label>
                      <input type="text" class="form-control" id="Adresse" name="Adresse">
                  </div>

                  <!-- Ville -->
                  <div class="mb-3">
                      <label for="Ville" class="form-label">Ville <span class="text-danger">*</span></label>
                      <input type="text" class="form-control" id="Ville" name="Ville" required value="{{ old('Ville') }}">
                      <div class="invalid-feedback">Veuillez entrer la ville.</div>
                  </div>

                  <!-- Commune -->
                  <div class="mb-3">
                      <label for="Commune" class="form-label">Commune <span class="text-danger">*</span></label>
                      <input type="text" class="form-control" id="Commune" name="Commune" required value="{{ old('Commune') }}">
                      <div class="invalid-feedback">Veuillez entrer la commune.</div>
                  </div>

                  <!-- Quartier -->
                  <div class="mb-3">
                      <label for="Quartier" class="form-label">Quartier <span class="text-danger">*</span></label>
                      <input type="text" class="form-control" id="Quartier" name="Quartier" required value="{{ old('Quartier') }}">
                      <div class="invalid-feedback">Veuillez entrer le quartier.</div>
                  </div>

                  <div class="mb-3">
                    <label for="Rue" class="form-label">Rue <span class="text-danger">*</span></label>
                    <input type="text" class="form-control @error('Rue') is-invalid @enderror" id="Rue" name="Rue" required value="{{ old('Rue') }}" minlength="3" maxlength="100">
                    @error('Rue')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    <small class="form-text text-muted">La rue doit contenir entre 3 et 100 caractères.</small>
                </div>                

                  <!-- Zone -->
                  <div class="mb-3">
                    <label for="Zone" class="form-label">Zone <span class="text-danger">*</span></label>
                    <input type="text" class="form-control @error('Zone') is-invalid @enderror" id="Zone" name="Zone" required value="{{ old('Zone') }}" minlength="3" maxlength="50">
                    @error('Zone')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    <small class="form-text text-muted">La zone doit contenir entre 3 et 50 caractères.</small>
                  </div>


                  <!-- Note -->
                  <div class="mb-3">
                      <label for="Note" class="form-label">Note</label>
                      <textarea class="form-control" id="Note" name="Note" rows="3"></textarea>
                  </div>

                  <button type="submit" class="btn btn-primary">Enregistrer</button>
              </form>
          </div>
      </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuhM6Y7dAo0yS1uY1rU6HTU5odkwm2REY1uM3Z8KyJvF0E4" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-DH7Vcl7B4RRAAaLoGhDHKJ6tCt+4x/gTpP3Nd91c16tGbBMeEKU33F5CH5e71T4Y" crossorigin="anonymous"></script>
  <script>
      // Validation du formulaire
      (function () {
          'use strict'
          // Sélectionner tous les formulaires avec la classe "needs-validation"
          var forms = document.querySelectorAll('.needs-validation')

          // Boucle sur chaque formulaire
          Array.prototype.slice.call(forms)
              .forEach(function (form) {
                  form.addEventListener('submit', function (event) {
                      if (!form.checkValidity()) {
                          event.preventDefault() // Empêche l'envoi du formulaire
                          event.stopPropagation() // Arrête la propagation de l'événement
                      }
                      form.classList.add('was-validated') // Ajoute la classe de validation
                  }, false)
              })
      })()
  </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>