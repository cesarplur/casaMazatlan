
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
         <title >Form Denuncia</title>  
         <link href="{{ asset('css/app.css') }}" rel="stylesheet">
         <script src="{{ asset('js/app.js') }}"></script>   
         <style>
         form{
            width:50%;position: absolute;
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
    <body><br><br>
    <h1 align="center">Enviar denuncia</h1><br><br>
<form  method="POST" action="{{ route('enviarcorreo') }}" align="center">
    @csrf
    <label for="exampleFormControlSelect1">Tipo de denuncia</label>
    <select class="form-control" id="seleccion" name="seleccion" required>
      <option>Tipo 1</option>
      <option>Tipo 2</option>      
    </select>  <br>
<label for="texto">Motivo de denuncia</label>
<textarea name="denuncia" id="texto" placeholder="Denuncia" class="form-control" rows="3" required>
</textarea>
<BR>
<button class="btn btn-primary">Enviar</button>
</form>    
    

    </body>
</html>
