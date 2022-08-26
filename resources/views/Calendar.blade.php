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
                <a class="nav-link" href="home">Lista de Laboratórios</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="/Solicitações">Solicitações de Agendamento</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="/Calendário">Calendário</a>
                </li>
                </div>
                </ul>
            <h1>Calendário de Agendamento</h1>
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
                select: function (start, end, allDay) {
                    var event_name = prompt('Name do Lab:');
                    if (event_name) {
                        var start = $.fullCalendar.formatDate(start, "YYYY-MM-DD HH:mm:ss");
                        var end = $.fullCalendar.formatDate(end, "YYYY-MM-DD HH:mm:ss");
                        $.ajax({
                            url: "{{ route('calendar.create') }}",
                            data: {
                                title: event_name,
                                start: start,
                                end: end
                            },
                            type: 'post',
                            success: function (data) {
                               iziToast.success({
                                    position: 'topRight',
                                    message: 'Agendamento Concluído.',
                                });

                                calendar.fullCalendar('renderEvent', {
                                    id: data.id,
                                    title: event_name,
                                    start: start,
                                    end: end,
                                    allDay: allDay
                                }, true);
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
</body>
</html>
@endsection