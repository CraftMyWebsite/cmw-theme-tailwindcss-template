<?php

namespace CMW\Theme\Tailwind;

use CMW\Manager\Env\EnvManager;
use CMW\Manager\Theme\IThemeConfig;

class Theme implements IThemeConfig
{
    public function name(): string
    {
        return 'Tailwind';
    }

    public function version(): string
    {
        return '0.0.1';
    }

    public function cmwVersion(): string
    {
        return 'alpha-05';
    }

    public function author(): ?string
    {
        return 'Your Name';
    }

    public function authors(): array
    {
        return [];
    }

    public function compatiblesPackages(): array
    {
        return [
            'Core',
            'Pages',
            'Users',
            'Faq',
            'News',
            'Votes',
            'Wiki',
            'Forum',
            'Contact',
            'Shop',
        ];
    }

    public function requiredPackages(): array
    {
        return ['Core', 'Users'];
    }

    public function imageLink(): ?string
    {
        return EnvManager::getInstance()->getValue('PATH_SUBFOLDER').'Public/Themes/Tailwind/Assets/default.png';
    }
}
