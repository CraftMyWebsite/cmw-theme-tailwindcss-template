<?php

/* @var \CMW\Entity\Pages\PageEntity $page */

use CMW\Utils\Website;

Website::setTitle(ucfirst($page->getTitle()));
Website::setDescription($page->getContentPreview());
?>

<h1 class="text-center"><?= $page->getTitle() ?></h1>

<?= $page->getConverted() ?>
