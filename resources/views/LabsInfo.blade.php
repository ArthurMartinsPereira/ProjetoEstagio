@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        @foreach($data2 as $item)

            <div class="card" action="{{ url('LabsGInfo/', ['id'=>$item->id]) }}">
                <div class="card-header"><h3>Informações do {{$item->NomeLab}}</h3></div>

                <div class="card-body">


                    <h4>Nome: {{$item->NomeLab}}</h4>
                    <h4>Número de Lugares: {{$item->NumLugares}}</h4>
                    <h4>Número de Computadores: {{$item->NumComputadores}}</h4>
                    <hr>
                    <h4>Infromações Adicionais: <h5>{{$item->InformaçõesAdicionais}}</h5></h4>

                    <hr>

                    <div  align="center">
                    <a href="/Calendário">
                       <button type="button" class="btn btn-success bg-gradient" >
                          <h3>Agendamento</h3>
                       </button>
                    </a>
                </div>
                @endforeach


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
