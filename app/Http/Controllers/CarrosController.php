<?php

namespace App\Http\Controllers;

use Illuminate\Suport\Facades\Redirect;
use Illuminate\Http\Request;
use App\Models\Carros;

class CarrosController extends Controller
{
    public function FormularioCadastroCarro(){
        return view('cadastrarCarro');
    }

    public function Editar(){
        return view('editarCarro');
    }    

    public function SalvarBancoCarros(Request $request)
    {
        $dadosCarro = $request->validate(
            [
                'modelo'=> 'string|required',
                'marca'=> 'string|required',
                'cor'=> 'string|required',
                'ano'=> 'string|required',
                'valo'=> 'string|required'
            ]
        );

        Carros::create($dadosCarro);
        return Redirec::route('home');
    }
}
