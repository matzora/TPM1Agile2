<?php

use Symfony\Component\Config\Loader\LoaderInterface;
use Symfony\Component\HttpKernel\Kernel;

class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = array(
            new Symfony\Bundle\FrameworkBundle\FrameworkBundle(),
            new Symfony\Bundle\SecurityBundle\SecurityBundle(),
            new Symfony\Bundle\TwigBundle\TwigBundle(),
            new Symfony\Bundle\MonologBundle\MonologBundle(),
            new Symfony\Bundle\SwiftmailerBundle\SwiftmailerBundle(),
            new Symfony\Bundle\AsseticBundle\AsseticBundle(),
            new Doctrine\Bundle\DoctrineBundle\DoctrineBundle(),
            new Sensio\Bundle\FrameworkExtraBundle\SensioFrameworkExtraBundle(),
            new AppBundle\AppBundle(),
            new Ob\HighchartsBundle\ObHighchartsBundle(),

            // TPM1Agile2
            new TPM1Agile2\Bundle\UserBundle\TPM1Agile2UserBundle(),
            new TPM1Agile2\Bundle\FrontBundle\TPM1Agile2FrontBundle(),
            new TPM1Agile2\Bundle\BackBundle\TPM1Agile2BackBundle(),

            // Doctrine fixtures
            new Doctrine\Bundle\FixturesBundle\DoctrineFixturesBundle(),

            // FOSUserBundle
            new FOS\UserBundle\FOSUserBundle(),

            // Nelmio doc bundle 
            new Nelmio\ApiDocBundle\NelmioApiDocBundle(),
            new TPM1Agile2\Bundle\VideoBundle\TPM1Agile2VideoBundle(),
        );

        if (in_array($this->getEnvironment(), array('dev', 'test'))) {
            $bundles[] = new Symfony\Bundle\DebugBundle\DebugBundle();
            $bundles[] = new Symfony\Bundle\WebProfilerBundle\WebProfilerBundle();
            $bundles[] = new Sensio\Bundle\DistributionBundle\SensioDistributionBundle();
            $bundles[] = new Sensio\Bundle\GeneratorBundle\SensioGeneratorBundle();
        }

        return $bundles;
    }

    public function registerContainerConfiguration(LoaderInterface $loader)
    {
        $loader->load($this->getRootDir() . '/config/config_' . $this->getEnvironment() . '.yml');
    }
}
