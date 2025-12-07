<?php

namespace App\Http\Controllers;

use App\Models\Realise;
use Illuminate\Http\Request;
use Illuminate\View\View;

class RealiseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index():View
    {
        //

        $realise = Realise::orderBy('annee','desc')->get();
        return view('realisation.view', compact('realise'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create():View
    {
        //
        return view('realisation.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $validated = $request->validate([
            'nom'   => 'required|string',
            'descri' => 'required|string',
            'annee' => 'required|int|min:1900|max:' . date("Y"),
            'fin'   => 'nullable|int|min:1900|max:' . date("Y"),
            'encore' => 'nullable',
        ]);

        $anneeDebut = $request->annee;
        $anneeFin = $request->fin;
        $encore = $request->encore;

        if($encore){
            $anneeFinal = $anneeDebut."- Aujourd'hui";
        }elseif($anneeFin){
            $anneeFinal = $anneeDebut."-". $anneeFin;
        }else{
            $anneeFinal = $anneeDebut;
        }


        Realise::create([
            'nom' => $request->nom,
            'descri' => $request->descri,
            'annee' => $anneeFinal,
        ]);

        return redirect('/listrealise')->with('success', 'Realisation bien insrer');

        
    }

    /**
     * Display the specified resource.
     */
    public function show(Realise $realise)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Realise $realise)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $realise = Realise::findOrFail($id);

        $request->validate([
            'nom'=>'required|string',
            'descri'=>'required|string',
            'annee'=>'required|int',
        ]);

        $realise->update([
            'nom' => $request->nom,
            'descri' => $request->descri,
            'annee' => $request->annee
        ]);

           return redirect()->back()->with('success', 'Réalisation mis à jour avec succès !');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Realise $realise, $id)
    {
        //

        $realise = Realise::findOrFail($id);

        $realise->delete();

        return redirect()->back()->with('info','Suppression de réalisation réussi');

    }
}
