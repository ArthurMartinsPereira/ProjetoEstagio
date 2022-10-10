@extends('layouts.layoutGerente')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                <ul class="nav nav-tabs card-header-tabs">
                <li class="nav-item">
                <a class="nav-link" href="/LabsGerente">Informações dos Laboratórios</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="GerenciarSolicitações">Solicitações de Agendamento</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="/CalendárioGerente">Calendário</a>
                </li>
                </div>
                </ul>

                <div class="card-body">

                    @if (session('resposta'))
                    <div class="alert alert-success">
                            {{ session('resposta') }}
                        </div>
                    @endif

                    @foreach($data10 as $item10)
                    <div align="center">
                    <a href="{{ url ('Gerente.Resposta/'.$item10->id) }}">
                        <button type="button" class="btn-lg btn-primary bg-gradient" value="{{$item10->id}}" data-bs-toggle="modal">
                            <h4>Agendamento: {{$item10->laboratório}}</h4>
                            <h6>Dia Agendado: {{$item10->Dia}}</h6>
                            <h6>Horário Agendado: {{$item10->Horário}}<h6>
                            <hr>
                            <h4>Estado da Solicitação: <h5>{{$item10->Estado}}</h5></h4>
                        </button>
                        <hr>
                    </a>
</div>
@endforeach
</div>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
