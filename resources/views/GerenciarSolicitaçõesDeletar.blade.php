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
                <a class="nav-link" href="GerenteUsuários">Usuários</a>
                </li>
                <li class="nav-item">
                <a class="nav-link active" href="home">Área do Usuário</a>
                </li>
                </div>
                </ul>

                <div class="card-body">
                <a class="nav-link active" href="GerenciarSolicitações">Solicitações não Respondidas</a>
                <hr>
                <div align="center">
                    <h2>Deletar Solicitações</h2>
</div>
@if (session('msg'))
                        <div class="alert alert-success" role="alert">
                            {{ session('msg') }}
                        </div>
                    @endif
<hr>
                    @foreach($data12 as $item12)
                    <div align="center">
                    <a>
                        <form action="Gerente.DeletarSolicitação/{{$item12->id}}" method="POST">
                            @csrf
                            @method('DELETE')
                        <button type="submit" class="btn-lg btn-danger delete-btn bg-gradient" value="{{$item12->id}}" data-bs-toggle="modal" id="{{$item12->id}}">
                            <h4>Agendamento: {{$item12->laboratório}}</h4>
                            <h6>Dia Agendado: {{date('d/m/Y', strtotime($item12->Dia))}} </h6>
                            <h6>Horário Agendado: {{$item12->Horário}}<h6>
                            <hr>
                            <h4>Estado da Solicitação: <h5>{{$item12->Estado}}</h5></h4>
                        </button>
</form>
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
