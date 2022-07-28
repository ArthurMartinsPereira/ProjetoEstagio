@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h3>Informações do Lab-03</h3></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>[-]
                    @endif

                    @foreach($data3 as $item3)

                    <h4>Nome: {{$item3->NomeLab}}</h4>
                    <h4>Número de Lugares: {{$item3->NumLugares}}</h4>
                    <h4>Número de Computadores: {{$item3->NumComputadores}}</h4>
                    <hr>
                    <h4>Infromações Adicionais: {{$item3->InformaçõesAdicionais}}</h4>

                    @endforeach

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
