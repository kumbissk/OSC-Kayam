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
          <h5>Modification d'un pensionnaire</h5>
          <hr>
          <div class="row">
          <div class="col-xl-12 col-md-12">
            <form method="POST" action="{{ route('updatePensionnaires', $boarder->id ) }}">
              @csrf  
              @method('PUT')
              <div class="input-group mb-3">
                <span class="input-group-text"><i data-feather="user"></i></span>
                  <input type="text" class="form-control" placeholder="Prenom" name="prenom"
                    value="{{ $boarder->prenom }}">
                </span>
              </div>
              <div class="input-group mb-3">
                <span class="input-group-text"><i data-feather="user"></i></span>
                  <input type="text" class="form-control" placeholder="Nom" name="nom" value="{{ $boarder->nom }}">
                </span>
              </div>
              <div class="input-group mb-3">
                <span class="input-group-text"><i data-feather="calendar"></i></span>
                  <input type="date" class="form-control" name="date_naissance" value="{{ $boarder->date_naissance }}">
                </span>
              </div>
              <div class="input-group mb-3">
                <span class="input-group-text"><i data-feather="help-circle"></i></span>
                  <input type="text" class="form-control" placeholder="Situation Matrimoniale" name="situation_matrimoniale" value="{{ $boarder->situation_matrimoniale }}">
                </span>
              </div>
              <div class="input-group mb-3">
                <span class="input-group-text"><i data-feather="calendar"></i>La date d'entrée</span>
                  <input type="date" class="form-control" id="date_entree" name="date_entree" value="{{ $boarder->date_entree }}">
                </span>
              </div>
              <div class="input-group mb-3">
                <span class="input-group-text"><i data-feather="calendar"></i>La date de sortie</span>
                  <input type="date" class="form-control" id="date_sortie" name="date_sortie" value="{{ $boarder->date_sortie }}">
                </span>
              </div>
              <div class="input-group mb-3">
                <span class="input-group-text"><i data-feather="user"></i></span>
                  <input type="number" class="form-control" placeholder="Nombre enfants" name="nombre_enfants" value="{{ $boarder->nombre_enfants }}">
                </span>
              </div>
              <div class="input-group mb-3">
                <span class="input-group-text"><i data-feather="user"></i>Tranche d'age enfants</span>
                    <select id="tranche_age" name="tranche_age_enfants" class="form-control" value="{{ $boarder->tranche_age_enfants }}" disabled>
                        <option value="Nourrisson">Nourrisson</option>
                        <option value="Tout-petit">Tout-petit</option>
                        <option value="Enfant d'âge préscolaire">Enfant d'âge préscolaire</option>
                        <option value="Enfant d'âge scolaire">Enfant d'âge scolaire</option>
                        <option value="Adolescent">Adolescent</option>
                    </select>
                </span>
              </div>
              <div class="input-group mb-3">
                <span class="input-group-text"><i data-feather="home"></i></span>
                  <input type="text" class="form-control" placeholder="Lieu de residence" name="lieu_residence" value="{{ $boarder->lieu_residence }}">
                </span>
              </div>
              <div class="input-group mb-3">
                <span class="input-group-text"><i data-feather="home"></i></span>
                  <input type="text" class="form-control" placeholder="Formes de violence" name="formes_violence_identifiees" value="{{ $boarder->formes_violence_identifiees }}">
                </span>
              </div>
              <div class="input-group mb-3">
                <span class="input-group-text"><i data-feather="edit"></i></span>
                <textarea class="form-control" name="recit_histoire" rows="5" autocomplete="name" autofocus value="{{ $boarder->recit_histoire }}"></textarea>
                </span>
              </div>
                <button type="submit" class="btn btn-block btn-primary mb-4">
                    {{ ("Modifier") }}
                </button>
                <a href="{{ route('listPensionnaires') }}" class="btn btn-block btn-primary mb-4">Annuler</a>
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