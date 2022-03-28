<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lloguer;
use App\Models\Apartament;
use App\Models\Client;

class ControladorLloguer extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lloguer = Lloguer::all();
        return view('lloguers/index', compact('lloguer'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $lloguer = Lloguer::all();
        $apartament = Apartament::all();
        $client = Client::all();
        return view('lloguers/crea', compact('lloguer'), compact('apartament'), compact('client'));
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
            "dni_client" => 'required|max:255',
            'id_apartament' => 'required|max:255',
            'data_inici' => 'required|max:255',
            'hora_inici' => 'required|max:255',
            'data_final' => 'required|max:255',
            'hora_final' => 'required|max:255',
            'lloc_lliurament' => 'required|max:255',
            'lloc_devolucio' => 'required|max:255',
            'preu_per_dia' => 'required|integer',
            'diposit' => 'required|boolean',
            'quantitat_diposit' => 'required|integer',
            'tipus_asseguranca' => 'required|max:255'
        ]);
        $lloguer = Lloguer::create($nouClient);
        return redirect('/lloguers')->with('completed', 'Lloguer creat!');
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
    public function edit($primary_key)
    {
        $lloguer = Lloguer::findOrFail(explode(",", $primary_key));
        return view('lloguers/actualitza', compact('lloguer'));
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
            "dni_client" => 'required|max:255',
            'id_apartament' => 'required|max:255',
            'data_inici' => 'required|max:255',
            'hora_inici' => 'required|max:255',
            'data_final' => 'required|max:255',
            'hora_final' => 'required|max:255',
            'lloc_lliurament' => 'required|max:255',
            'lloc_devolucio' => 'required|max:255',
            'preu_per_dia' => 'required|integer',
            'diposit' => 'required|boolean',
            'quantitat_diposit' => 'required|integer',
            'tipus_asseguranca' => 'required|max:255'
            ]);
        Lloguer::where('dni_client',$dni_client)->update($dades);
        return redirect('/lloguers')->with('completed', 'Lloguer actualitzat');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($dni_client)
    {
        $lloguer = Lloguer::findOrFail($dni_client); // TODO: Corregir esto, probablemente no funcione ya que no hay ID. La primary key es email.
        $lloguer->delete();
        return redirect('/lloguers')->with('completed', 'Lloguer esborrat');
    }
}
