@extends('layouts.app')

@section('content')
@foreach($data13 as $item13)
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <div class="card"  action="{{ url('LabsProfAgenda/', ['id'=>$item13->id]) }}">
                <div class="card-header"><h3>Agenda do {{$item13->NomeLab}}</h3></div>

                <div class="card-body">
                <h4>Número de Lugares: {{$item13->NumLugares}}</h4>
                    <h4>Número de Computadores: {{$item13->NumComputadores}}</h4>
                    <hr>
                    <h4>Infromações Adicionais: <h5>{{$item13->InformaçõesAdicionais}}</h5></h4>
                    <hr>
                    @foreach($Agenda as $Agenda)
                    <div align="center">
                    <a>
                        <button type="button" class="btn-lg btn-primary bg-gradient" data-bs-toggle="modal">
                          <h5>  {{$Agenda->laboratório}} </h5>
                          <h5>{{date('d/m/Y', strtotime($Agenda->Dia))}}</h5>
                    Hora: {{$Agenda->Horário}}
                    <hr>
                    {{$Agenda->Estado}}
                    </button>
                        <hr>
                    </a>
                    @endforeach
@endforeach
</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
