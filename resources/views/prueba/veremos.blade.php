<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Mi trabajo</title>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
            <style>
                body{
                    margin: 0;
                    padding: 0;
                    font-family: sans-serif;
                }
                .color-container{
                    width: 16px;
                    height: 16px;
                    display: inline-block;
                    border-radius: 4px;
                }
                a{
                    text-decoration: none;
                }
            </style>
    
    </head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Mis actividades</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                    <a class="nav-link" href="{{ route('todos') }}">Tareas</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="{{ route('categories.index') }}">Categorias</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="prueba">El extra</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card h-100">
      <img src="imagen/cuatro.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Música</h5>
        <p class="card-text">La música es una de las llamadas Bellas Artes, es decir, a un género artístico, 
            que consiste en conseguir efectos estéticos a través de la manipulación de sonidos vocales o 
            instrumentales, conforme a estándares culturales de ritmo, armonía y melodía.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="imagen/cinco.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Historia</h5>
        <p class="card-text">El origen de la música se encuentra cubierto de misterio, aunque se estima comenzó en 
            la prehistoria de la humanidad 
            y se lo vincula con los ritos de apareamiento y con el trabajo colectivo.
La danza y el canto parecen haber estado desde el principio asociados al modo en que el ser humano comprende el mundo. </p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-20">
      <img src="imagen/siete.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Características</h5>
        <p class="card-text">Se caracteriza por el empleo de producir una secuencia
            estéticamente apreciable y significativa, por lo tanto sus 
            propiedades dependerán de las condiciones en que se ejecute un instrumento. Posee un ejecutor o intérprete, 
            que es quien emplea el instrumento musical, 
            que es quien concibió el lenguaje rítmico y sonoro que será luego interpretado en escena. </p>
      </div>
    </div>
  </div>
</div>

    </body>
</html>
