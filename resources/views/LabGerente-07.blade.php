@extends('layouts.layoutGerente')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">


            <div class="card">
                <div class="card-header"><h3>Informações do Lab-07</h3></div>

                <div class="card-body">

                    @foreach($data7 as $item7)

                    <h4>Nome: {{$item7->NomeLab}}</h4>
                    <h4>Número de Lugares: {{$item7->NumLugares}}</h4>
                    <h4>Número de Computadores: {{$item7->NumComputadores}}</h4>
                    <hr>
                    <h4>Infromações Adicionais: <h5>{{$item7->InformaçõesAdicionais}}</h5></h4>

                    <hr>

                <div  align="center">
                <a href="Gerente.Index">
                    <button type="button" class="btn btn-success bg-gradient editbtn">
                          <h3>Alterar Informações</h3>
                       </button>
                    </a>
                </div>

                    @endforeach

                </div>
            </div>
        </div>
    </div>
</div>

</form>
@endsection
