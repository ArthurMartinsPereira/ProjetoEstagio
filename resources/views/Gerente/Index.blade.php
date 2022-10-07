@extends('layouts.layoutGerente')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card">
                <div class="card-header"><h3>Editar Informações dos Laboratórios</h3></div>

                <div class="card-body">

                     @foreach($data9 as $item9)
                    <h4>{{$item9->id}}  -  {{$item9->NomeLab}} </h4>
                    <a href="{{ url ('Gerente.Editar/'.$item9->id) }}">
                    <button  type="button" value="{{$item9->id}}" class="btn btn-success editbtn bg-gradient">
                          Editar
                       </button>
</a>
                    <hr>
                    @endforeach
                    </div>
            </div>
        </div>
    </div>
</div>



@endsection

