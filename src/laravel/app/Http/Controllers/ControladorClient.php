<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class ControladorClient extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $client = Client::all();
        return view('clients/index', compact('client'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clients/crea');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nouClient = $request->validate([
            'dni_client' => 'required|max:255',
            'nom_cognoms' => 'required|max:255',
            'edat' => 'required|max:255',
            'telefon' => 'required|max:255',
            'adreca' => 'required|max:255',
            'ciutat' => 'required|max:255',
            'pais' => 'required|max:255',
            'email' => 'required|max:255',
            'tipus_targeta' => 'required|max:255',
            'num_targeta' => 'required|max:255'
        ]);
        $client = Client::create($nouClient);
        return redirect('/clients')->with('completed', 'Client creat!');
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
    public function edit($dni_client)
    {
        $client = Client::findOrFail($dni_client);
        return view('clients/actualitza', compact('client'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $dni_client)
    {
        $dades = $request->validate([
            'dni_client' => 'required|max:255',
            'nom_cognoms' => 'required|max:255',
            'edat' => 'required|max:255',
            'telefon' => 'required|max:255',
            'adreca' => 'required|max:255',
            'ciutat' => 'required|max:255',
            'pais' => 'required|max:255',
            'email' => 'required|max:255',
            'tipus_targeta' => 'required|max:255',
            'num_targeta' => 'required|max:255'
            ]);
        Client::where('dni_client',$dni_client)->update($dades);
        return redirect('/clients')->with('completed', 'Client actualitzat');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($dni_client)
    {
        $client = Client::findOrFail($dni_client); // TODO: Corregir esto, probablemente no funcione ya que no hay ID. La primary key es email.
        $client->delete();
        return redirect('/clients')->with('completed', 'Client esborrat');

    }
}
