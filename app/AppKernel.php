<?php

use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Config\Loader\LoaderInterface;

class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = array(
            // Core
            new Symfony\Bundle\FrameworkBundle\FrameworkBundle(),
            new Symfony\Bundle\SecurityBundle\SecurityBundle(),
            new Symfony\Bundle\TwigBundle\TwigBundle(),
            new Symfony\Bundle\MonologBundle\MonologBundle(),
            new Symfony\Bundle\SwiftmailerBundle\SwiftmailerBundle(),
            new Doctrine\Bundle\DoctrineBundle\DoctrineBundle(),
            new Sensio\Bundle\FrameworkExtraBundle\SensioFrameworkExtraBundle(),
            new FOS\UserBundle\FOSUserBundle(),
            new FOS\ElasticaBundle\FOSElasticaBundle(),
            new Doctrine\Bundle\FixturesBundle\DoctrineFixturesBundle(),
            new Mopa\Bundle\BootstrapBundle\MopaBootstrapBundle(),
            new Knp\Bundle\MenuBundle\KnpMenuBundle(),
            new JMS\AopBundle\JMSAopBundle(),
            new JMS\SecurityExtraBundle\JMSSecurityExtraBundle(),
            new JMS\DiExtraBundle\JMSDiExtraBundle($this),
            new FOS\JsRoutingBundle\FOSJsRoutingBundle(),
            new FOS\RestBundle\FOSRestBundle(),
            new JMS\SerializerBundle\JMSSerializerBundle(),
            new MBence\OpenTBSBundle\OpenTBSBundle(),
            new Knp\Bundle\SnappyBundle\KnpSnappyBundle(),
            new FOS\OAuthServerBundle\FOSOAuthServerBundle(),
            new Nelmio\CorsBundle\NelmioCorsBundle(),
            new Liuggio\ExcelBundle\LiuggioExcelBundle(),
            new KULeuven\ShibbolethBundle\ShibbolethBundle(),
	        new NotificationBundle\NotificationBundle(),

            // project bundles
            new Sygefor\Bundle\CoreBundle\SygeforCoreBundle(),
            new Sygefor\Bundle\ApiBundle\SygeforApiBundle(),
            new AppBundle\AppBundle(),
            new LheoBundle\LheoBundle(),
            new ActivityReportBundle\ActivityReportBundle(),

            // keep this extension at the end to ensure listeners registring order
            new Stof\DoctrineExtensionsBundle\StofDoctrineExtensionsBundle(),
            new FrontBundle\FrontBundle(),
        );

        if (in_array($this->getEnvironment(), array('dev', 'test'), true)) {
            $bundles[] = new Symfony\Bundle\DebugBundle\DebugBundle();
            $bundles[] = new Symfony\Bundle\WebProfilerBundle\WebProfilerBundle();
            $bundles[] = new Sensio\Bundle\DistributionBundle\SensioDistributionBundle();
            $bundles[] = new Sensio\Bundle\GeneratorBundle\SensioGeneratorBundle();
        }

        return $bundles;
    }

    public function registerContainerConfiguration(LoaderInterface $loader)
    {
        $loader->load($this->getRootDir().'/config/config_'.$this->getEnvironment().'.yml');
    }
}
