<h1><?= $title ?></h1>
<section class="a-propos">
  <div class="switch-comp-exp">
    <!-- TODO : faire un scroll entre compétences et expériences -->
    <a href="<?= $pageRewrite ?>#competences">Compétences</a>
    <a href="<?= $pageRewrite ?>#experiences">Expériences</a>
  </div>
  <section class="competence">
    <h2 id="competences">Compétences</h2>
    <!-- TODO : faire un filtre "Toutes", "Back-End", "Front-End", "UI/UX Design", "Outils" -->
    <!-- les filtres -->
    <div class="filtres">
      <ul>
        <li class="filter active" data-filter="all">Toutes</li>
        <li class="filter" data-filter="back-end">Back-End</li>
        <li class="filter" data-filter="front-end">Front-End</li>
        <li class="filter" data-filter="ui-ux-design">UI/UX Design</li>
        <li class="filter" data-filter="outils">Outils</li>
      </ul>
    </div>
    <!-- les éléments a affiché -->
    <div class="elements">
      <div class="back-end">
        <img src="public/images/php.png">
        <img src="public/images/mysql.png">
        <img src="public/images/symfony.png">
        <img src="public/images/wordpress.png">
      </div>
      <div class="front-end">
        <img src="public/images/html.png">
        <img src="public/images/css.png">
        <img src="public/images/bootstrap.png">
        <img src="public/images/javascript.png">
      </div>
      <div class="outils">
        <img src="public/images/vscode.png">
        <img src="public/images/github.png">
        <img src="public/images/adobe.png">
      </div>
    </div>
  </section>
  <section class="experience">
    <div class="experience-ligne">
      <h2 id="experiences">Expériences</h2>
      <!-- TODO : Faire un bouton avec une icône pour télécharger le cv -->
      <div><a href="public/fichier/cv.pdf" download="laura-klerykowski-cv"><i class="fas fa-download"></i> Télécharger mon CV</a></div>
    </div>
    <!-- TODO : Faire un gauche droite étiquette par expérience -->
  </section>
</section>