<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lloguer;
use App\Models\Apartament;
use App\Models\Client;
use Illuminate\Support\Facades\DB;

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
        $lloguers = Lloguer::all();
        $apartaments = Apartament::all();
        $clients = Client::all();
        return view('lloguers/crea', compact('lloguers','apartaments','clients'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nouLloguer = $request->validate([
            'dni_client' => 'required|max:255',
            'id_apartament' => 'required|max:255',
            'data_inici' => 'required|max:255',
            'hora_inici' => 'required|max:255',
            'data_final' => 'required|max:255',
            'hora_final' => 'required|max:255',
            'lloc_lliurament' => 'required|max:255',
            'lloc_devolucio' => 'required|max:255',
            'preu_per_dia' => 'required|integer',
            'diposit' => 'required|boolean',
            'quantitat_diposit' => 'integer',
            'tipus_asseguranca' => 'required|max:255'
        ]);
        $lloguer = Lloguer::create($nouLloguer);
        return redirect('/lloguers')->with('completed', 'Lloguer creat!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($primary_key)
    {
        $pk_array = explode(',',$primary_key);
        $lloguer = Lloguer::where('dni_client', $pk_array[0])->where('id_apartament', $pk_array[1])->first();
        return view('lloguers/pdf', compact('lloguer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($primary_key)
    {
        $pk_array = explode(',',$primary_key);
        $lloguer = Lloguer::where('dni_client', $pk_array[0])->where('id_apartament', $pk_array[1])->first();
        return view('lloguers/actualitza', compact('lloguer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $primary_key)
    {
        $pk_array = explode(',',$primary_key);
        $dades = $request->validate([
            'data_inici' => 'required|max:255',
            'hora_inici' => 'required|max:255',
            'data_final' => 'required|max:255',
            'hora_final' => 'required|max:255',
            'lloc_lliurament' => 'required|max:255',
            'lloc_devolucio' => 'required|max:255',
            'preu_per_dia' => 'required|integer',
            'diposit' => 'required|boolean',
            'quantitat_diposit' => 'integer',
            'tipus_asseguranca' => 'required|max:255'
            ]);
        Lloguer::where('dni_client', $pk_array[0])->where('id_apartament', $pk_array[1])->update($dades);
        return redirect('/lloguers')->with('completed', 'Lloguer actualitzat');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($primary_key)
    {
        $pk_array = explode(',',$primary_key);
        $lloguer = Lloguer::where('dni_client', $pk_array[0])->where('id_apartament', $pk_array[1]);
        $lloguer->delete();
        return redirect('/lloguers')->with('completed', 'Lloguer esborrat');
    }
}
