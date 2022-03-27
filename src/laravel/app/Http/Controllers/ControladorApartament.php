<?php

namespace App\Http\Controllers;

use App\Models\Apartament;
use Illuminate\Http\Request;

class ControladorApartament extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $apartament = Apartament::all();
        return view('apartaments/index', compact('apartament'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('apartaments/crea');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nouApartament = $request->validate([
            "id_apartament" => 'required|max:255',
            "ref_catast" => 'required|max:255',
            "ciutat" => 'required|max:255',
            "barri" => 'required|max:255',
            "carrer" => 'required|max:255',
            "porta" => 'required|integer',
            "pis" => 'required|integer',
            "num_llits" => 'required|integer',
            "num_habitacions" => 'required|integer',
            "ascensor" => 'required|boolean',
            "calefaccio" => 'required|max:255',
            "aire_condicionat" => 'required|boolean'
        ]);
        $apartament = Apartament::create($nouApartament);

        return redirect('/apartaments')->with('completed', 'Apartament creat');
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
        $apartament = Apartament::findOrFail($id);
        return view('apartaments/actualitza', compact('apartament'));
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
            "id_apartament" => 'required|max:255',
            "ref_catast" => 'required|max:255',
            "ciutat" => 'required|max:255',
            "barri" => 'required|max:255',
            "carrer" => 'required|max:255',
            "porta" => 'required|integer',
            "pis" => 'required|integer',
            "num_llits" => 'required|integer',
            "num_habitacions" => 'required|integer',
            "ascensor" => 'required|max:255',
            "calefaccio" => 'required|max:255',
            "aire_condicionat" => 'required|max:255'
        ]);
        Apartament::whereId($id)->update($dades);
        return redirect('/apartaments')->with('completed', 'Apartament actualizat');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $apartament = Apartament::findOrFail($id);
        $apartament->delete();
        return redirect('/apartaments')->with('completed', 'Apartament esborrat');
    }
}
