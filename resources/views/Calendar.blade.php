@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Calendário</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/css/iziToast.min.css" />
</head>
<body>
<div class="container">
    <div class="row justify-content-center">
            <div class="card">
                <div class="card-header">
                <ul class="nav nav-tabs card-header-tabs">
                <li class="nav-item">
                <a class="nav-link" href="home">Informações dos Laboratórios</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="/Solicitações">Solicitações de Agendamento</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="/Calendário">Calendário</a>
                </li>
                <li class="nav-item">
                <a class="nav-link active" href="/LabsGerente">Gerente</a>
                </li>
                </div>
                </ul>
            <h1>Calendário de Agendamento</h1>
            @if(session('solicitação'))
        <div class="alert alert-success">{{session('solicitação')}}</div>
        @endif
            <a>
                       <button type="button" class="btn btn-success bg-gradient" data-bs-toggle="modal" data-bs-target="#exampleModal">
                          <h3>Agendar Laboratório</h3>
                       </button>
                    </a>
            <hr>
            <div class="col-12">
                <div id='calendar'></div>
            </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {

            // pass _token in all ajax
             $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            // initialize calendar in all events
            var calendar = $('#calendar').fullCalendar({
                editable: false,
                events: "{{ route('calendar.index') }}",
                displayEventTime: true,
                eventRender: function (event, element, view) {
                    if (event.allDay === 'true') {
                            event.allDay = true;
                    } else {
                            event.allDay = false;
                    }
                },
                selectable: false,
                selectHelper: false,
                select: function ($request) {
                    var laboratório = prompt('Nome do Lab:');
                    var Professor = prompt('Nome do Professor:');
                    var Dia = prompt('Dia:');
                    var Horário = prompt('Horário');
                    if (event_name) {
                        $.ajax({
                            url: "{{ route('solicitação.store') }}",
                            solicitação: {
                                laboratório: laboratório,
                                Professor: Professor,
                                Dia: Dia,
                                Horário: Horário
                            },
                            type: 'post',
                            success: function (data) {
                               iziToast.success({
                                    position: 'topRight',
                                    message: 'Solicitação Enviada.',
                                });

                                calendar.fullCalendar('unselect');
                            }
                        });
                    }
                },
                eventDrop: function (event, delta) {
                    var start = $.fullCalendar.formatDate(event.start, "YYYY-MM-DD HH:mm:ss");
                    var end = $.fullCalendar.formatDate(event.end, "YYYY-MM-DD HH:mm:ss");

                    $.ajax({
                        url: "{{ route('calendar.edit') }}",
                        data: {
                            title: event.event_name,
                            start: start,
                            end: end,
                            id: event.id,
                        },
                        type: "POST",
                        success: function (response) {
                            iziToast.success({
                                position: 'topRight',
                                message: 'Agendamento Atualizado.',
                            });
                        }
                    });
                },

            });
        });
      </script>
      <hr>
    </div>
    </div>
    </div>

</div>
</div>
</div>
</div>
</div>


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
    <label class="form-label">Nome do Laboratório</label>
    <select type="text" name="laboratório" class="form-select" aria-label="Default select example" id="NomeLab">
    @foreach($data as $item)
    <option value="{{$item -> NomeLab}}">{{$item -> NomeLab}}</option>
    @endforeach
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
</body>
</html>
@endsection
