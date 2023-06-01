<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItensController extends Controller
{
    //

    public function create(){
        return view('inserir');

        
    }

    public function store(Request $request){
        //função dd($request->all());

        Item::create([
            'nome' => $request->nome,
            'descricao' => $request->descricao,
            'quantidade' => $request->quantidade,
        ]);

        return view('PaginaInicial');
    }

    public function show($id){
        $item = Item::findOrFail($id);
        return view('mostrar', ['item' => $item]);
    }

    public function edit($id){
        $item = Item::findOrFail($id);
        return view('editar', ['item' => $item]);
    }

    public function update (Request $request, $id){
        $item = Item::findOrFail($id);

        Item::where('id', $id)->update([
            'nome' => $request->nome,
            'descricao' => $request->descricao,
            'quantidade' => $request->quantidade,
        ]);

        return view('PaginaInicial');

    }

    //Erro que surgiu devido a não expecificação do id no update da coluna
    //Non-static method Illuminate\Database\Eloquent\Model::update() cannot be called statically

    public function delete($id){
        $item = Item::findOrFail($id);
        return view('deletar', ['item' => $item]);
    }

    public function destroy($id){
        $item = Item::findOrFail($id);
        $item->delete();

        return view('PaginaInicial');
    }
}