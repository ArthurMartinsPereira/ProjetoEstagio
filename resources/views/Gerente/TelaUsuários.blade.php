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
                @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif

                @foreach($data as $item)
                <div>
                <h4>{{$item->name}}</h4><h5 class="text-secondary">{{$item->Admin}}</h5>
                    <div align="right">
                        <a href="{{ url ('EditarUsuários/'.$item->id) }}">
                            <button type="button" class="btn btn-success bg-gradient me-md-2" value="{{$item->id}}">
                        Editar
                    </button>
                </a>
                </div>
           </div>
                <hr>
                @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
