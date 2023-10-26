@extends('layouts.admin')

@section('content')
<div class="pc-container">
  <div class="pcoded-content">
    <!-- [ breadcrumb ] start -->
    <div class="page-header">
      <div class="page-block">
        <div class="row align-items-center">
          <div class="col-md-6">
            <div class="page-header-title">
              <h5 class="m-b-10">Pensionnaires</h5>
            </div>
            <ul class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{ route('dashboard')}}">Tableau de bord</a></li>
              <li class="breadcrumb-item"><a href="{{ route('listPensionnaires')}}">Liste des pensionnaires</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-12">
      <div class="card mt-5">
        <div class="card-header">
          <h5>Formulaire</h5>
        </div>
        <div class="card-body">
          <h5>Enregistrement des pensionnaires</h5>
          <hr>
          <div class="row">
          <div class="col-xl-12 col-md-12">
            <form method="POST" action="{{ route('pensionnaires') }}">
              @csrf  
              <div class="input-group mb-3">
                <span class="input-group-text"><i data-feather="user"></i></span>
                  <input type="text" class="form-control" placeholder="Prenom" name="prenom"
                    autocomplete="name" autofocus>
                    @if ($errors->has('prenom'))
                      <span class="invalid-feedback d-block" style="text-align: center">
                        <strong>{{ $errors->first('prenom') }}</strong>
                      </span>
                    @endif
                </span>
              </div>
              <div class="input-group mb-3">
                <span class="input-group-text"><i data-feather="user"></i></span>
                  <input type="text" class="form-control" placeholder="Nom" name="nom"
                    autocomplete="name" autofocus>
                    @if ($errors->has('nom'))
                      <span class="invalid-feedback d-block" style="text-align: center">
                        <strong>{{ $errors->first('nom') }}</strong>
                      </span>
                    @endif
                </span>
              </div>
              <div class="input-group mb-3">
                <span class="input-group-text"><i data-feather="calendar"></i></span>
                  <input type="date" class="form-control"  name="date_naissance"
                    autocomplete="name" autofocus>
                    @if ($errors->has('date_naissance'))
                      <span class="invalid-feedback d-block" style="text-align: center">
                        <strong>{{ $errors->first('date_naissance') }}</strong>
                      </span>
                    @endif
                </span>
              </div>
              <div class="input-group mb-3">
                <span class="input-group-text"><i data-feather="help-circle"></i></span>
                  <input type="text" class="form-control" placeholder="Situation Matrimoniale" name="situation_matrimoniale" autocomplete="name" autofocus>
                    @if ($errors->has('situation_matrimoniale'))
                      <span class="invalid-feedback d-block" style="text-align: center">
                        <strong>{{ $errors->first('situation_matrimoniale') }}</strong>
                      </span>
                    @endif
                </span>
              </div>
              <div class="input-group mb-3">
                <span class="input-group-text"><i data-feather="calendar"></i>La date d'entrée</span>
                  <input type="date" class="form-control" id="date_entree" name="date_entree"
                    autocomplete="name" autofocus>
                    @if ($errors->has('date_entree'))
                      <span class="invalid-feedback d-block" style="text-align: center">
                        <strong>{{ $errors->first('date_entree') }}</strong>
                      </span>
                    @endif
                </span>
              </div>
              <div class="input-group mb-3">
                <span class="input-group-text"><i data-feather="calendar"></i>La date de sortie</span>
                  <input type="date" class="form-control" id="date_sortie" name="date_sortie"
                    autocomplete="name" autofocus>
                    @if ($errors->has('date_sortie'))
                      <span class="invalid-feedback d-block" style="text-align: center">
                        <strong>{{ $errors->first('date_sortie') }}</strong>
                      </span>
                    @endif
                </span>
              </div>
              <div class="input-group mb-3">
                <span class="input-group-text"><i data-feather="user"></i></span>
                  <input type="number" class="form-control" placeholder="Nombre enfants" name="nombre_enfants"
                    autocomplete="name" autofocus>
                    @if ($errors->has('nombre_enfants'))
                      <span class="invalid-feedback d-block" style="text-align: center">
                        <strong>{{ $errors->first('nombre_enfants') }}</strong>
                      </span>
                    @endif
                </span>
              </div>
              <div class="input-group mb-3">
                <span class="input-group-text"><i data-feather="user"></i>Tranche d'age enfants</span>
                <select id="tranche_age" name="tranche_age_enfants" class="form-control" disabled>
                    <option value="Nourrisson">Nourrisson</option>
                    <option value="Tout-petit">Tout-petit</option>
                    <option value="Enfant d'âge préscolaire">Enfant d'âge préscolaire</option>
                    <option value="Enfant d'âge scolaire">Enfant d'âge scolaire</option>
                    <option value="Adolescent">Adolescent</option>
                </select>
                @if ($errors->has('tranche_age_enfants'))
                    <span class="invalid-feedback d-block" style="text-align: center">
                        <strong>{{ $errors->first('tranche_age_enfants') }}</strong>
                    </span>
                @endif
                </span>
              </div>
              <div class="input-group mb-3">
                <span class="input-group-text"><i data-feather="home"></i></span>
                  <input type="text" class="form-control" placeholder="Lieu de residence" name="lieu_residence"
                    autocomplete="name" autofocus>
                    @if ($errors->has('lieu_residence'))
                      <span class="invalid-feedback d-block" style="text-align: center">
                        <strong>{{ $errors->first('lieu_residence') }}</strong>
                      </span>
                    @endif
                </span>
              </div>
              <div class="input-group mb-3">
                <span class="input-group-text"><i data-feather="home"></i></span>
                  <input type="text" class="form-control" placeholder="Formes de violence" name="formes_violence_identifiees"
                    autocomplete="name" autofocus>
                    @if ($errors->has('formes_violence_identifiees'))
                      <span class="invalid-feedback d-block" style="text-align: center">
                        <strong>{{ $errors->first('formes_violence_identifiees') }}</strong>
                      </span>
                    @endif
                </span>
              </div>
              <div class="input-group mb-3">
                <span class="input-group-text"><i data-feather="edit"></i></span>
                <textarea class="form-control" name="recit_histoire" rows="5" autocomplete="name" autofocus></textarea>
                    @if ($errors->has('recit_histoire'))
                      <span class="invalid-feedback d-block" style="text-align: center">
                        <strong>{{ $errors->first('recit_histoire') }}</strong>
                      </span>
                    @endif
                </span>
              </div>
              <button type="submit" class="btn btn-primary btn-block mb-4">
                {{ "Enregistrer" }}
                </button>
                @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
                @endif
                
            </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

{{-- <script>
    document.addEventListener("DOMContentLoaded", function() {
        const nombreEnfantsInput = document.getElementById("nombre_enfants");
        const trancheAgeInput = document.getElementById("tranche_age");
    
        nombreEnfantsInput.addEventListener("change", function() {
            if (parseInt(nombreEnfantsInput.value) === 1) {
                trancheAgeInput.removeAttribute("disabled");
            } else {
                trancheAgeInput.setAttribute("disabled", "true");
                trancheAgeInput.value = ""; // Réinitialisez la valeur du champ si le nombre d'enfants n'est pas égal à 1.
            }
        });
    });
</script> --}}