@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                <ul class="nav nav-tabs card-header-tabs">
                <li class="nav-item">
                <a class="nav-link" href="home">Informações dos Laboratórios</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="/Solicitações">Solicitações de Agendamento</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="/Calendário">Calendário</a>
                </li>
                <li class="nav-item">
                <a class="nav-link active" href="/LabsGerente">Gerente</a>
                </li>
                </div>
                </ul>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>[-]
                    @endif

                    @foreach($data9 as $item9)
                    <div align="center">
                    <a>
                        <button type="button" class="btn-lg btn-primary bg-gradient" data-bs-toggle="modal">
                            <h4>Agendamento: {{$item9->laboratório}}</h4>
                            <h6>Dia Agendado: {{$item9->Dia}}</h6>
                            <h6>Horário Agendado: {{$item9->Horário}}<h6>
                            <hr>
                            <h4>Estado da Solicitação: <h5>{{$item9->Estado}}</h5></h4>
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
