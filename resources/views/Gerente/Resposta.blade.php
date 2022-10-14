@extends('layouts.app')

@section('content')
@foreach($data10 as $item10)
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h4>Responder Solicitação:</h4></div>

                <div class="card-body">
<form action="{{ url('Gerente.Responder', ['id'=>$item10->id]) }}" method="POST">
        @csrf
        @method('PUT')
      <div class="modal-body">
      <h4>Agendamento: {{$item10->laboratório}}</h4>
                            <h4>Dia Agendado: {{$item10->Dia}}</h4>
                            <h4>Horário Agendado: {{$item10->Horário}}<h4>
                            <h4>Professor: {{$item10->Professor}}<h4>
  <div class="form-group mb-3">
    <label class="form-label">Estado:</label>
    <input type="text" name="Estado" class="form-control" id="Estado" value="{{$item10->Estado}}">
  </div>

</select>
  </div>

      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-success bg-gradient">Responder</button>
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
