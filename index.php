<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulario</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">"
</head>
<body>

<header>
    <h2 class="text-center">Fomulario de envio</h2>
</header>
<br>
<br>
<main>
<div class = "container">
   <div class = "row Justify-content-start" >
      <div class = "col-12 col-md-5" > 
         <h4>Crear Registro</h4>
         <br>         
         <form>
  <div class="form-group">
    <label for="EmailUsuario">Correo Electronico</label>
    <input type="email" class="form-control" id="EmailUsuario" aria-describedby="emailHelp">
    <small id="EmailUsuario" class="form-text text-muted"> Nunca compartiremos tu correo electrónico con nadie más.</small>
  </div>
  <div class="form-group">
    <label for="PasswordUsuario">Contraseña</label>
    <input type="password" class="form-control" id="PasswordUsuario">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary btn-block">Agregar</button>
</form>        
<br>
<br>
<br>
<h4>Consultar Registro</h4>
<form>
<input class = "form-control-lg" type = "text" placeholder = "Nombre Usuario" >
<br>
<button type="submit" class="btn btn-success btn-block">Buscar</button>
<br>
<br>
<br>
<br>
<h4>Eliminar Registro</h4>
<form>
<input  class = "form-control form-control-lg"  type = "text"  placeholder = "Nombre Usuario" >
<br>
<button  type = "submit "  class = "btn btn-danger btn-block">Actualizar</button >
        </div >
<div  class = " row Justify-content-start " >
            <div  class = " col-12 col-md-7 " >
                <h2> Resultados </h2>
            </div >
        </div >
     </div >
  </div >
</div >

</main>
<footer>
</footer>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script> 
  
</body>
</html>
