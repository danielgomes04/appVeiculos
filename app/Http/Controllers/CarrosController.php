<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Models\Carros;

class CarrosController extends Controller
{
    public function FormularioCadastro(){
        return view('cadastrarCarro');
    }

    public function Editar()
    {
        return view('editarCarro');
    }

    public function SalvarBancoCarro(Request $request){
        $dadosCaminhao = $request->validate(
            [
                'modelo' => 'string|required',
                'marca' => 'string|required',
                'ano' => 'string|required',
                'cor' => 'string|required',
                'valor' => 'string|required'
            ]
        );

        Caminhao::create($dadosCarro);
        return Redirect::route('home');
    }

    public function Lista()
    {
        return view('listaCarro');
    }

    public function MostrarEditarCarro(Request $request)
    {
        //$dadosCarro = Carro::all();
        //dd($dadosCarro);
        $dadosCarro = Carros::query();
        $dadosCarro->when($request->marca,function($query, $vl){
            $query->where('marca','like','%'.$vl.'%');
        });
        
        $dadosCarro = $dadosCarro->get();

        return view('editarCarro',[
            'registrosCarro' => $dadosCarro]);
    }

    public function ApagarBancoCarro(Carro $registrosCaminhoes){
        //dd($registrosCarros);
        $registrosCarros->delete();
        //$Carros::FindOrFail(id)->delete();
        return Redirect::route('editar');
    }

    public function MostrarAlterarCarro(Carro $registrosCarros){
        return view('alterarCarro', ['registrosCarros' => $registrosCarros]);
    }

    public function AlterarBancoCarro(Carro $registrosCarros, Request $request){
        $banco = $request->validate([
            'modelo' => 'string|required',
            'marca' => 'string|required',
            'ano' => 'string|required',
            'cor' => 'string|required',
            'valor' => 'string|required'
        ]);

        $registrosCarros->fill($banco);
        $registrosCarros->save();

        return Redirect::route('editar');
       #dd($registrosCaminhoes);
    }
}