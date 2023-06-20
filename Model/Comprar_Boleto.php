<?php
// Incluye el archivo de conexión a la base de datos
include("conexion.php");
?>

<!doctype html>
  <html lang="en">

  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700,900&display=swap" rel="stylesheet">


    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
      <!-- Estilo Propio -->
      <link rel="stylesheet" href="../View/Assets/Css/style.css">

  </head>

  <body>
    <header>
  <!-- Menu -->    
      <input class="menu-icon" type="checkbox" id="menu-icon" name="menu-icon"/>
      <label for="menu-icon"></label>
      <nav class="nav"> 		
        <ul class="pt-5">
          <li><a href="/balneario/index.html">Inicio</a></li>
          <li><a href="/View/Assets/Templates/Reglas.html">Reglas Del Parque</a></li>
          <li> <a href="/View/Assets/Templates/Atraciones.html">Atracciones</a></a></li>
          <li><a href="./Comprar_Boleto.html">Comprar Boletos</a></li>
        </ul>
      </nav>
    </header>

    <main>
    <!-- Fondo -->
      <div class="Fondo">
        <img src="./View/Assets/Img/Fondo_Los_Rosales.jpg" alt="Balneario Los Rosales" srcset="">
          <!-- Texto Del Fondo -->
          <div class="textFondo">
              <h1>Compra Tu Boleto</h1>
          </div>
      </div>

      <!-- Formulario -->
      <div class="content">
        <div class="container">
          <div class="row align-items-stretch no-gutters contact-wrap">
            <div class="col-md-12">
              <div class="form h-100">
                <h3>Comprar Boleto</h3>
                <form class="mb-5" method="post" action="compra.php">
                  <div class="row">
                    <div class="col-md-6 form-group mb-3">
                      <label for="" class="col-form-label">Nombre *</label>
                      <input type="text" class="form-control" name="txtname" id="txtname" placeholder="Escribe Tu Nombre">
                    </div>

                    <div class="col-md-6 form-group mb-3">
                      <label for="" class="col-form-label">Apellido *</label>
                      <input type="text" class="form-control" name="txtapellido" id="txtapellido" placeholder="Escribe Tu Apellido">
                    </div>

                    <div class="col-md-6 form-group mb-3">
                      <label for="" class="col-form-label">Fecha *</label>
                      <input type="date" class="form-control" name="txtFecha" id="txtFecha">
                    </div>

                    <div class="col-md-6 form-group mb-3">
                      <label for="" class="col-form-label">Email *</label>
                      <input type="text" class="form-control" name="txtemail" id="txtemail"  placeholder="Escribe Tu email">
                    </div>
                  </div>
    
                    <div class="col-md-6 form-group mb-3">
                      <label for="" class="col-form-label">Adultos *</label>
                        <select class="form-control" id="txtAdulto" name="txtAdulto">
                          <option selected>Seleccione....</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                          <option value="5">5</option>
                          <option value="6">6</option>
                          <option value="7">7</option>
                          <option value="8">8</option>
                          <option value="9">9</option>
                          <option value="10">10</option>
                          <option value="11">11</option>
                          <option value="12">12</option>
                        </select>
                    </div>

                    <div class="col-md-6 form-group mb-3">
                      <label for="" class="col-form-label">Menores De Edad *</label>
                        <select class="form-control" id="txtMenor" name="txtMenor">
                          <option selected>Seleccione....</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                          <option value="5">5</option>
                          <option value="6">6</option>
                          <option value="7">7</option>
                          <option value="8">8</option>
                          <option value="9">9</option>
                          <option value="10">10</option>
                          <option value="11">11</option>
                          <option value="12">12</option>
                        </select>
                    </div>

                  <div class="row">
                    <div class="col-md-12 form-group">
                      <input type="submit" value="Comprar" class="btn btn-primary rounded-0 py-2 px-4">
                      <span class="submitting"></span>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
    
      </div>
      <!-- Ventana emergente -->
        <div id="modal" class="modal">
          <div class="modal-content">
            <span class="close">&times;</span>
            <p id="modal-message"></p>
          </div>
        </div>

    </main>

    <footer class="footer-distributed">
      <!-- Pie de página -->
      <div class="footer-left">
            
        <br>
        <p class="footer-links">
          <a href="/index.html">Inicio</a>
          <a href="/View/Assets/Templates/Reglas.html">Reglas Del Parque</a>
          <a href="/View/Assets/Templates/Atraciones.html">Atracciones</a>
          <a href="./Comprar_Boleto.html">Comprar Boletos</a>
        </p>
        <p class="footer-company-name">Stiven Chacón © 2021</p>
      </div>
      <div class="footer-center">
        <div>
          <i class="fa fa-map-marker"></i>
          <p><span> DIRECCION: KM 25 VIA HOBO</span>CAMPOALEGRE/HUILA</p>
        </div>
        <div>
          <i class="fa fa-phone"></i>
          <p>+1.555.555.5555</p>
        </div>
        <div>
          <i class="fa fa-envelope"></i>
          <p><a>losrosales@gmail.com</a></p>
        </div>
        <div class="footer-logo">
          <img src="/View/Assets/Img/logo.png" width="200xp" height="120xp">
      </div>
    </footer>

    
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
      integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
      integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>

  <script>
  // Obtén la referencia al elemento de la ventana emergente
  var modal = document.getElementById("modal");

  // Obtén la referencia al elemento de cierre (x)
  var closeBtn = document.getElementsByClassName("close")[0];

  // Función para mostrar la ventana emergente con un mensaje
  function showModal(message) {
    // Actualiza el contenido del mensaje en la ventana emergente
    document.getElementById("modal-message").innerHTML = message;

    // Muestra la ventana emergente
    modal.style.display = "block";
  }

  // Cierra la ventana emergente cuando se hace clic en el botón de cierre (x)
  closeBtn.onclick = function() {
    modal.style.display = "none";
  }

  // Cierra la ventana emergente cuando se hace clic fuera de ella
  window.onclick = function(event) {
    if (event.target == modal) {
      modal.style.display = "none";
    }
  }
</script>
  </body>
  </html>
