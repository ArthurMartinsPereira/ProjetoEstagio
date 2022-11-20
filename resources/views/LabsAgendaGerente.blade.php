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
                <a class="nav-link" href="GerenteUsuários">Usuários</a>
                </li>
                <li class="nav-item">
                <a class="nav-link active" href="home">Área do Usuário</a>
                </li>
                </div>
                </ul>

                <div class="card-body">
                <a class="nav-link active" href="/LabsGerente">Gerenciar Laboratórios</a>
                <hr>
                @foreach($data11 as $item11)

<div>
<a href="{{ url ('LabsAgendaInfo/'.$item11->id) }}">
                        <button type="submit" class="btn btn-primary bg-gradient" value="{{$item11->NomeLab}}" id="{{$item11->id}}">
                            Agenda {{$item11->NomeLab}}
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
