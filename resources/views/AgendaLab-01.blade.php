@extends('layouts.app')

<!--Esta View não está sendo usada no Sistema -->

@section('content')
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body>
<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h3>Agenda Lab-01</h3></div>

                <div class="card-body">
                    <h6>Horários das 14:00 até 15:00</h6>
                <a>
                    <button type="button" class="btn btn-success bg-gradient" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <h6>Agendar</h6>
                    </button>
                </a>
                <hr>
                <h6>Horários das 15:00 até 16:00</h6>
                <a>
                    <button type="button" class="btn btn-success bg-gradient" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <h6>Agendar</h6>
                    </button>
                </a>
                <hr>
                <h6>Horários das 16:00 até 17:00</h6>
                <a>
                    <button type="button" class="btn btn-success bg-gradient" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <h6>Agendar</h6>
                    </button>
                </a>
                <hr>
                <h6>Horários das 17:00 até 18:00</h6>
                <a>
                    <button type="button" class="btn btn-success bg-gradient" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <h6>Agendar</h6>
                    </button>
                </a>


<!--Modal das Solicitações -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agendar Laboratório:</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <form action="{{ action('SolicitaçõesController@store') }}" method="POST">
      @csrf
        {{ csrf_field() }}
      <div class="modal-body">

  <div class="mb-3">
    <label class="form-label">Nome Lab</label>
    <input type="text" name="Laboratório" class="form-control" id="NomeLab">
  </div>

  <div class="mb-3">
    <label class="form-label">Nome Professor</label>
    <input type="text" name="Professor" class="form-control" id="NomeProf">
  </div>

  <div class="mb-3">
    <label class="form-label">Dia</label>
    <input type="date" name="Dia" class="form-control" id="Dia">
  </div>

  <div class="mb-3">
    <label class="form-label">Horário</label>
    <select type="time" class="form-select" aria-label="Default select example" id="Horário" name="Horário" class="form-control">
  <option selected>Escolher Horário</option>
  <option value="1">08:30 até 10:00</option>
  <option value="2">10:00 até 11:30</option>
  <option value="3">15:00 até 16:30</option>
  <option value="4">16:30 até 18:00</option>
</select>
  </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary">Enviar</button>
      </div>
    </div>
  </div>
</div>
</form>

                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
@endsection
