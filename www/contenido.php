<html>
  <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  </head>
<body>
<br>
  <div class="container-fluid p-5 bg-primary text-white text-center text-info">
  <h5> Buenas <?php echo $_GET["name"]?> <?php echo $_GET["papellidos"]?> <?php echo $_GET["sapellidos"];?>.</h5>
    <h6>Gracias por usar nuestra agenda.</h6> 
  </div>
 <br> 
<div>
  <table class="table table-bordered">
    <thead>
      <tr>
        <td>Número de Teléfono: <?php echo $_GET["telefono"]; ?>.</td>
      </tr>
      <br>
      <tr>
        <td>Correo electrónico: <?php echo $_GET["email"]; ?>. </td>
      </tr>
     <br>
    <tr>
        <td>Contraseña: <?php echo $_GET["contraseña"]; ?>.</td>
      </tr>
    </thead>
  </table>
</div>
  
</body>
</html> 