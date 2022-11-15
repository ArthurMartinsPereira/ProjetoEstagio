@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card">
                <div class="card-header"><h3>Deletar Laboratórios</h3></div>

                <div class="card-body">
                @foreach($data7 as $item)
<div>
<a>
<form action="Gerente.DeletarLab/{{$item->id}}" method="POST">
                            @csrf
                            @method('DELETE')
    <button type="submit" class="btn btn-danger bg-gradient me-md-2" value="{{$item -> id}}" data-bs-toggle="modal" id="{{$item->id}}">
                    <h3>Deletar {{$item->NomeLab}}</h3>
</button>
</form>
</a>
<hr>
</div>
@endforeach
                </div>



                </div>
            </div>
        </div>
    </div>
</div>

@endsection
