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
                <a class="nav-link active" href="LabsAgenda">Agenda dos Laboratórios</a>
                <hr>
                @if(session('danger'))
        <div class="alert alert-success">{{session('danger')}}</div>
        @endif
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @foreach($data as $item)
                    <div>
<a href="{{ url ('LabsInfo/'.$item->id) }}">
                        <button type="submit" class="btn btn-primary bg-gradient" value="{{$item->NomeLab}}" id="{{$item->id}}">
                            Informações {{$item->NomeLab}}
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

