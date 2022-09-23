@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

        @if(session('solicitação'))
        <div class="alert alert-success">{{session('solicitação')}}</div>
        @endif

            <div class="card">
                <div class="card-header"><h3>Informações do Lab-06</h3></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>[-]
                    @endif

                    @foreach($data6 as $item6)

                    <h4>Nome: {{$item6->NomeLab}}</h4>
                    <h4>Número de Lugares: {{$item6->NumLugares}}</h4>
                    <h4>Número de Computadores: {{$item6->NumComputadores}}</h4>
                    <hr>
                    <h4>Infromações Adicionais: {{$item6->InformaçõesAdicionais}}</h4>

                    <hr>

<div  align="center">
    <a>
       <button type="button" class="btn btn-success bg-gradient" data-bs-toggle="modal" data-bs-target="#exampleModal">
          <h3>Agendar Laboratório</h3>
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
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-xl">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="exampleModalLabel">Agendar Laboratório:</h5>
<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>

<form action="{{ url('solicitação') }}" method="POST">
@csrf
<div class="modal-body">

<div class="form-group mb-3">
<label class="form-label">Nome Lab</label>
<select type="text" name="laboratório" class="form-select" aria-label="Default select example" id="NomeLab">
<option value="Lab-06">Lab-06</option>
</select>
</div>

<div class="form-group mb-3">
<label class="form-label">Nome Professor</label>
<select type="text" name="Professor" class="form-select" aria-label="Default select example" id="NomeProf">
<option value="{{ Auth::user()->name }}">{{ Auth::user()->name }}</option>
</select>
</div>

<div class="form-group mb-3">
<label class="form-label">Dia</label>
<input type="date" name="Dia" class="form-control" id="Dia">
</div>

<div class="form-group mb-3">
<label class="form-label">Horário</label>
<select type="time" name="Horário" class="form-select" aria-label="Default select example" id="Horário">
<option selected>Escolher Horário</option>
<option value="08:30-até-10:00">08:30 até 10:00</option>
<option value="10:00-até-11:30">10:00 até 11:30</option>
<option value="15:00-até-16:30">15:00 até 16:30</option>
<option value="16:30-até-18:00">16:30 até 18:00</option>
</select>
</div>

<div class="form-group mb-3">
    <label class="form-label">Estado da Solicitação</label>
    <select type="text" name="Estado" class="form-select" aria-label="Default select example" id="Estado">
    <option value="Processando">Processando</option>
</select>
  </div>

</div>
<div class="modal-footer">
<button type="button" class="btn btn-danger bg-gradient" data-bs-dismiss="modal">Cancelar</button>
<button type="submit" class="btn btn-success bg-gradient">Enviar</button>
</div>
</div>
</div>
</div>
</form>
</body>
@endsection

