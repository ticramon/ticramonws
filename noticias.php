<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/ticramon.css">
    </head>
    <body>
        <?php
            require 'html/base/header.html';
            require 'html/base/nav.html';
        ?>
        <main class="contenidoPrincipal">
            <div id="inicio">
                <button class="acordeon">Acerca de</button>
                <section class="panel">
                    <p>
                    Ticramon es un proyecto de emprendimiento en el cual se encarga 
                    de dar soporte tecnico a equipos informaticos de manera presencial y remota.
                    </p>
                </section>
                <button class="acordeon">El nombre</button>
                <section class="panel">
                    <p>
                    El proyecto se estaba gestionando desde el año 2014, como ramsols.<br/>
                    El nombre viene de TIC(Tecnologias de la informacion y comunicacion)
                    RAMON del nombre del fundador, Ramón Méndez.<br/>
                    Ademas, es un juego de palabras, ram por carnero en ingles, ademas de un 
                    componente que usan las computadoras, la memoria Ram.<br/>
                    Y on, debido al sistema de encendido y apagado.
                    </p>
                </section>
                <button class="acordeon">Mision</button>
                <section class="panel">
                    <p>
                    Ser un servicio que ofrezca soluciones de computacion a largo plazo, 
                    asi mismo llegar a ser formadores en el area de informatica y computacion 
                    en el norte del estado de Guanajuato en zonas rurales.<br/>
                    Crear aplicaciones y sitios web que beneficioen economicamente 
                    y socialmente a la region norte de Guanajuato.
                    </p>
                </section>
                <button class="acordeon">Vision</button>
                <section class="panel">
                    <ul>
                        <li>Ser una empresa de soporte tecnico, ciberseguridad, redes 
                            y desarrollo de software.</li>
                        <li>Ser fuente de empleo directa para 10 personas.</li>
                        <li>Crear y formar tecnicos informaticos.</li>
                        <li>Ofrecer servicios de soporte de TI en toda la republica Mexicana, 
                            asi, como tener socios en el continente americano y Europa.</li>
                        <li>Lanzar una aplicacion de gestion de torneos deportivos.</li>
                        <li>Ser reconocidos por la calidad de servicio.</li>
                        <li>Ser instructores de capacitacion en Linux a nivel usuario.</li>
                        <li>Ser formadores y dar soluciones preventivas y correctivas 
                            en el area de ciberseguridad.</li>
                        <li>Llegar a tener un departamento de reparacion de dispositivos 
                            moviles y de Internet de las cosas.</li> 
                    </ul>
                </section>
                <button class="acordeon">Valores</button>
                <section class="panel">
                    <p>
                    Honestidad, Responsabilidad, Respeto, Calidad
                    </p>
                </section>
                <script src="js/acordeon.js"></script>
            </div>
        <?php
            require 'html/base/aside.html';
            require 'html/base/footer.html';
        ?>
    </body>
</html>




    