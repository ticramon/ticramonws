const hamburger = document.querySelector('.hamburger');
const navMenu = document.querySelector('nav.menu');

hamburger.addEventListener('click', function() {
    navMenu.classList.toggle('show-menu');
});

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
