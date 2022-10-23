@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" ></script>
    <style type="text/css">

        .error-main{
          background-color: #fff;
          box-shadow: 0px 10px 10px -10px #5D6572;
        }
        .error-main h2{
          font-weight: bold;
          color: #444444;
          font-size: 80px;
          text-shadow: 2px 4px 5px #6E6E6E;
        }
        .error-main h3{
          color: #42494F;
        }
        .error-main p{
          color: #9897A0;
          font-size: 45px;
        }
    </style>
</head>
<body>
    <div class="container">
      <div class="row text-center">
        <div class="col-lg-6 offset-lg-3 col-sm-6 offset-sm-3 col-12 p-3 error-main">
          <div class="row">
            <div class="col-lg-8 col-12 col-sm-10 offset-lg-2 offset-sm-1">
              <h2 class="m-0">Acesso Negado</h2>
              <hr>
              <h3>Sem Autorizações Necessárias</h3>
              <hr>
              <a class="nav-link" href="home">
                <button type="submit" class="btn btn-primary bg-gradient">
                    <h4>Voltar</h4>
    </button>
                </a>
            </div>
          </div>
        </div>
      </div>
    </div>
</body>
</html>
@endsection
