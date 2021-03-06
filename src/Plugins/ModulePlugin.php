<?php

declare(strict_types=1);

namespace Rinvex\Composer\Plugins;

use Composer\Composer;
use Composer\IO\IOInterface;
use Composer\Plugin\PluginInterface;
use Rinvex\Composer\Installers\ModuleInstaller;

class ModulePlugin implements PluginInterface
{
    /**
     * {@inheritdoc}
     */
    public function activate(Composer $composer, IOInterface $io)
    {
        $installer = new ModuleInstaller($io, $composer);

        $composer->getInstallationManager()->addInstaller($installer);
    }
}
