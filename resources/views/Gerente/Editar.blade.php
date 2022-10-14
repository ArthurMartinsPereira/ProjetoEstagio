@extends('layouts.app')

@section('content')
@foreach($data11 as $item11)
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h4>Editar Informações:</h4></div>

                <div class="card-body">
<form action="{{ url('Gerente.Update', ['id'=>$item11->id]) }}" method="POST">
        @csrf
        @method('PUT')
      <div class="modal-body">

  <div class="form-group mb-3">
    <label class="form-label">Nome:</label>
    <input type="text" name="NomeLab" class="form-control" id="NomeLab" value="{{$item11->NomeLab}}">
  </div>


  <div class="form-group mb-3">
    <label class="form-label">Número de Lugares:</label>
    <input type="number" name="NumLugares" class="form-control" id="NumLugares" value="{{$item11->NumLugares}}">
  </div>


  <div class="form-group mb-3">
    <label class="form-label">Número de Computadores:</label>
    <input type="number" name="NumComputadores" class="form-control" id="NumComputadores" value="{{$item11->NumComputadores}}">
  </div>


  <div class="form-group mb-3">
    <label class="form-label">Informações Adicionais:</label>
    <textarea type="text" name="InformaçõesAdicionais" id="InformaçõesAdicionais" class="form-control"
    rows="6" cols="50">
    {{$item11->InformaçõesAdicionais}}

    </textarea>
</select>
  </div>

      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-success bg-gradient">Editar</button>
      </div>
    </div>
  </div>
</div>
</form>
</body>

</form>
</div>
            </div>
        </div>
    </div>
</div>
@endforeach
@endsection
