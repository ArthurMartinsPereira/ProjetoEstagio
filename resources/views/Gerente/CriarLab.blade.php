@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h4>Criar Laboratório:</h4></div>

                <div class="card-body">
<form action="{{ url('Gerente.CriarComplete') }}" method="POST">
        @csrf
        @method('POST')
      <div class="modal-body">

  <div class="form-group mb-3">
    <label class="form-label">Nome do Lab:</label>
    <input type="text" name="NomeLab" class="form-control" id="NomeLab">
  </div>


  <div class="form-group mb-3">
    <label class="form-label">Número de Lugares:</label>
    <input type="number" name="NumLugares" class="form-control" id="NumLugares" >
  </div>


  <div class="form-group mb-3">
    <label class="form-label">Número de Computadores:</label>
    <input type="number" name="NumComputadores" class="form-control" id="NumComputadores" >
  </div>


  <div class="form-group mb-3">
    <label class="form-label">Informações Adicionais:</label>
    <textarea type="text" name="InformaçõesAdicionais" id="InformaçõesAdicionais" class="form-control"
    rows="6" cols="50">


    </textarea>
</select>
  </div>

      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-success bg-gradient">Criar</button>
      </div>
    </div>
  </div>
</div>
</form>
</body>
</div>
            </div>
        </div>
    </div>
</div>

@endsection
