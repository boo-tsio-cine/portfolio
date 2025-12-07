<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Projet;


class ProjetController extends Controller
{
    //
    //   public function index()
    // {
    //     return ProjetResource::collection(Projet::all());
    // }
    //  public function show(Projet $projet)
    // {
    //     $projet = Projet::all();
    //     // return new ProjetResource($projet);
    // }

     public function apiList()
    {
        // Récupérer tous les projets
        $projets = Projet::orderBy('annee','desc')->get();

        // Retourner en JSON
        return response()->json($projets);
    }
}
