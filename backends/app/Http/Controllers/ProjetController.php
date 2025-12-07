<?php

namespace App\Http\Controllers;

use App\Models\Projet;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\View\View;

class ProjetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index():View
    {
        //
        return View('projet.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create():View
    {
        //
        return View('projet.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validated = $request->validate([
            'name' => 'required|string',
            'descri' => 'required|string',
            'langage' => 'nullable|string',
            'lieu' => 'required|string',
            'link' => 'nullable|string',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'annee' => 'required|int',
        ]);

        $imageName = time().'.'.$request->photo->extension();

        $request->photo->move(public_path('upload'), $imageName);

        $validated['photo'] = $imageName;

        Projet::create($validated);

        return redirect('/listprojet')->with('success','Projet insérer avec succès') 
            ->with('image',$imageName)
        ;

    }

    /**
     * Display the specified resource.
     */
    public function show(Projet $projet):View
    {
        //
        $projet = Projet::orderBy('annee','desc')->get();
        
        return View('projet.index', compact('projet'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Projet $projet)
    {
        //
    }

 

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $projet = Projet::findOrFail($id);


        //Validation
        $request->validate([
            'name' => 'required|string',
            'descri' => 'required|string',
            'lieu' => 'required|string',
            'link' => 'nullable|string',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'annee' => 'required|int',
        ]);

  
        //Mis à jour du photo en cas de changement  
        if($request->hasFile('photo')){
            // suppression de l'ancien
            if($projet->photo && file_exists(public_path('upload/'. $projet->photo))){
                unlink(public_path('upload/' . $projet->photo));
            }
            // Stocke la nouvelle photo
            $file = $request->file('photo');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('upload'), $filename);

            // Met à jour le nom du fichier dans la base
            $projet->photo = $filename;
        }

        // // Mise à jour
        // $projet->name = $request->name;
        // $projet->descri = $request->descri;
        // $projet->lieu = $request->lieu;
        // $projet->link = $request->link;
        // $projet->annee = $request->annee;
        // $projet->save();
           // Mise à jour des autres champs
        $projet->update([
            'name' => $request->name,
            'descri' => $request->descri,
            'lieu' => $request->lieu,
            'link' => $request->link,
            'annee' => $request->annee,
            'photo' => $projet->photo // déjà mis à jour si nouvelle photo
        ]);

        return redirect()->back()->with('success', 'Projet mis à jour avec succès !');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $projet = Projet::findOrFail($id);

        // suppression photo dans upload
        if($projet->photo && file_exists(public_path('upload/' . $projet->photo))){
            unlink(public_path('upload/'.$projet->photo));
        }

        $projet->delete();

        return redirect()->back()->with('info','Suppression de projet réussi');

    }

    // public function apiList()
    //     {
    //         return response()->json(Projet::all());
    //     }


}
