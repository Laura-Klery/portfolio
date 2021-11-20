<h1><?= $title ?></h1>
<div>
  <!-- TODO : faire un scroll entre compétences et expériences -->
  <a href="<?= $pageRewrite ?>#competences">Compétences</a>
  <a href="<?= $pageRewrite ?>#experiences">Expériences</a>
</div>
<section>
  <h2 id="competences">Compétences</h2>
  <!-- TODO : faire un filtre "Toutes", "Back-End", "Front-End", "UI/UX Design", "Outils" -->
  <!-- les éléments a affiché -->
  <div class="elements">
    <div class="outils"></div>
    <div class="back-end"></div>
    <div class="outils"></div>
    <div class="ui-ux-design"></div>
    <div class="back-end"></div>
    <div class="front-end"></div>
    <div class="texte"></div>
    <div class="texte"></div>
  </div>
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
</section>
<section>
  <h2 id="experiences">Expériences</h2>
  <!-- TODO : Faire un bouton avec une icône pour télécharger le cv -->
  <!-- TODO : Faire un gauche droite étiquette par expérience -->
</section>