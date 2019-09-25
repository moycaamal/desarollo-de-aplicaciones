<!-- si la sesion existe, entonces mistrar la pagina
  si la sesion

-->

<?php require_once "includes/funciones.php" ?>
<!DOCTYPE html>
<html lang="mx">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Apartado de Cañones</title>
  <link rel="stylesheet" href="css/estilo.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<body>
  <nav class="navbar navbar-dark bg-dark">
    <a class="navbar-brand" href="#">
      <img src="img/logo.svg" width="30" height="30" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Dropdown
          </a>

          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>
 <section class="wrapper">
    <aside class="sidebar">
      <h2>Apartado Cañones</h2>
      <ul>
        <li><a href="#"> Usuarios</a></li>
      </ul>
    </aside>
    <div id="contenedor-principal">
      <table>
        <thead>
          <tr>
            <th>#</th>
            <th>Matricula</th>
              <th>Nombre</th>
                <th>Telefono</th>
                  <th>Correo Electronico</th>
                    <th>Nivel</th>
          </tr>
        </thead>
      </tbody>

      <?php 
      //$usuarios =$db->get("usuarios","*",["nombre"=>6]);


            //$usuarios = $db->select("usuarios", "*");
            //$usuarios = $db->select("usuarios", "*",["AND" => ["usr_status" => 1, "usr_nivel" => 2]]);  
            //print_r($uarios);
            //se utiliza get cuando solo es un registro esclusivo
            $row = $db->get("usuarios","*",["matricula" => 6]);
            //foreach ($usuarios as $usuario => $row){
              ?>
              <tr>
                <td><?php echo $row['matricula'];?></td>
                <td><?php echo $row['nombre'];?></td>
                <td><?php echo $row['telefono'];?></td>
                <td><?php echo $row['correo'];?></td>
                <td><?php echo $row['nivel'];?></td>
                <td><?php echo $row['status'];?></td>
                <td><?php echo $row['password'];?></td>
              </tr>
              <?php
            //}
            ?>
          </tbody>
        </table>
      </div>
    </div>
  </section>

  <footer>
    <p><i class="fas fa-user-lock"></i> Sistema desarrollado por La Logia Corp.</p>
  </footer>

  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="https://use.fontawesome.com/releases/v5.10.2/js/all.js" data-auto-replace-svg="nest"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>