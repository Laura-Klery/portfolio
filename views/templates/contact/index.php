<h1 class="main-titre"><?= $title ?></h1>
<form class="form-contact js-form-verif" method="post">
    <div class="form-ligne">
        <label for="contact-nom">Votre Nom *</label>
        <input class="js-verif-text" data-min="qsdssq" data-max="12" id="contact-nom" type="text" name="nom" placeholder="Nom (entre 1 et 255 caractères)">
        <span class="form-error form-error-hidden">Champs à remplir correctement</span>
    </div>
    <div class="form-ligne">
        <label for="contact-prenom">Votre Prénom *</label>
        <input class="js-verif-text" id="contact-prenom" type="text" name="prenom" placeholder="Prénom (entre 2 et 255 caractères)">
        <span class="form-error form-error-hidden">Champs à remplir correctement</span>
    </div>
    <div class="form-ligne">
        <label for="contact-email">Votre Email *</label>
        <input class="js-verif-email" data-min="8" data-max="255" id="contact-email" type="email" name="email" placeholder="Email valide (xx@xx.xx)">
        <span class="form-error form-error-hidden">Champs à remplir correctement</span>
    </div>
    <div class="form-ligne">
        <label for="contact-type">Sujet *</label>
        <select class="js-verif-select" id="contact-type" name="type">
            <option value="">Choisir</option>
            <option value="information">Demande d'information</option>
            <option value="poste">Proposition de poste</option>
            <option value="devis">Demande de devis</option>
        </select>
        <span class="form-error form-error-hidden">Champs à remplir correctement</span>
    </div>
    <div class="form-ligne">
        <label for="contact-contenu">Votre Message *</label>
        <textarea class="js-verif-text" id="contact-contenu" name="contenu" placeholder="Contenu (entre 200 et 2000 caractères)"></textarea>
        <span class="form-error form-error-hidden">Champs à remplir correctement</span>
    </div>
    <div class="form-ligne">
        <label for="contact-cgu">
            <input class="js-verif-cgu" id="contact-cgu" type="checkbox" name="cgu">
            J'accepte les <a href="cgu"><u>mentions légales</u></a> de ce site.
            <span class="form-error form-error-hidden">Case à cocher</span>
        </label>
    </div>
    <input type="submit" class="btn-cta" value="Envoyer">
    <input type="reset" class="btn-cta" value="Annuler">
    <!--<div class="form-error-principal form-error-principal-success">Votre formulaire a été envoyé avec succès.</div>-->
</form>