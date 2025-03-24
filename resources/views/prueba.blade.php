<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{config('app.name')}}</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body>

        
    <header class="container-fluid d-flex justify-content-center" style="background: #C9B194;" >
        <p class="text-light mb-0 p-2 fs-6">Contacto +52 2295496422</p>
    </header>

    <nav  class="navbar navbar-expand-lg navbar-light p-3 " style="background: #FDFAF6;"  id="menu">
        <div class="container">
            <a class="navbar-brand" href="#">
                <span class="fs-5 fw-bold" style="color: #706D54">Ejercicio | Vista</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0" style="color: #706D54>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#Git">Github</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#Contacto">Contacto</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div id="carousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="2000">
                <img src="https://cdn.pixabay.com/photo/2024/03/08/16/06/building-8621170_1280.jpg" class="img-fluid w-100" style="max-height: 39rem" alt="">
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="https://cdn.pixabay.com/photo/2017/06/06/23/46/building-2378893_1280.jpg" class="img-fluid w-100" style="max-height: 39rem" alt="...">
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="https://cdn.pixabay.com/photo/2024/11/08/09/45/facade-9182972_1280.jpg" class="img-fluid w-100" style="max-height: 39rem" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carousel"  data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carousel"  data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>    
    

    <footer class="footer" id="Contacto">
        <div class="card" style="background: #FDFAF6">
                <div class="card-header">
                    Contacto
                </div>
                <div class="card-body">
                    <h3>E-mail</h3>
                <a href="https://mail.google.com/mail/u/0/?tab=rm&ogbl#inbox?compose=GTvVlcSHvbCLQXCnkmnrcfRlTMlZLrsxMrLdBZjfSGGMtzdZlgrVjmbSFJLRWtWWlqPmXkWxRHcXr" target="_blank">jorgeivanh47@gmail.com</a>
                    <address><div class="text-ub"><p>Tantoyuca, Veracruz</p></div></address>
                    <blockquote class="blockquote mb-0">
                        <footer class="fs-6">&copy; 2025 J. Ivan. Todos los derechos reservados.</footer>
                    </blockquote>
                </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>