<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="../CSS/Style.css" href="style.css">
    
    <title>Prueba</title>
</head>
<body>
<div class="container">
<div class="col-md-12">
<br>
<div class="row">
 <div class="col-md-6">
    <h2 class="h2"> Datos </h2>
 </div>
 <div class="col-md-6">
 <form id="Search" align="right">
 <input type="text" name="Search" id="search" placeholder="Buscar">
 <button type="submit" class="btn btn-primary">Buscar</button>
 </form>
 </div>
 </div>

<hr>
<br>
<div class="row">
<div class="col-md-6">
<form id="form-datos">
<input type="hidden" id="Id">
<div class="form-group">
<label for="Nombre">*Nombre:</label>
<input type="text" name="Nombre" id="Nombre">
</div>
<br>
<div class="form-group">
<label for="Apellido">*Apellido:</label>
<input type="text" name="Apellido" id="Apellido">
</div>
<br>
<div class="col-md-6" align="center">
<button type="submit" class="btn btn-primary"  name="btn-enviar">Enviar</button>
</div>
</form>
</div>
<div class="col-md-6">
<div class="card my-4" id="result">
<div class="card-body">
<ul id="container" ></ul>
</div>
</div>
 <table class="table table-bordered table-sm">
 <thead>
 <tr>
     <td>Id</td>
    <td>Nombre</td> 
    <td>Apellido</td>
    <td>Eliminar</td>
 </tr>
 </thead>
 <tbody id="datos">
 
 </tbody>
 </table>
</div>
</div>
</div>
</div>

</div>
    
</body>
</html>
<script
  src="https://code.jquery.com/jquery-3.6.0.js"
  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
  crossorigin="anonymous"></script>
<script src="validar.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>