@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        @foreach($data as $item)

            <div class="card">
                <div class="card-header"><h3>Informações do {{$item->NomeLab}}</h3></div>

                <div class="card-body">


                    <h4>Nome: {{$item->NomeLab}}</h4>
                    <h4>Número de Lugares: {{$item->NumLugares}}</h4>
                    <h4>Número de Computadores: {{$item->NumComputadores}}</h4>
                    <hr>
                    <h4>Infromações Adicionais: <h5>{{$item->InformaçõesAdicionais}}</h5></h4>

                    <hr>

                <div  align="center">
                    <a href="{{ url ('Gerente.Editar/'.$item->id) }}">
                    <button type="button" class="btn btn-success bg-gradient editbtn">
                          <h3>Alterar Informações</h3>
                       </button>
                    </a>
                </div>



                </div>
            </div>
        </div>
    </div>
</div>
<!--
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Alterar Informações:</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <form action="{{url('/edit')}}" method="POST">
        @csrf
        @method('PUT')
      <div class="modal-body">

  <div class="form-group mb-3">
    <label class="form-label">Nome:</label>
    <input type="text" name="NomeLab" class="form-control" id="NomeLab" value="{{$item->NomeLab}}">
  </div>


  <div class="form-group mb-3">
    <label class="form-label">Número de Lugares:</label>
    <input type="number" name="NumLugares" class="form-control" id="NumLugares" value="{{$item->NumLugares}}">
  </div>


  <div class="form-group mb-3">
    <label class="form-label">Número de Computadores:</label>
    <input type="number" name="NumComputadores" class="form-control" id="NumComputadores" value="{{$item->NumComputadores}}">
  </div>


  <div class="form-group mb-3">
    <label class="form-label">Informações Adicionais:</label>
    <textarea type="text" name="InformaçõesAdicionais" id="InformaçõesAdicionais" class="form-control"
    rows="6" cols="50">
    {{$item->InformaçõesAdicionais}}

    </textarea>
</select>
  </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger bg-gradient" data-bs-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-success bg-gradient">Alterar</button>
      </div>
    </div>
  </div>
</div>
</form>
</body>

</form>
-->
@endforeach
@endsection
