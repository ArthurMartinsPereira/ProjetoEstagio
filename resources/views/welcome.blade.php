<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Sistema de Agendamento</title>

        <!-- Fontes -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Estilos -->

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>

<!-- Estilo dos Botões -->
        <style>
            button {
  background-color: #2753a0;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  border-radius: 8px;
  border: 2px solid #ffffff;
  display: block;
  width: 250px;
  transition-duration: 0.4s;
  cursor: pointer;
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
  margin-bottom: 5px;
}

button:hover {
  background-color: #0c80ed;
  color: white;
}

        </style>

        <style>
        a{
  position: relative; top:150px;
        }</style>

             <style>
        body{
            background: linear-gradient(90deg, #ffb700, #fca600, #f79403, #f2830a, #eb7212 100%);
  color: #ffffff;
        }
        </style>

</head>

<body class="antialiased">
    <h1 align="center">Sistema de Agendamento de Laboratórios</h1>
    <hr>
    <div align="center">
    <!--<img src=https://avatars.githubusercontent.com/u/10983643?s=280&v=4width="160" height="160">-->
    </div>
   <!-- Botões -->

         <div align="center">

                <div>

                        <a href="{{ route('login') }}">
                            <button type="submit" class="bottom-3 btn btn-primary bg-gradient">
                                    <h4>Login</h4>
                                </button></a>

                        <a href="/register">
                             <button type="submit" class="bottom-3 btn btn-primary bg-gradient">
                                <h4>Registrar-se</h4>
                            </button></a>

                </div>

         </div>

</body>
</html>
<!-- Para ecessa a tela de login
   <a href="{{ route('login') }}"></a>  -->

   <!-- Para ecessa a tela de registro
   <a href="{{ route('register') }}"></a>  -->

