@extends('layouts.layoutGerente')

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
                <a class="nav-link" href="GerenciarSolicitações">Solicitações de Agendamento</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="/CalendárioGerente">Calendário</a>
                </li>
                </div>
                </ul>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if(session('success'))
        <div class="alert alert-success" role="alert">{{session('success')}}</div>
        @endif

<div>
                    <a href="/LabGerente-01">
                        <button type="submit" class="btn btn-primary bg-gradient">
                            Lab 01
                        </button>
                    </a>
</div>
<hr>
<div>
                    <a href="/LabGerente-02">
                        <button type="submit" class="btn btn-primary bg-gradient">
                            Lab 02
                        </button>
                    </a>
</div>
<hr>
<div>
                    <a href="/LabGerente-03">
                        <button type="submit" class="btn btn-primary bg-gradient">
                            Lab 03
                        </button>
                    </a>
</div>
<hr>
<div>
                    <a href="/LabGerente-04">
                        <button type="submit" class="btn btn-primary bg-gradient">
                            Lab 04
                        </button>
                    </a>
</div>
<hr>
<div>
                    <a href="/LabGerente-05">
                        <button type="submit" class="btn btn-primary bg-gradient">
                            Lab 05
                        </button>
                    </a>
</div>
<hr>
<div>
                    <a href="/LabGerente-06">
                        <button type="submit" class="btn btn-primary bg-gradient">
                            Lab 06
                        </button>
                    </a>
</div>
<hr>
<div>
                    <a href="/LabGerente-07">
                        <button type="submit" class="btn btn-primary bg-gradient">
                            Lab 07
                        </button>
                    </a>
</div>
<hr>
<div>
                    <a href="/LabGerente-08">
                        <button type="submit" class="btn btn-primary bg-gradient">
                            Lab 08
                        </button>
                    </a>
</div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
