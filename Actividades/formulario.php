<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <title>Formulario</title>
</head>
<body>
<form>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Tu Email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="email" aria-describedby="emailHelp">

  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" placeholder="password" id="exampleInputPassword1">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="avisado" role="switch" onclick="activa(this);">
    <a href="aviso.html" class="text decoration noms" data-bs-toggle="odal" data-bs-target="Terminos" >Acepto Terminos y condiciones</a>
  </div>
  <input type="submit" value="registro" name="Bot"  class="btn btn-danger">
  <div class="map"></div>
</form>
<script>
    // funcion desabilitar boton //
    document.getElementById('registro').disabled=true;
    function activa(a);
    if(z.checked)
    document.getElementById('registro').disabled=false;
    else
    document.getElementById('registro').disabled=true;
</script>
    <?php include "include/terminos.php" ?>
</body>
</html>