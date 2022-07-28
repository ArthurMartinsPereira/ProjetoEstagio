@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h3>Informações do Lab-04</h3></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>[-]
                    @endif

                    @foreach($data4 as $item4)

                    <h4>Nome: {{$item4->NomeLab}}</h4>
                    <h4>Número de Lugares: {{$item4->NumLugares}}</h4>
                    <h4>Número de Computadores: {{$item4->NumComputadores}}</h4>
                    <hr>
                    <h4>Infromações Adicionais: {{$item4->InformaçõesAdicionais}}</h4>

                    @endforeach

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
