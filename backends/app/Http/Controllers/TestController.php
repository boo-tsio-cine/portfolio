<?php

namespace App\Http\Controllers;

use App\Models\Test;
use Illuminate\Http\Request;
use Illuminate\View\View;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $test = Test::all();
        // return View('test.show',compact('test'));
        return response()->json($test);
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Test $test)
    {
        //
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //

        $request->validate([
            'name'=>'required|max:355',
            'mail'=>'required|email|max:365',
        ]);
           
        $test = Test::find($id);
        if (!$test) {
            return response()->json(['message' => 'Test non trouvé'], 404);
        }
         $test->name = $request->name;
        $test->mail = $request->mail;
  
        $test->save();

        return response()->json(['message' => 'Projet mis à jour', 'projet' => $test]);
        }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Test $test)
    {
        //
    }
}
