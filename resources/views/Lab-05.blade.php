@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h3>Informações do Lab-05</h3></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>[-]
                    @endif

                    @foreach($data5 as $item5)

                    <h4>Nome: {{$item5->NomeLab}}</h4>
                    <h4>Número de Lugares: {{$item5->NumLugares}}</h4>
                    <h4>Número de Computadores: {{$item5->NumComputadores}}</h4>
                    <hr>
                    <h4>Infromações Adicionais: {{$item5->InformaçõesAdicionais}}</h4>

                    @endforeach

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
