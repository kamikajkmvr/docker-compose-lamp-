 <html>
   <head>
     <title>Formulario</title>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
     </head>
<body>

  <div class="container-fluid p-5 bg-primary text-white text-center">
<h1>Agenda telefónica</h1> </div>
  
<form action="contenido.php" method="get">
  
  <div class="container mt-3">
    
    <label for="name">Nombre:</label>
      <input type="name" class="form-control" id="name" placeholder="Insertar nombre" name="name"><br><br>
    
    <label for="papellidos">Primer apellidos:</label>
      <input type="papellidos" class="form-control" id="papellidos" placeholder="Insertar primer apellido" name="papellidos"><br><br>

    <label for="sapellidos">Segundo apellidos:</label>
    <input type="sapellidos" class="form-control" id="sapellidos" placeholder="Insertar segundo apellido" name="sapellidos"><br><br>

    <label for="telefono">Número de teléfono:</label><br>
    <input type="telefono" class="form-control" id="telefono" placeholder="Insertar teléfono" name="telefono"><br>
    
    <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Insertar email" name="email"><br><br>
    
    <label for="contraseñas">Contraseñas:</label><br>
        <input type="contraseña" class="form-control" id="contraseña" placeholder="Insertar contraseña" name="contraseña"><br>
    <br>
    <input type="submit">
  </div>
</form>

</body>
</html> 