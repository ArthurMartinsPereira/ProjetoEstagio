@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

        @if(session('solicitação'))
        <div class="alert alert-success">{{session('solicitação')}}</div>
        @endif

        @foreach($data2 as $item2)
            <div class="card">
                <div class="card-header"><h3>Informações do {{$item2->NomeLab}}</h3></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>[-]
                    @endif



                    <h4>Nome: {{$item2->NomeLab}}</h4>
                    <h4>Número de Lugares: {{$item2->NumLugares}}</h4>
                    <h4>Número de Computadores: {{$item2->NumComputadores}}</h4>
                    <hr>
                    <h4>Infromações Adicionais: {{$item2->InformaçõesAdicionais}}</h4>


                    <hr>

<div  align="center">
<a href="{{ url ('Gerente.Editar/'.$item2->id) }}">
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



<!--Modal das Solicitações -->

</form>
</body>
@endsection
