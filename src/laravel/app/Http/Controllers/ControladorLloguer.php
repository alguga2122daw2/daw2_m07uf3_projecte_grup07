<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lloguer;

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
        return view('lloguers/crea');
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
            "dni_Client" => 'required|max:255',
            'id_Apartament' => 'required|max:255',
            'data_Inici' => 'required|max:255',
            'hora_Inici' => 'required|max:255',
            'data_Final' => 'required|max:255',
            'hora_Final' => 'required|max:255',
            'lloc_Lliuament' => 'required|max:255',
            'preu_Dia' => 'required|integer',
            'diposit' => 'required|boolean',
            'cant_Diposit' => 'required|integer',
            'tipusAsseg' => 'required|max:255',
            'llocDev' => 'required|max:255'
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
    public function edit($dni_client)
    {
        $lloguer = Lloguer::findOrFail($dni_client);
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
            "dni_Client" => 'required|max:255',
            'id_Apartament' => 'required|max:255',
            'data_Inici' => 'required|max:255',
            'hora_Inici' => 'required|max:255',
            'data_Final' => 'required|max:255',
            'hora_Final' => 'required|max:255',
            'lloc_Lliuament' => 'required|max:255',
            'preu_Dia' => 'required|integer',
            'diposit' => 'required|boolean',
            'cant_Diposit' => 'required|integer',
            'tipusAsseg' => 'required|max:255',
            'llocDev' => 'required|max:255'
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
