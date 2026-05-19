    document.querySelectorAll('.navbar-link-item').forEach(link => {
    link.addEventListener('click', function() {
        // Remove active class from others
        document.querySelectorAll('.navbar-link-item').forEach(l => l.style.color = '');
        // Set active color
        this.style.color = '#075985';
    });
});

// Action button click
const navbarStartBtn = document.querySelector('.navbar-btn-primary');
navbarStartBtn.addEventListener('click', () => {
    console.log('Analysis Started!');
    // logic dyalk hna
});


const navbarToggle = document.getElementById('navbar-toggle');
const navbarMenu = document.getElementById('navbar-menu');

navbarToggle.addEventListener('click', () => {
    // Kat-zid awla t-7iyd class 'is-open' mlli tcliqui
    navbarMenu.classList.toggle('is-open');
    
    // Animation sghira l-hamburger menu (optional)
    navbarToggle.classList.toggle('active');
});

// Ila cliquiti f ay blasa khra mghir l-menu, i-tsed l-menu bo7do
document.addEventListener('click', (e) => {
    if (!navbarToggle.contains(e.target) && !navbarMenu.contains(e.target)) {
        navbarMenu.classList.remove('is-open');
    }
});