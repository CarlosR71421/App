<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cero CR</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Exo+2:ital,wght@0,100..900;1,100..900&family=Tiny5+Duo:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
    <header>
        <header>
        <nav class="navbar bg-body-tertiary">
            <div class="container">
                <a class="navbar-brand" href="#home">
                    <img src="{{ asset('icons/home.svg') }}" alt="Home"> Inicio
                </a>
            </div>
        </nav>

        <nav class="navbar bg-body-tertiary">
            <div class="container">
                <a class="navbar-brand" href="#about">
                    <img src="{{ asset('icons/acerca.svg') }}" alt="About"> Acerca de
                </a>
            </div>
        </nav>

        <nav class="navbar bg-body-tertiary">
            <div class="container">
                <a class="navbar-brand" href="#contact">
                    <img src="{{ asset('icons/contact.svg') }}" alt="Contact"> Contacto
                </a>
            </div>

            <div>

        </nav>

    </header>    
    </header>    
<body>
    <section id="home">
        <h1>Hola! Soy Carlos<img src="{{ asset('icons/dino.svg') }}" alt="Dino"></h1>
        <br>
        <h2>Bienvenido a Cero CR</h2>
        <p>Explora mi mundo de música, creatividad y codigo.</p>
        <img src="{{ asset('img/section1.jpg') }}" alt="Bienvenido">
    </section>





    <section id="about">
        <h1>Acerca de Cero CR</h1>
        <p>Descubre más sobre mi trayectoria y pasión por la música.</p>
            <img src="{{ asset('img/section2.jpg') }}" alt="Descubre">
    


    <h2>Mi historia</h2>        
    <div class="card">
        <img src="{{ asset('icons/history.svg') }}" class="card-img-top" alt="...">
        <div class="card-body">
        </div>
</div>
    
    <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            Más sobre mi
        </button>
        <ul class="dropdown-menu">
            <li><a href="https://open.spotify.com/playlist/69iMzXWIJDSEMrCqgBq7nr?si=IZ_v4n8eRS-myB8M7TbH3w" target="_blank">Mi música</a></li>
            <li><a href="https://carlosr71421.github.io/trabajo/INDEX.HTML" target="_blank">Mis proyectos</a></li>
        </ul>
    </div>

    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    </section>





    <section id="contact">
        <h1>Contacto</h1>
        <p>¡Contáctame para colaborar o preguntar sobre mi trabajo!</p>
    
    
    
    
    
    
    
    </section>





    <footer class ="footer">
        <p>&copy; 2024 Cero CR. Todos los derechos reservados.</p>
    </footer>
</body>
</html>