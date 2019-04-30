<?php

use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Config\Loader\LoaderInterface;

/**
 * Class AppKernel
 */
class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = [
            new Symfony\Bundle\FrameworkBundle\FrameworkBundle(),
            new Symfony\Bundle\SecurityBundle\SecurityBundle(),
            new Symfony\Bundle\TwigBundle\TwigBundle(),
            new Symfony\Bundle\MonologBundle\MonologBundle(),
            new Symfony\Bundle\SwiftmailerBundle\SwiftmailerBundle(),
            new Sensio\Bundle\FrameworkExtraBundle\SensioFrameworkExtraBundle(),
            
            // Debugging
            new Symfony\Bundle\DebugBundle\DebugBundle(),
            new Sensio\Bundle\DistributionBundle\SensioDistributionBundle(),
            new Sensio\Bundle\GeneratorBundle\SensioGeneratorBundle(),
            new Symfony\Bundle\WebProfilerBundle\WebProfilerBundle(), //may not be needed
            new Symfony\Bundle\WebServerBundle\WebServerBundle(),

            // Custom
            new App\DashboardBundle\AppDashboardBundle(),
            new App\CaseboxCoreBundle\AppCaseboxCoreBundle(),
            new App\RemoteSyncBundle\AppRemoteSyncBundle(),
            new App\BackupBundle\AppBackupBundle(),
            new App\SystemLogBundle\AppSystemLogBundle(),
            new App\SystemServiceBundle\AppSystemServiceBundle(),
            new App\EcryptFsBundle\AppEcryptFsBundle(),
            new Api\MicroDbBundle\ApiMicroDbBundle(),
            new App\ComposerBundle\AppComposerBundle(),
            new App\ShareBundle\AppShareBundle(),
            new App\ClearCacheBundle\AppClearCacheBundle(),
            new App\RestoreBundle\AppRestoreBundle(),
            new App\SecurityBundle\AppSecurityBundle(),
        ];

        return $bundles;
    }

    public function getRootDir()
    {
        return __DIR__;
    }

    public function getCacheDir()
    {
        return dirname(__DIR__).'/var/cache/'.$this->getEnvironment();
    }

    public function getLogDir()
    {
        return dirname(__DIR__).'/var/logs';
    }

    public function registerContainerConfiguration(LoaderInterface $loader)
    {
        $loader->load($this->getRootDir().'/config/config_'.$this->getEnvironment().'.yml');
    }
}
