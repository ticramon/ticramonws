<main>
    <section>
        <article></article>
    </section>
    <aside class="interno">
    </aside>
    <article>
        <section>
            <header class="accordion">
                <h1>Que es Ticramon</h1>
            </header>
            <article class="panel">
                Ticramon es un proyecto de emprendimiento en el cual se encarga 
                de dar soporte tecnico a equipos informaticos de manera presencial y remota.
            </article>
        </section>
        <section>
            <header class="accordion">
                <h1>Historia</h1>
            </header>
            <article class="panel">
                El proyecto se estaba gestionando desde el año 2014, como ramsols.<br/>
                    El nombre viene de TIC(Tecnologias de la informacion y comunicacion)
                    RAMON del nombre del fundador, Ramón Méndez.<br/>
                    Ademas, es un juego de palabras, ram por carnero en ingles, ademas de un 
                    componente que usan las computadoras, la memoria Ram.<br/>
                    Y on, debido al sistema de encendido y apagado.
            </article>
        </section>
        <section>
            <header class="accordion">
                <h1>Mision</h1>
            </header>
            <article class="panel">
                Ser un servicio que ofrezca soluciones de computacion a largo plazo, 
                    asi mismo llegar a ser formadores en el area de informatica y computacion 
                    en el norte del estado de Guanajuato en zonas rurales.<br/>
                    Crear aplicaciones y sitios web que beneficioen economicamente 
                    y socialmente a la region norte de Guanajuato.
            </article>
        </section>
        <section>
            <header class="accordion">
                <h1>Vision</h1>
            </header>
            <article class="panel">
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
            </article>
        </section>
        <section>
            <header class="accordion">
                <h1>Valores</h1>
            </header>
            <article class="panel">
                Honestidad, Responsabilidad, Respeto, Calidad
            </article>
        </section>
    </article>
    <script>
        var acc = document.getElementsByClassName("accordion");
        var i;
        
        for (i = 0; i < acc.length; i++) {
          acc[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var panel = this.nextElementSibling;
            if (panel.style.display === "block") {
              panel.style.display = "none";
            } else {
              panel.style.display = "block";
            }
          });
        }
        </script>
</main>
