<section class="section-services">
    <div class="conteneur-principal">
        <div class="grille-services">
            <div class="carte-service blanche">
                <h3>Full Directory</h3>
                <p>Browse every accredited university and school in Morocco with one click.</p>
                <button class="bouton-outline">View Directory</button>
            </div>
            <div class="carte-service blanche">
                <h3>Admission Guides</h3>
                <p>Deep dive into requirements, exam formats, and registration deadlines.</p>
                <button class="bouton-outline">Read Guides</button>
            </div>
            <div class="carte-service bleue">
                <h3>Personal Profile</h3>
                <p>Save your favorite schools and track your applications in one place.</p>
                <button class="bouton-rempli-blanc">Create Profile</button>
            </div>
            <div class="carte-service blanche">
                <h3>Expert Support</h3>
                <p>Need more help? Our counselors are available for personalized guidance.</p>
                <button class="bouton-vert">Get Support</button>
            </div>
        </div>
    </div>
</section>

<footer class="footer-site">
    <div class="conteneur-principal footer-grille">
        <div class="footer-col">
            <h2 class="footer-logo">UniWay Maroc</h2>
            <p class="footer-description">Empowering Moroccan students with smart guidance. Find the perfect university, school, or institute based on your academic profile and career aspirations.</p>
            <div class="footer-sociaux">
                <span class="rond-social">f</span>
                <span class="rond-social">t</span>
                <span class="rond-social">i</span>
                <span class="rond-social">in</span>
            </div>
        </div>

        <div class="footer-col">
            <h4>Quick Links</h4>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">University Search</a></li>
                <li><a href="#">Admission Guide</a></li>
                <li><a href="#">Scholarships</a></li>
                <li><a href="#">Career Paths</a></li>
            </ul>
        </div>

        <div class="footer-col">
            <h4>Resources</h4>
            <ul>
                <li><a href="#">Baccalaureate Streams</a></li>
                <li><a href="#">Minimum Grades</a></li>
                <li><a href="#">Entrance Exams</a></li>
                <li><a href="#">City Directory</a></li>
                <li><a href="#">Blog & News</a></li>
            </ul>
        </div>

        <div class="footer-col">
            <h4>Stay Connected</h4>
            <p>📧 www.UniWaymaroc@gmail.ma</p>
            <p>📍  Morocco</p>
            <div class="newsletter-box">
                <input type="email" placeholder="Your email address">
                <button>Subscribe</button>
            </div>
        </div>
    </div>
    <div class="footer-bas">
        <p>&copy; 2026 EduMaroc. All rights reserved. Designed for Moroccan Students.</p>
        <div class="footer-liens-legaux">
            <a href="#">Privacy Policy</a>
            <a href="#">Terms of Service</a>
            <a href="#">Cookie Policy</a>
        </div>
    </div>
</footer>
    <style>

        /* --- Style global du Footer --- */
.footer-site {
    background-color: #f8fafb;
    padding: 80px 0 20px;
    border-top: 1px solid #e1e8ed;
    color: #444;
}

/* --- Logos et Icônes Sociales --- */
.footer-logo {
    color: #06508d;
    font-size: 1.8rem;
    font-weight: 700;
    margin-bottom: 20px;
}

.footer-sociaux {
    display: flex;
    gap: 15px;
    margin-top: 25px;
}

.rond-social {
    width: 35px;
    height: 35px;
    background-color: #ffffff;
    border: 1px solid #ddd;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: bold;
    color: #06508d;
    cursor: pointer;
    transition: all 0.3s ease;
    box-shadow: 0 2px 5px rgba(0,0,0,0.05);
}

.rond-social:hover {
    background-color: #06508d;
    color: white;
    transform: translateY(-5px);
    border-color: #06508d;
}

/* --- Liens du Footer --- */
.footer-col h4 {
    color: #0d1b2a;
    font-size: 1.1rem;
    margin-bottom: 25px;
    position: relative;
}

/* Petite ligne sous les titres */
.footer-col h4::after {
    content: '';
    position: absolute;
    left: 0;
    bottom: -8px;
    width: 30px;
    height: 2px;
    background-color: #1a6d61;
}

.footer-col ul li a {
    text-decoration: none;
    color: #666;
    transition: all 0.3s ease;
    display: inline-block; /* Pour l'animation */
}

.footer-col ul li a:hover {
    color: #1a6d61;
    transform: translateX(8px); /* Petit décalage vers la droite */
}

/* --- Newsletter --- */
.newsletter-box {
    display: flex;
    margin-top: 20px;
    background: white;
    padding: 5px;
    border-radius: 8px;
    border: 1px solid #ddd;
    transition: border-color 0.3s ease;
}

.newsletter-box:focus-within {
    border-color: #06508d;
    box-shadow: 0 0 0 3px rgba(6, 80, 141, 0.1);
}

.newsletter-box input {
    border: none;
    padding: 10px;
    flex: 1;
    outline: none;
    font-size: 0.9rem;
}

.newsletter-box button {
    background-color: #06508d;
    color: white;
    border: none;
    padding: 10px 20px;
    border-radius: 6px;
    cursor: pointer;
    font-weight: 600;
    transition: background 0.3s ease;
}

.newsletter-box button:hover {
    background-color: #033a66;
}

/* --- Barre de Copyright --- */
.footer-bas {
    margin-top: 60px;
    padding-top: 25px;
    border-top: 1px solid #eee;
    display: flex;
    justify-content: space-between;
    align-items: center;
    font-size: 0.85rem;
}

.footer-liens-legaux a {
    margin-left: 20px;
    text-decoration: none;
    color: #999;
}

.footer-liens-legaux a:hover {
    text-decoration: underline;
}





        /* --- Styles de base améliorés --- */
.section-services {
    background-color: #f0f4f4;
    padding: 80px 0;
}

.carte-service {
    position: relative;
    padding: 40px;
    border-radius: 20px; /* Coins plus arrondis */
    transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
    border: 1px solid transparent;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
}

/* Carte Blanche avec effet de lumière */
.carte-service.blanche {
    background: white;
    box-shadow: 0 10px 30px rgba(0,0,0,0.03);
}

.carte-service.blanche:hover {
    transform: translateY(-12px);
    box-shadow: 0 20px 40px rgba(0,0,0,0.08);
    border-color: #e0e0e0;
}

/* Carte Bleue avec dégradé */
.carte-service.bleue {
    background: linear-gradient(135deg, #06508d 0%, #033a66 100%);
    color: white;
    box-shadow: 0 10px 30px rgba(6, 80, 141, 0.2);
}

.carte-service.bleue:hover {
    transform: translateY(-12px);
    box-shadow: 0 20px 45px rgba(6, 80, 141, 0.3);
}

/* --- Décoration des Boutons --- */
.carte-service button {
    width: fit-content;
    font-weight: 600;
    transition: all 0.3s ease;
    position: relative;
    overflow: hidden;
}

/* Animation "View Directory" & "Read Guides" */
.bouton-outline:hover {
    background-color: #06508d;
    color: white !important;
    padding-right: 30px;
}

.bouton-outline:hover::after {
    content: ' →';
    position: absolute;
    right: 10px;
}

/* Animation "Create Profile" (Bouton Blanc) */
.bouton-rempli-blanc:hover {
    background-color: #f0f0f0;
    transform: scale(1.05);
    letter-spacing: 0.5px;
}

/* Animation "Get Support" (Bouton Vert) */
.bouton-vert {
    background: #0d836d;
    box-shadow: 0 4px 15px rgba(13, 131, 109, 0.2);
}

.bouton-vert:hover {
    background: #0a6b59;
    box-shadow: 0 6px 20px rgba(13, 131, 109, 0.4);
    transform: scale(1.05);
}

/* Petite décoration en arrière-plan des cartes */
.carte-service::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: radial-gradient(circle at top right, rgba(255,255,255,0.1), transparent);
    pointer-events: none;
}
        /* --- SECTION SERVICES --- */
.section-services {
    background-color: #f0f4f4;
    padding: 60px 0;
}

.grille-services {
    display: grid;
    grid-template-columns: repeat(2, 1fr); /* 2 colonnes */
    gap: 25px;
}

.carte-service {
    padding: 30px;
    border-radius: 12px;
    box-shadow: 0 4px 10px rgba(0,0,0,0.05);
}

.carte-service.blanche {
    background-color: #ffffff;
}

.carte-service.bleue {
    background-color: #06508d;
    color: white;
}

.carte-service h3 {
    margin-top: 0;
    font-size: 1.4rem;
}

.carte-service p {
    color: #666;
    margin-bottom: 25px;
}

.carte-service.bleue p {
    color: #d1e3f1;
}

/* Boutons spécifiques */
.bouton-outline {
    background: transparent;
    border: 1.5px solid #06508d;
    color: #06508d;
    padding: 10px 20px;
    border-radius: 6px;
    cursor: pointer;
}

.bouton-rempli-blanc {
    background: white;
    color: #06508d;
    border: none;
    padding: 10px 20px;
    border-radius: 6px;
    font-weight: bold;
}

.bouton-vert {
    background: #0d836d;
    color: white;
    border: none;
    padding: 10px 20px;
    border-radius: 6px;
}

/* --- FOOTER --- */
.footer-site {
    background-color: #f8fafb;
    padding: 60px 0 20px;
    border-top: 1px solid #e1e8ed;
}

.footer-grille {
    display: grid;
    grid-template-columns: 2fr 1fr 1fr 1.5fr;
    gap: 40px;
    margin-bottom: 40px;
}

.footer-logo {
    color: #06508d;
    margin-bottom: 20px;
}

.footer-col h4 {
    color: #333;
    margin-bottom: 20px;
}

.footer-col ul {
    list-style: none;
    padding: 0;
}

.footer-col ul li {
    margin-bottom: 10px;
}

.footer-col a {
    text-decoration: none;
    color: #666;
    font-size: 0.9rem;
}

.newsletter-box {
    display: flex;
    margin-top: 15px;
}

.newsletter-box input {
    flex: 1;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px 0 0 5px;
}

.newsletter-box button {
    background-color: #06508d;
    color: white;
    border: none;
    padding: 10px 15px;
    border-radius: 0 5px 5px 0;
    cursor: pointer;
}

.footer-bas {
    border-top: 1px solid #eee;
    padding-top: 20px;
    display: flex;
    justify-content: space-between;
    font-size: 0.8rem;
    color: #999;
}

/* --- RESPONSIVE --- */
@media (max-width: 900px) {
    .footer-grille {
        grid-template-columns: repeat(2, 1fr); /* 2x2 sur tablettes */
    }
}

@media (max-width: 600px) {
    .grille-services, .footer-grille {
        grid-template-columns: 1fr; /* 1 colonne sur mobile */
    }
    .footer-bas {
        flex-direction: column;
        text-align: center;
        gap: 10px;
    }
}
    </style>

    <script>
        // Attendre que le DOM soit chargé
document.addEventListener('DOMContentLoaded', () => {

    // --- 1. Animation d'apparition au défilement (Scroll Reveal) ---
    const observateur = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
            }
        });
    }, { threshold: 0.1 });

    // On observe les cartes et les titres
    const elementsAnimes = document.querySelectorAll('.carte-service, .bloc-temoignage, .carte-conseil, .titre-principal');
    elementsAnimes.forEach(el => {
        el.classList.add('fade-in'); // Ajoute la classe de base
        observateur.observe(el);
    });

    // --- 2. Animation du bouton Newsletter ---
    const btnSubscribe = document.querySelector('.newsletter-box button');
    if (btnSubscribe) {
        btnSubscribe.addEventListener('click', function() {
            const input = this.previousElementSibling;
            if (input.value.includes('@')) {
                this.innerHTML = "✓ Done!";
                this.style.backgroundColor = "#27ae60";
                input.value = "";
                setTimeout(() => {
                    this.innerHTML = "Subscribe";
                    this.style.backgroundColor = "#06508d";
                }, 3000);
            } else {
                input.style.borderColor = "red";
                setTimeout(() => input.style.borderColor = "#ccc", 2000);
            }
        });
    }

    // --- 3. Effet de parallaxe léger sur les icônes rondes ---
    document.addEventListener('mousemove', (e) => {
        const icones = document.querySelectorAll('.icone-ronde');
        const x = (window.innerWidth - e.pageX * 2) / 100;
        const y = (window.innerHeight - e.pageY * 2) / 100;

        icones.forEach(icone => {
            icone.style.transform = `translate(${x}px, ${y}px)`;
        });
    });
});
    </script>