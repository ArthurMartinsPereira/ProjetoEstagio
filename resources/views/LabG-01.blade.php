@extends('layouts.layoutGerente')

@section('content')
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">


            <div class="card">
                <div class="card-header"><h3>Informações do Lab-01</h3></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>[-]
                    @endif

                    @foreach($data as $item)

                    <h4>Nome: {{$item->NomeLab}}</h4>
                    <h4>Número de Lugares: {{$item->NumLugares}}</h4>
                    <h4>Número de Computadores: {{$item->NumComputadores}}</h4>
                    <hr>
                    <h4>Infromações Adicionais: <h5>{{$item->InformaçõesAdicionais}}</h5></h4>

                    <hr>

                <div  align="center">
                    <a>
                       <button type="button" class="btn btn-success bg-gradient" data-bs-toggle="modal" >
                          <h3>Agendar Laboratório</h3>
                       </button>
                    </a>
                </div>

                    @endforeach

                </div>
            </div>
        </div>
    </div>
</div>



<!--Modal das Solicitações -->

</form>
</body>
@endsection
