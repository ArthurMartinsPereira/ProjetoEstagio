@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

        @foreach($data5 as $item5)
            <div class="card">
                <div class="card-header"><h3>Informações do {{$item5->NomeLab}}</h3></div>

                <div class="card-body">



                    <h4>Nome: {{$item5->NomeLab}}</h4>
                    <h4>Número de Lugares: {{$item5->NumLugares}}</h4>
                    <h4>Número de Computadores: {{$item5->NumComputadores}}</h4>
                    <hr>
                    <h4>Infromações Adicionais: <h5>{{$item5->InformaçõesAdicionais}}</h5></h4>

                    <hr>

                <div  align="center">
                <a href="{{ url ('Gerente.Editar/'.$item5->id) }}">
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
