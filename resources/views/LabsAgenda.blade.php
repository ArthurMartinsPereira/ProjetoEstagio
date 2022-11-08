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
                <a class="nav-link active" href="home">Informações dos Laboratórios</a>
                <hr>
                @foreach($data11 as $item11)

<div>
<a href="{{ url ('LabsProfAgenda/'.$item11->id) }}">
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
