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
}