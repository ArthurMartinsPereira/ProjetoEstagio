@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">


            <div class="card">
                <div class="card-header"><h3>Informações do Lab-04</h3></div>

                <div class="card-body">

                    @foreach($data4 as $item4)

                    <h4>Nome: {{$item4->NomeLab}}</h4>
                    <h4>Número de Lugares: {{$item4->NumLugares}}</h4>
                    <h4>Número de Computadores: {{$item4->NumComputadores}}</h4>
                    <hr>
                    <h4>Infromações Adicionais: <h5>{{$item4->InformaçõesAdicionais}}</h5></h4>

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
