<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Treballador;

class ControladorTreballador extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $treballador = Treballador::all();
        return view('index', compact('treballador'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('crea_treballador');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nouTreballador = $request->validate([
            'nom' => 'required|max:255',
            'email' => 'required|max:255',
            'contrasenya' => 'required|max:255',
            'tipus' => 'required|max:255',
            'hora_entrada' => 'required|max:255',
            'hora_sortida' => 'required|max:255'
            ]);
            $empleat = Treballador::create($nouTreballador);
            return redirect('/treballadors')->with('completed', 'Treballador creat!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $treballador = Treballador::findOrFail($id); // TODO: Corregir esto, probablemente no funcione ya que no hay ID. La primary key es email.
        return view('actualitza', compact('treballador'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $dades = $request->validate([
            'nom' => 'required|max:255',
            'email' => 'required|max:255',
            'contrasenya' => 'required|max:255',
            'tipus' => 'required|max:255',
            'hora_entrada' => 'required|max:255',
            'hora_sortida' => 'required|max:255'
            ]);
        Treballador::whereId($id)->update($dades); // TODO: Corregir esto, probablemente no funcione ya que no hay ID. La primary key es email.
        return redirect('/treballadors')->with('completed', 'Treballador actualitzat');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $treballador = Treballador::findOrFail($id); // TODO: Corregir esto, probablemente no funcione ya que no hay ID. La primary key es email.
        $treballador->delete();
        return redirect('/treballadors')->with('completed', 'Treballador esborrat');
    }
}
