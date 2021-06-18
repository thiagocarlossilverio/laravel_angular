<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Agenda;
use Illuminate\Http\Request;

class AgendaController extends Controller
{
    public function index(){
        return  Agenda::paginate(10);
    }

    public function show(Agenda $id){
        return $id;
       }

       public function store(Request $request){
            $agenda_data = $request->all();
            Agenda::create($agenda_data);
            return response()->json(['msg' => 'Evento adicionado com sucesso'], 201);
        }

        public function update(Request $request, $id){
            $agenda_data = $request->all();
            Agenda::whereId($id)->update($agenda_data);

            return response()->json(['msg' => 'Evento atualizado com sucesso'], 201);
        }

        public function delete(Agenda $id)
        {

            $id->delete();

            return response()->json(['msg' => 'Evento removido com sucesso'], 201);
        }
}


