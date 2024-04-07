<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <style>
         .contenedor-cards {
      display: flex;
    }

    .contenedor-cards1 {
      display: flex;
    }

    .contenedor-cards2 {
      display: flex;
    }

    .contenedor-cards3 {
      display: flex;
    }

    .card {
      /* Estilos de tu tarjeta, ajusta según sea necesario */
      width: 200px;
      margin: 10px;
      border: 1px solid #ccc;
      padding: 10px;
    }
    </style>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"><img src="https://cdn.icon-icons.com/icons2/1104/PNG/512/keyboard_78941.png" width="50px" alt=""></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Inicio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Nosotros</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Catalogo.html">Catalogo</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Monitores.html">Monitores</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Audiculares.html">Audiculares</a>
              </li>
              <li class="nav-item">
              <?php
            session_start();
            if (isset($_SESSION['email'])) {
                $email = $_SESSION['email'];
                echo "¡Bienvenido, $email!";
            }
            else {
                // Redirige si no hay sesión activa (por ejemplo, si el usuario no ha iniciado sesión)
                header("Location: Sesion.php");
                exit();
            }
            ?>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Tu cuenta
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Ver tus compras</a></li>
                  <li><a class="dropdown-item" href="#">Ver tu cuenta</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="Sesion.html">Cerrar Sesión</a></li>
                </ul>
              </li>
             
            </ul>
            
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Escribe.." aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Buscar</button>
            </form>
          </div>
        </div>
      </nav>
<br>
      <div class="alert alert-primary" role="alert">
        <center>
        Accesorios
    </center>
      </div>

      <div class="contenedor-cards">
      <div class="card" style="width: 18rem;">
        <img src="imagenes/ASTRO Gaming A50 - Headsets Gamer.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>


      <div class="card" style="width: 18rem;">
        <img src="imagenes/logitech g502.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>

      <div class="card" style="width: 18rem;">
        <img src="imagenes/logitech g502.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>

      <div class="card" style="width: 18rem;">
        <img src="imagenes/Razer Kraken Ultimate.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>

      <div class="card" style="width: 18rem;">
        <img src="imagenes/Teclado Logitech G213.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>

      <br>
      <br>
      

    </div>

    <div class="alert alert-primary" role="alert">
        <center>
            Ofertas
    </center>
      </div>
      <div class="contenedor-cards1">
        <div class="card" style="width: 18rem;">
            <img src="https://http2.mlstatic.com/D_NQ_NP_937700-CBT54352076873_032023-O.webp" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>

          <div class="card" style="width: 18rem;">
            <img src="https://http2.mlstatic.com/D_NQ_NP_644683-MLA69778825033_062023-O.webp" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>

          <div class="card" style="width: 18rem;">
            <img src="https://http2.mlstatic.com/D_NQ_NP_626310-MLA50723459765_072022-O.webp" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>

          <div class="card" style="width: 18rem;">
            <img src="https://http2.mlstatic.com/D_NQ_NP_821860-MLA51243082011_082022-O.webp" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>

          <div class="card" style="width: 18rem;">
            <img src="https://http2.mlstatic.com/D_NQ_NP_933149-MLU72636562197_112023-O.webp" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>

      </div>

      

      <div class="alert alert-primary" role="alert">
        <center>
            Compra más, ahorra más
    </center>
      </div>
      <div class="contenedor-cards2"> 
        <div class="card" style="width: 18rem;">
            <img src="https://http2.mlstatic.com/D_NQ_NP_684434-MLA69389814031_052023-O.webp" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>


          <div class="card" style="width: 18rem;">
            <img src="https://http2.mlstatic.com/D_NQ_NP_902148-MLA71535589922_092023-O.webp" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>


          <div class="card" style="width: 18rem;">
            <img src="https://http2.mlstatic.com/D_NQ_NP_684434-MLA69389814031_052023-O.webp" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>


          <div class="card" style="width: 18rem;">
            <img src="https://http2.mlstatic.com/D_NQ_NP_974425-MLU72932989975_112023-O.webp" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>


          <div class="card" style="width: 18rem;">
            <img src="https://http2.mlstatic.com/D_NQ_NP_805717-MLA52223422437_102022-O.webp" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>

      </div>
      

      <div class="alert alert-primary" role="alert">
        <center>
            Aprovecha todas nuestras ofertas
    </center>
      </div>

      <div class="contenedor-cards3"> 
        <div class="card" style="width: 18rem;">
            <img src="https://http2.mlstatic.com/D_NQ_NP_860599-MLM72902948257_112023-O.webp" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>

          <div class="card" style="width: 18rem;">
            <img src="https://http2.mlstatic.com/D_NQ_NP_835269-MLM69318303706_052023-O.webp" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>

          <div class="card" style="width: 18rem;">
            <img src="https://http2.mlstatic.com/D_NQ_NP_835269-MLM69318303706_052023-O.webp" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>

          <div class="card" style="width: 18rem;">
            <img src="https://http2.mlstatic.com/D_NQ_NP_987528-MLM71300431538_082023-O.webp" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>

          <div class="card" style="width: 18rem;">
            <img src="https://http2.mlstatic.com/D_NQ_NP_639692-MLA53739072631_022023-O.webp" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>

      </div>
</body>
</html>