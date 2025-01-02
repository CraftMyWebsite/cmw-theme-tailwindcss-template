<?php

use CMW\Controller\Users\UsersSessionsController;
use CMW\Utils\Website;

Website::setTitle('Accueil');
Website::setDescription("page d'accueil de CraftMyWebsite");
?>

<div class="text-center mt-24">
    <h3>Bienvenue sur votre site <?= UsersSessionsController::getInstance()->getCurrentUser()?->getPseudo() ?? '' ?> ! </h3>
    <p>Vous pouvez dès à présent commencer le développement de votre thème avec Tailwind CSS et Flowbite !</p>
</div>
