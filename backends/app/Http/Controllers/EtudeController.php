<?php

namespace App\Http\Controllers;
use App\Models\Etude; 

use Illuminate\Http\Request;
use Illuminate\View\View;

class EtudeController extends Controller
{
    //

    public function create(): View{
        return view('etude.etude');
    }

    public function store(Request $request){

        $validated = $request->validate([
            'type' => 'required|string',
            'lieu' => 'required|string|max:255',
            'nom' => 'required|string|max:255',
            'diplome' => 'required|string|max:255',
            'annee' => 'required|int',
        ]);

        Etude::create($validated);

        return redirect('/listetude')->with('success','Données enegistrées avec succès');
       
    }

    public function view(): View{
        $etudes = Etude::orderBy('annee', 'desc')->get();

        return view('etude.liste', compact('etudes'));
    }


    public function update(Request $request, $id ){

        $etude = Etude::findOrFail($id);

        $request->validate([
            'type'=>'required|string',
            'lieu'=>'required|string',
            'nom'=>'required|string',
            'diplome'=>'required|string',
            'annee'=>'required|int',
        ]);

        $etude->update([
            'type' => $request->type,
            'lieu' => $request->lieu,
            'nom' => $request->nom,
            'diplome' => $request->diplome,
            'annee' => $request->annee
        ]);

          return redirect()->back()->with('success', 'Etude mis à jour avec succès !');

    }

    public function destroy($id){

        $etude = Etude::findOrFail($id);

        $etude->delete();

        return redirect()->back()->with('info','Suppression d étude réussi');
    }

}
