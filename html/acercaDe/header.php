
<header id="encabezadoPagina">
    <button id="iniciarSesion" class="btn success" onclick="showMainContent()">Login</button>
    <figure>
        <!-- Your logo goes here -->
        <img id="logotipo" src="../../img/ticramon-mobile.png" alt="Ticramon">
    </figure>
    <!-- Hamburger menu icon -->
    <div class="hamburger">&#9776;</div>
    <nav class="menu">
        <!-- Navigation menu items -->
        <ul class="menu">
          <li><a href="index.html">Inicio</a></li>
          <li><a href="acercade.html">Acerca de</a></li>
          <li><a href="servicios.html">Servicios</a></li>
          <li><a href="cursos.html">Cursos</a></li>
          <li><a href="galeria.html">Galeria</a></li>
          <li><a href="tienda.html">Tienda</a></li>
          <li><a href="testimonios.html">Testimonios</a></li>
          <li><a href="contacto.html">Contacto</a></li>
        </ul>
    </nav>
</header>
<script>
    const hamburger = document.querySelector('.hamburger');
    const navMenu = document.querySelector('nav.menu');

    hamburger.addEventListener('click', function() {
        navMenu.classList.toggle('show-menu');
    });
</script>
<main class="container">
    <header>
      <span class="close" title="Close Form" onclick="closeForm()">&times;</span>
      <figure class="logo">
        <!-- Your logo here -->
        <img src="img/ticramon-mobile.png" alt="Ticramon">
      </figure>
    </header>
    <section class="form-container">
      <form id="login-form">
        <input type="text" placeholder="Email" required>
        <input type="password" placeholder="Password" required>
        <button type="submit">Login</button>
      </form>
      <form id="signup-form" style="display: none;">
        <input type="text" placeholder="First Name" required>
        <input type="text" placeholder="Last Name" required>
        <input type="email" placeholder="Email" required>
        <input type="password" placeholder="Password" required>
        <button type="submit">Sign Up</button>
      </form>
    </section>
    <footer class="login-link" id="login-link">
      <p>Don't have an account? <a href="#" onclick="toggleForm()">Sign Up</a></p>
    </footer>
  </main>
  <script>
    function toggleForm() {
      var loginForm = document.getElementById('login-form');
      var signupForm = document.getElementById('signup-form');
      var loginLink = document.getElementById('login-link');
      if (loginForm.style.display === 'none') {
        loginForm.style.display = 'flex';
        signupForm.style.display = 'none';
        loginLink.innerHTML = '<p>Don\'t have an account? <a href="#" onclick="toggleForm()">Sign Up</a></p>';
      } else {
        loginForm.style.display = 'none';
        signupForm.style.display = 'flex';
        loginLink.innerHTML = '<p>Already have an account? <a href="#" onclick="toggleForm()">Login</a></p>';
      }
    }

    function showMainContent() {
      var mainContent = document.querySelector('main');
      mainContent.style.display = 'block';
    }

    function closeForm() {
      var mainContent = document.querySelector('main');
      mainContent.style.display = 'none';
    }

    // Close the main content if clicked outside of it
    window.onclick = function(event) {
      var mainContent = document.querySelector('main');
      if (event.target === mainContent) {
        mainContent.style.display = 'none';
      }
    };
  </script>
