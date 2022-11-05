@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                <ul class="nav nav-tabs card-header-tabs">
                <li class="nav-item">
                <a class="nav-link" href="/LabsGerente">Gerenciar Laboratórios</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="GerenciarSolicitações">Gerenciar Solicitações</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="/CalendárioGerente">Calendário Gerente</a>
                </li>
                <li class="nav-item">
                <a class="nav-link active" href="home">Área do Usuário</a>
                </li>
                </div>
                </ul>

                <div class="card-body">
                <a class="nav-link active" href="GerenciarSolicitaçõesExtra">Todas as Solicitações</a>
                <hr>
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
                            <h6>Dia Agendado: {{date('d/m/Y', strtotime($item10->Dia))}} </h6>
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
