@extends('layout.cabecalho')

@section('body')

<link href="{{ asset('css/novomaterial.css')}}"  rel="stylesheet">

<div class="texto"> 
    <img src="/img/editar2.png" />
    <h3> Adicionou o nome do Material Errado ?</h3> 

    <p>  Para alterar os dados que foram adicionado errados é necessario informar os dados corretos nos campos que deseja alteração, 
        sendo assim clicar em salvar para que as alteracoes seja realizadas com sucesso </p>
</div>

<div class=" ajustes">

    <h1> Editar Material</h1>
     
    <div class="card-body">
        <form action="/cadastros/material/{{$materials->idmaterial}}" method="POST">
            @csrf
            <div class="form-group col-md-6">
                <label for="idmaterial">Codigo</label>
            <input type="text" class="form-control" name="idmaterial" id="idmaterial" value="{{$materials->idmaterial}}">
            </div>

                <div class="form-group col-md-6">
                    <label for="nome_material">Nome do Material</label>
                    <input type="text" class="form-control" name="nome_material" id="nome_material" value="{{$materials->nome_material}}">
                </div>
                  <div class="col-md-6 mb-6 divisor">
                    <label for="unidade">Unidade</label>
                    <input type="text" class="form-control" name="unidade" id="unidade" required value="{{$materials->unidade}}">
                    
                  </div>
 
            <div class="form-group col-md-10 md-10 divisor">
                <label for="descricao">Descrição</label>
                <input type="text" class="form-control" name="descricao" id="descricao" value="{{$materials->descricao}}" >
            </div>

                <div class="form-group col-md-6 divisor">
                    <label for="quantidade">Quantidade</label>
                    <input type="int" class="form-control" name="quantidade" id="quantidade" value="{{$materials->quantidade}}">
                </div>

                <div class="form-group col-md-6 divisor">
                    <label for="valor">Preço em R$ </label>
                    <input type="double" class="form-control" name="valor" id="valor" value="{{$materials->valor}}">
                </div>
            <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
            <button type="cancel" class="btn btn-danger btn-sm">Cancel</button>
        </form>
    </div>
</div>

    
