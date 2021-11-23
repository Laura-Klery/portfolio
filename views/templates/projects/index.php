<h1><?= $title ?></h1>
<section class="projets-slider">
    <?php require('views/templates/_slide_projects.php') ?>
</section>
<section class="projets">
    <div class="filtres-projets">
        <ul>
            <li class="filter active" data-filter="all">Tous</li>
            <li class="filter" data-filter="html">HTML</li>
            <li class="filter" data-filter="css">CSS</li>
            <li class="filter" data-filter="javascript">JavaScript</li>
            <li class="filter" data-filter="php">PHP</li>
            <li class="filter" data-filter="symfony">Symfony</li>
            <li class="filter" data-filter="mysql">MySql</li>
            <li class="filter" data-filter="wordpress">WordPress</li>
            <li class="filter" data-filter="design">Design</li>
        </ul>
    </div>
    <!-- les éléments a affiché -->
    <div class="elements-projets">
        <div class="html css" data-category="html css">
            <a href="public/projets/family-circus/index.html">
                <img src="public/images/family-circus.png">
            </a>
        </div>
    </div>
</section>