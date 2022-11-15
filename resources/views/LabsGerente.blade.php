@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

        @if(session('solicitação'))
        <div class="alert alert-success">{{session('solicitação')}}</div>
        @endif

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

                    <div>
                <a class="nav-link active" href="LabsAgendaGerente">Agenda dos Laboratórios</a>
</div>
<div align="right">
    <a href="Gerente.CriarLab">
<button type="button" class="btn btn-success bg-gradient me-md-2">Criar Lab</button>
</a>
<a href="Gerente.DeletarLaboratório">
<button type="button" class="btn btn-danger bg-gradient me-md-2">Deletar Lab</button>
</a>
</div>

                <hr>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if(session('success'))
        <div class="alert alert-success" role="alert">{{session('success')}}</div>
        @endif
        @if(session('criar'))
        if(session('success'))
        <div class="alert alert-success" role="alert">{{session('success')}}</div>
        @endif
        @if(session('msg'))
        <div class="alert alert-success" role="alert">{{session('msg')}}</div>
        @endif

        @foreach($data14 as $item14)
        <div>
<a href="{{ url ('LabsGerenteInfo/'.$item14->id) }}">
                        <button type="submit" class="btn btn-primary bg-gradient" value="{{$item14->NomeLab}}" id="{{$item14->id}}">
                            Informações {{$item14->NomeLab}}
                        </button>
                    </a>
</div>
<hr>
@endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
