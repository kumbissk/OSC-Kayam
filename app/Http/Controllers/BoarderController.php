<?php

namespace App\Http\Controllers;

use App\Models\Boarder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BoarderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $boarders = Boarder::all();
        return view('dashboard.listPensionnaires', ['boarders' => $boarders]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.pensionnaires');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
    */

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'nom' => ['required', 'string', 'max:255'],
            'prenom' => ['required', 'string', 'max:255'],
            // 'date_naissance' => ['required', 'date', 'max:255'],
            'situation_matrimoniale' => ['required', 'string', 'max:255'],
            // 'date_entree' => ['required', 'date', 'max:255'],
            // 'date_sortie' => ['required', 'date', 'max:255'],
            'nombre_enfants' => ['required', 'integer', 'max:255'],
            'tranche_age_enfants' => ['required', 'string', 'max:255'],
            'lieu_residence' => ['required', 'string', 'max:255'],
            'formes_violence_identifiees' => ['required', 'string', 'max:255'],
            'recit_histoire' => ['required', 'string', 'max:255'],
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $messages = [
        //     'prenom.required' => 'Le prénom est obligatoire',
        //     'nom.required' => 'Le nom est obligatoire',
        //     'date_naissance.required' => 'La date de naissance est obligatoire',
        //     'situation_matrimoniale.required' => 'La situation matrimoniale est obligatoire',
        //     'date_entree.required' => 'La date d\'entrée est obligatoire',

        //     'nombre_enfants.required' => 'Le nombre d\'enfants est obligatoire',
        //     'tranche_age_enfants.required' => 'La tranche d\'âge des enfants est obligatoire',
        //     'lieu_residence.required' => 'Le lieu de résidence est obligatoire',
        //     'formes_violence_identifiees.required' => 'Les formes de violence identifiées sont obligatoires',
        //     'recit_histoire.required' => 'Le récit de l\'histoire est obligatoire',
        // ];

        Boarder::create([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'date_naissance' => $request->date_naissance,
            'situation_matrimoniale' => $request->situation_matrimoniale,
            'date_entree' => $request->date_entree,
            'date_sortie' => $request->date_sortie,
            'nombre_enfants' => $request->nombre_enfants,
            'tranche_age_enfants' => $request->tranche_age_enfants,
            'lieu_residence' => $request->lieu_residence,
            'formes_violence_identifiees' => $request->formes_violence_identifiees,
            'recit_histoire' => $request->recit_histoire,
        
        ]);

        return redirect()->route('pensionnaires')->with('success', 'Pensionnaire ajouté avec succès !');
    }

    /**
     * Display the specified resource.
     */
    public function show(Boarder $boarder)
    {
        $boarder = Boarder::find($boarder);
        return view('dashboard.showPensionnaires');
    }

    public function showData(Boarder $boarder)
    {
        $boarder = Boarder::find($boarder);
        return view('updatePensionnaires', compact('boarder'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Boarder $boarder)
    {
        
        $boarder->update([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'date_naissance' => $request->date_naissance,
            'situation_matrimoniale' => $request->situation_matrimoniale,
            'date_entree' => $request->date_entree,
            'date_sortie' => $request->date_sortie,
            'nombre_enfants' => $request->nombre_enfants,
            'tranche_age_enfants' => $request->tranche_age_enfants,
            'lieu_residence' => $request->lieu_residence,
            'formes_violence_identifiees' => $request->formes_violence_identifiees,
            'recit_histoire' => $request->recit_histoire,
        ]);

        return redirect()->route('listPensionnaires')->with('success', 'Pensionnaire modifié avec succès !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(Boarder $boarder)
    {
        $boarder->delete();
        return redirect()->route('listPensionnaires')->with('success', 'Pensionnaire supprimé avec succès !');
    }
}
