<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConversorController extends Controller
{
    public function index()
    {
        return view('conversor.index');
    }

    public function converter(Request $request)
    {
        $request->validate([
            'valor' => 'required|numeric',
            'conversao' => 'required|in:anos_luz,km',
        ]);

        $valor = $request->input('valor');
        $conversao = $request->input('conversao');

        if ($conversao == 'anos_luz') {
            $km = 9460730472580.8;
            $resultado = $valor * $km;
            $unidade_resultado = 'km';
        } elseif ($conversao == 'km') {
            $anos_luz = 1.0570;
            $resultado = $valor * $anos_luz;
            $unidade_resultado = 'anos luz';
        }

        return view('conversor.resultado', compact('valor', 'conversao', 'resultado', 'unidade_resultado'));
    }
}
