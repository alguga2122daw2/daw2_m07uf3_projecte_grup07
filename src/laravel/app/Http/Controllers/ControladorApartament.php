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
        return view('index', compact('apartament'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('crea_apartament');
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
            "id_Apartament" => 'required|max:255',
            "refCast" => 'required|max:255',
            "ciutat" => 'required|max:255',
            "barri" => 'required|max:255',
            "carrer" => 'required|max:255',
            "pis" => 'required|integer',
            "porta" => 'required|integer',
            "numLlits" => 'required|integer',
            "numHab" => 'required|integer',
            "ascen" => 'required|boolean',
            "ac" => 'required|boolean',
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
        return view('actualitza', compact('apartament'));
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
            "id_Apartament" => 'required|max:255',
            "refCast" => 'required|max:255',
            "ciutat" => 'required|max:255',
            "barri" => 'required|max:255',
            "carrer" => 'required|max:255',
            "pis" => 'required|integer',
            "porta" => 'required|integer',
            "numLlits" => 'required|integer',
            "numHab" => 'required|integer',
            "ascen" => 'required|boolean',
            "ac" => 'required|boolean', 
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
