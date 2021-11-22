<h1><?= $title ?></h1>
<section class="presentation">
  <h2>Présentation</h2>
  <article class="presentation-texte">
    <p>Bonjour, je m’appelle Laura Klerykowski. Etudiante en deuxième année de Bachelor Développement Web à Digital Campus Bordeaux. Anciennement diplômée d’un DEUG en Sciences de l’Education ainsi que d’un bac général série économique et sociale avec spécialisation math. J’ai décidé de changer de voix et de me rapprocher de mes passions qui sont : l’écriture, la musique et le web. Alors, après plusieurs semaines de recherche dans les métiers du web, j’ai découvert le développement web, j’ai suivi plusieurs tuto tout en pratiquant et j’ai vraiment accroché.</p>
    <div class="presentation-image">
      <img src="public/images/galaxie.jpg">
    </div>
  </article>
</section>
<section class="competences">
  <h2 class="competences-titre">Compétences</h2>
  <div class="competences-logo">
    <img src="public/images/html.png">
    <img src="public/images/css.png">
    <img src="public/images/javascript.png">
    <img src="public/images/php.png">
    <img src="public/images/vscode.png">
  </div>
  <a href="about" class="btn">Compétences</a>
</section>
<section class="experiences">
  <h2>Expériences</h2>
  <div class="container-accordeon">
    <button class="accordion">Avril 2021 – Juin 2021 Stage chez Décographik à Bordeaux</button>
    <div class="accordion-content">
      <p>Développeur WordPress / WooCommerce</p>
      <p>Création d’un e-commerce par le biais de WordPress et WooCommerce en personnalisant le thème Astra et en utilisant le plugin Elementor. </p> 
      <p>Création des fiches produits avec un tableur Excel pour les différents tarifs.</p>
    </div>
    <button class="accordion">Time to React Edition 2021</button>
    <div class="accordion-content">
      <p>Hackathon sur trois jours. Une collègue de l’école LISAA et moi-même étions chef de projet pour un groupe de 6 personnes. Nous devions faire une proposition de site responsive, ainsi que d’une étude de marché, et une liste de prospect. Le tout correspondant au projet et à l’organisation de la journée Time To React 2022 que nous avions imaginés.</p>
    </div>
    <button class="accordion">Octobre 2020 – Mars 2021 Les grands projets Digital Campus</button>
    <div class="accordion-content">
      <p>Réalisation d'un projet réel sous la direction de deux chefs de projets. Le projet comprend une refonte du site web, une nouvelle stratégie de communication, une nouvelle charte graphique et éditoriale.</p>
    </div>
  </div>
  <div class="container-accordeon">
    <button class="accordion">2020 – 2023 Bachelor Développeur Web</button>
    <div class="accordion-content">
      <p>Digital Campus Bordeaux. Actuellement en 2ème Année.</p>
    </div>
    <button class="accordion">Octobre 2019 – Avril 2020 Formation développeur web & mobile</button>
    <div class="accordion-content">
      <p>Cursus sur une année, fait à Digital Campus Rennes.</p>
    </div>
    <button class="accordion">Septembre 2016 – Juin 2018 Diplôme d’Etude Universitaire Générale en Sciences de l’Education</button>
    <div class="accordion-content">
      <p>Après le bac, j'ai </p>
    </div>
  </div>
  <a href="about" class="btn">Expériences</a>
</section>
<section class="projets">
  <h2>Projets</h2>
  <?php require('views/templates/_slide_projects.php') ?>
  <a href="projects" class="btn">Projets</a>
</section>