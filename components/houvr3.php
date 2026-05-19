<section class="section-conseils">
    <div class="conteneur-principal">
        <h2 class="titre-principal">Essential Guidance</h2>
        <p class="sous-titre">Tips to help you make the right choice after your Baccalaureate.</p>
        
        <div class="cgrille-conseils">
            <div class="ccarte-conseil">
                <div class="cicone-ronde">🛡️</div>
                <h3 class="ctitre-carte">Interpreting Grades</h3>
                <p class="ctexte-carte">Understand how regional vs. national exam scores affect your final average and admission chances for specific schools.</p>
            </div>
            <div class="ccarte-conseil">
                <div class="cicone-ronde">📖</div>
                <h3 class="ctitre-carte">Open vs. Limited Access</h3>
                <p class="ctexte-carte">Learn the difference between "Facultés" (Open) and "Grandes Écoles" (Limited) regarding curriculum and career paths.</p>
            </div>
            <div class="ccarte-conseil">
                <div class="cicone-ronde">ℹ️</div>
                <h3 class="ctitre-carte">Entrance Exam Prep</h3>
                <p class="ctexte-carte">Find out which schools require a "Concours" and get tips on how to prepare for the specific testing formats used in Morocco.</p>
            </div>
        </div>
    </div>
</section>

<section class="section-temoignages">
    <div class="conteneur-principal">
        <h2 class="titre-principal">Student Success Stories</h2>
        <div class="cgrille-temoignages" id="grilleTemoignages">
            <div class="bloc-temoignage">
                <div class="etoiles">★★★★★</div>
                <p class="citation">"I was confused between ENSA and prep classes. EduMaroc showed me the exact thresholds."</p>
                <div class="infos-etudiant">
                    <span class="nom-etudiant">Yassine B.</span>
                    <span class="filiere-etudiant">Engineering Student</span>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section-formulaire">
    <div class="conteneur-principal">
        <h3 class="titre-form">Partagez votre expérience</h3>
        <form id="monFormulaire" class="form-container">
            <input type="text" id="nom" placeholder="Votre nom (ex: Sara M.)" required>
            <input type="text" id="filiere" placeholder="Votre filière (ex: ENCG Student)" required>
            <textarea id="commentaire" placeholder="Votre témoignage..." rows="4" required></textarea>
            <button type="submit" class="bouton-envoyer">Publier mon témoignage</button>
        </form>
    </div>
</section>


    <style>



 /* Conteneur commun */
.conteneur-principal {
    max-width: 1100px;
    margin: 0 auto;
    padding: 50px 20px;
}

.titre-principal {
    text-align: center;
    font-size: 2.2rem;
    color: #0d1b2a;
    margin-bottom: 10px;
}

.sous-titre {
    text-align: center;
    color: #666;
    margin-bottom: 40px;
}

/* Grilles */
.cgrille-conseils{
    display: flex;
    gap: 25px;
    flex-wrap: wrap; /* Pour le responsive */
}
.cgrille-temoignages {
    display: flex;
    flex-direction: column; /* Hada houwa l-sir bach yji wahed taht wahed */
    gap: 20px;              /* L-khwa (margin) bin kol comontaire */
    max-height: 450px;      /* L-irtifa3 li ghir y-foutoh joj y-ban l-solam */
    overflow-y: auto;       /* Activer l-solam (scroll) */
    padding-right: 10px;
}

/* Style des cartes de conseil */
.ccarte-conseil {
    flex: 1;
    min-width: 250px;
    text-align: center;
}

.cicone-ronde {
    background-color: #075985;
    width: 60px;
    height: 60px;
    border-radius: 50%;
    margin: 0 auto 15px;
    display: flex;
    align-items: center;
    justify-content: center;
}

/* Style des blocs de témoignage */
.bloc-temoignage {
    width: 100%;            /* Bach l-comontaire y-ched l-3ard kamel */
    flex: 0 0 auto;
    min-width: 280px;
    background: #f8fafb;
    padding: 25px;
    border-left: 4px solid #075985;
    border-radius: 5px;
    display: flex;
    flex-direction: column;
}

.etoiles {
    color: #ffb400;
    margin-bottom: 15px;
}

.citation {
    font-style: italic;
    font-size: 0.95rem;
    margin-bottom: 20px;
    flex-grow: 1;
}

.infos-etudiant {
    display: flex;
    flex-direction: column;
}

.nom-etudiant {
    font-weight: bold;
    color: #111;
}

.filiere-etudiant {
    font-size: 0.85rem;
    color: #888;
}

/* Responsive */
@media (max-width: 768px) {
    .grille-conseils, .grille-temoignages {
        flex-direction: column;
    }
}

.section-formulaire {
    background-color: #fcfcfc;
    border-top: 1px solid #eee;
}

.titre-form {
    text-align: center;
    margin-bottom: 20px;
    color: #075985;
}

.form-container {
    max-width: 600px;
    margin: 0 auto;
    display: flex;
    flex-direction: column;
    gap: 15px;
}

.form-container input, .form-container textarea {
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-family: inherit;
}

.bouton-envoyer {
    background-color: #075985;
    color: white;
    padding: 12px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-weight: bold;
    transition: 0.3s;
}

.bouton-envoyer:hover {
    background-color: #075985;
}
    </style>

    <script>
        document.getElementById('monFormulaire').addEventListener('submit', function(e) {
    e.preventDefault(); // Empêche le rechargement de la page

    // 1. Récupérer les valeurs des champs
    const nom = document.getElementById('nom').value;
    const filiere = document.getElementById('filiere').value;
    const commentaire = document.getElementById('commentaire').value;

    // 2. Créer le nouveau bloc de témoignage (HTML)
    const nouveauTemoignage = document.createElement('div');
    nouveauTemoignage.classList.add('bloc-temoignage');

    nouveauTemoignage.innerHTML = `
        <div class="etoiles">★★★★★</div>
        <p class="citation">"${commentaire}"</p>
        <div class="infos-etudiant">
            <span class="nom-etudiant">${nom}</span>
            <span class="filiere-etudiant">${filiere}</span>
        </div>
    `;

    // 3. L'ajouter à la grille existante
    const grille = document.getElementById('grilleTemoignages');
    grille.prepend(nouveauTemoignage); // "prepend" pour l'afficher en premier

    // 4. Vider le formulaire
    this.reset();
    
    // Petit message de succès (optionnel)
    alert("Merci ! Votre témoignage a été ajouté.");
});
    </script>

