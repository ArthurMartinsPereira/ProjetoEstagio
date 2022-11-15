@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        @foreach($data15 as $item15)

            <div class="card" action="{{ url('LabsGerenteInfo/', ['id'=>$item15->id]) }}">
                <div class="card-header"><h3>Informações do {{$item15->NomeLab}}</h3></div>

                <div class="card-body">


                    <h4>Nome: {{$item15->NomeLab}}</h4>
                    <h4>Número de Lugares: {{$item15->NumLugares}}</h4>
                    <h4>Número de Computadores: {{$item15->NumComputadores}}</h4>
                    <hr>
                    <h4>Infromações Adicionais: <h5>{{$item15->InformaçõesAdicionais}}</h5></h4>

                    <hr>

                <div  align="center">
                    <a href="{{ url ('Gerente.Editar/'.$item15->id) }}">
                    <button type="button" class="btn btn-success bg-gradient editbtn">
                          <h3>Editar Informações</h3>
                       </button>
                    </a>
</div>


                </div>
            </div>
        </div>
    </div>
</div>
@endforeach
@endsection
