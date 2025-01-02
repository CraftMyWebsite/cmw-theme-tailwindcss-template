<?php

use CMW\Controller\Users\UsersController;
use CMW\Manager\Env\EnvManager;
use CMW\Model\Core\MenusModel;
use CMW\Utils\Website;

$menus = MenusModel::getInstance();
?>

<nav class="bg-gray-300 dark:bg-gray-800 text-gray-800 dark:text-gray-300 p-4 flex justify-between items-center">
    <div class="text-lg font-bold">
        <?= Website::getWebsiteName() ?>
    </div>

    <ul class="flex space-x-4">
        <?php foreach ($menus->getMenus() as $menus): ?>
            <?php if ($menus->isUserAllowed()): ?>
                <li <?php if ($menus->urlIsActive()) { echo 'text-blue-500'; } ?>>
                    <a href="<?= $menus->getUrl() ?>" <?= !$menus->isTargetBlank() ?: "target='_blank'" ?> class="hover:text-gray-300"><?= $menus->getName() ?></a>
                </li>
            <?php endif; ?>
        <?php endforeach; ?>
    </ul>

    <div class="flex items-center gap-4">
        <?php if (UsersController::isUserLogged() && UsersController::isAdminLogged()): ?>
            <div>
                <a href="<?= EnvManager::getInstance()->getValue('PATH_SUBFOLDER') ?>cmw-admin" target="_blank" class="bg-blue-500 hover:bg-blue-600 py-2 px-4 rounded">
                    Panel Admin
                </a>
            </div>
        <?php else: ?>
            <div>
                <a href="<?= EnvManager::getInstance()->getValue('PATH_SUBFOLDER') ?>login" class="bg-blue-500 hover:bg-blue-600 py-2 px-4 rounded">
                    Connexion
                </a>
            </div>
        <?php endif; ?>

        <!--A UTILISER UNIQUEMENT SI ON VEUT LE SWITCH LIGHT / DARK
        <button id="theme-toggle" type="button" class="text-gray-500 dark:text-gray-400 p-2.5">
            <svg id="theme-toggle-dark-icon" class="hidden w-5 h-5 text-gray-800" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path></svg>
            <svg id="theme-toggle-light-icon" class="hidden w-5 h-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" fill-rule="evenodd" clip-rule="evenodd"></path></svg>
        </button>
        -->
    </div>
</nav>
