@extends('layouts.app')

@section('content')
@foreach($data as $item)
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h4>Editar Informações dos Usuário:</h4></div>

                <div class="card-body">
<form action="{{ url('EditarUsuário', ['id'=>$item->id]) }}" method="POST">
        @csrf
        @method('PUT')
      <div class="modal-body">

  <div class="form-group mb-3">
    <label class="form-label">Nome:</label>
    <input type="text" name="name" class="form-control" id="name" value="{{$item->name}}">
  </div>


  <div class="form-group mb-3">
    <label class="form-label">Email:</label>
    <input type="text" name="email" class="form-control" id="email" value="{{$item->email}}">
  </div>

  <div class="form-group mb-3">
    <label class="form-label">Curso</label>
    <input type="text" name="curso" class="form-control" id="curso" value="{{$item->curso}}">
  </div>

  <div class="form-group mb-3">
    <label class="form-label">Telefone</label>
    <input type="text" name="telefone" class="form-control" id="telefone" value="{{$item->telefone}}">
  </div>


  <div class="form-group mb-3">
    <label class="form-label">Tipo de Usuário</label>
    <select type="text" name="Admin" class="form-control" id="Admin" value="{{$item->Admin}}">
    <option selected>{{$item->Admin}}</option>
    <option value="Professor">Professor</option>
  <option value="Admin">Admin</option>
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
