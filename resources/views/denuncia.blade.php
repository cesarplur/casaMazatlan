
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <script src="{{ asset('js/app.js') }}"></script> 
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
        <title>Form Denuncia</title>

        <!-- Fonts 
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">-->

        <!-- Styles -->
        <style>
            html, body {
               
            }
            form{
              position: absolute;
              top: 30%;
              left: 50%;
              transform: translate(-49%, -49%);
            }
            h1{
              text-align: center;
              top: 20%;
              left: 50%;              
            }
        </style>
    </head>
    <body>
        <br><br><br>
    <H1>Enviar denuncia</H1>
    <form style="width:50%" method="POST" action="{{ route('denuncia') }}">
    @csrf
    <br><br><br><br>
    <label for="exampleFormControlInput1">Direccion de correo</label>
    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="nombre@ejemplo.com">  
    <label for="exampleFormControlSelect1">Tipo de denuncia</label>
    <select class="form-control" id="exampleFormControlSelect1">
      <option>Tipo 1</option>
      <option>Tipo 2</option>      
    </select>  
    <label for="exampleFormControlTextarea1">Motivo de denuncia</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea><br>  
    <button type="button" class="btn btn-primary" onclick="test()">Enviar</button>

</form>

    </body>
</html>
<script type="text/javascript">
function test() { 
    location.href = "{{ route('denuncia') }}";
}
</script>