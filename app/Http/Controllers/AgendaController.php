<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Agenda;
class AgendaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function _construct(){
        $this->middleware('auth');
    }

    public function index()
    {
        $eventos = Agenda::all();
        return view('agendas.index', compact('eventos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('agendas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name_event' => 'required|max:100',
            'description' => 'required',
            'date_time_start' => 'required',
            'date_time_end' => 'required',

        ]);
        $show = Agenda::create($validatedData);
        return redirect('/agendas')->with('success', 'Evento adicionado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $eventos = Agenda::findOrFail($id);
        return view('agendas.show',compact('eventos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $eventos = Agenda::findOrFail($id);
        return view('agendas.edit', compact('eventos'));
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
        $validatedData = $request->validate([
            'name_event' => 'required|max:100',
            'description' => 'required',
            'date_time_start' => 'required',
            'date_time_end' => 'required',
        ]);
        Agenda::whereId($id)->update($validatedData);
        return redirect('/agendas')->with('success', 'O evento foi atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $eventos = Agenda::findOrFail($id);
        $eventos->delete();
        return redirect('/agendas')->with('success', 'O evento foi removido com sucesso!');
    }
}
