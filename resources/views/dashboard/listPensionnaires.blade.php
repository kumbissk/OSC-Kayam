@extends('layouts.admin')

@section('content')

<div class="pc-container">
    <div class="pcoded-content">
        <div class="page-header d-block">
            <div class="row align-items-center">
                <div class="col-md-10">
                   <div class="page-header-title">
                        <h5 class="m-b-10">Liste des pensionnaires</h5>
                    </div>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('pensionnaires') }}">Pensionnaires</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-12 col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Basic Table</h5>
                    </div>
                    <div class="card-body table-border-style">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col"><a href="#">Id</a></th>
                                        <th scope="col"><a href="#">Prenom</a></th>
                                        <th scope="col"><a href="#">Nom</a></th>
                                        <th scope="col"><a href="#">Date_naissance</a></th>
                                        <th scope="col"><a href="#">Situation_matrimoniale</a></th>
                                        <th scope="col"><a href="#">Date_entree</a></th>
                                        <th scope="col"><a href="#">Date_sortie</a></th>
                                        <th scope="col"><a href="#">Nombre_enfants</a></th>
                                        <th scope="col"><a href="#">Tranche_age_enfants</a></th>
                                        <th scope="col"><a href="#">Lieu_residence</a></th>
                                        <th scope="col"><a href="#">Formes_violence_identifiees</a></th>
                                        <th scope="col"><a href="#">Recit_histoire</a></th>
                                        <th scope="col"><a href="#">Details</a></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($boarders as $boarder)
                                        <tr>
                                            <th scope="row">{{ $boarder->id }}</th>
                                            <td>{{ $boarder->prenom }}</td>
                                            <td>{{ $boarder->nom }}</td>
                                            <td>{{ $boarder->date_naissance }}</td>
                                            <td>{{ $boarder->situation_matrimoniale }}</td>
                                            <td>{{ $boarder->date_entree }}</td>
                                            <td>{{ $boarder->date_sortie}}</td>
                                            <td>{{ $boarder->nombre_enfants }}</td>
                                            <td>{{ $boarder->tranche_age_enfants }}</td>
                                            <td>{{ $boarder->lieu_residence }}</td>
                                            <td>{{ $boarder->formes_violence_identifiees}}</td>
                                            <td>{{ $boarder->recit_histoire }}</td>
                                            <td>
                                                <a class="btn btn-success" href="{{ route('showPensionnaires', $boarder) }}">Modifier</a>
                                                <a href="#"><button class="btn btn-danger" onclick="if(confirm('Voulez-vous vraiment supprimer la personne ?'));{document.getElementById('{{ $boarder->id }}').submit()}">Supprimer</button></a>
                                                <form id="{{ $boarder->id }}" action="{{ route('deletePensionnaires', $boarder) }}" method="post">
                                                    @csrf
                                                    <input type="hidden" name="_method" value="delete">
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                @if(session('success'))
                                    <div class="alert alert-success">{{ session('success') }}</div>
                                @endif
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


