@extends('padrao')
@section('content')
<section>
<div class="container cadastroCarro">
<form class="row g-3" method="post" action="{{route('alterar-banco-carro', $registroCarro->id)}}">
  @csrf
  @method('put')
  <div class="col-md-12">
    <label for="inputModelo" class="form-label">Modelo</label>
    <input type="text" name="modelo" value="{{old('modelo',$registroCarro->modelo)}}" class="form-control" id="inputModelo" placeholder="Fusca">
    @error('modelo')
    <div class="text-sm-start-text-light">Preencher o campo modelo</div>
    @enderror('modelo')
  </div>
  
  <div class="col-12">
    <label for="inputMarca" class="form-label">Marca</label>
    <input type="text" name="marca"  value="{{old('marca',$registroCarro->marca)}}" class="form-control" id="inputMarca" placeholder="BMW">
    @error('marca')
    <div class="text-sm-start-text-light">Preencher o campo marca</div>
    @enderror('marca')
  </div>
  <div class="col-12">
    <label for="inputAno" class="form-label">Ano</label>
    <input type="text" name="ano"  value="{{old('ano',$registroCarro->ano)}}" class="form-control" id="inputAno" placeholder="2000">
    @error('ano')
    <div class="text-sm-start-text-light">Preencher o campo ano</div>
    @enderror('ano')
  </div>
  <div class="col-md-12">
    <label for="inputCor" class="form-label">Cor</label>
    <input type="text" name="cor"  value="{{old('cor',$registroCarro->cor)}}" class="form-control" id="inputCor" placeholder="02569-9874">
    @error('cor')
    <div class="text-sm-start-text-light">Preencher o campo cor</div>
    @enderror('cor')
  </div>
 
  <div class="col-md-12">
    <label for="inputZip" name="valor" class="form-label">Valor</label>
    <input type="text" name="valor" value="{{old('valor',$registroCarro->valor)}}"class="form-control" id="inputZip" placeholder="25.660,23">
    @error('valor')
    <div class="text-sm-start-text-light">Preencher o campo valor</div>
    @enderror('valor')
  </div>
  
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Atualizar</button>
  </div>
</form>
</div>
</section>
@endsection