<?php
namespace AppBundle\Command;

use Sensio\Bundle\GeneratorBundle\Command\GenerateDoctrineCrudCommand;
use Sensio\Bundle\GeneratorBundle\Generator\DoctrineCrudGenerator;
use Symfony\Component\HttpKernel\Bundle\BundleInterface;

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;

/**
* @class GenerateDoctrineCrudCommand
* This Classs overrides GenerateDoctrineCrudCommand
* 
*/
class GenerateAdminCommand extends GenerateDoctrineCrudCommand
{
    protected function configure()
    {
         
        dump('You should know...');exit;
        parent::configure();
        $this->setName('app:generate:crud');
        $this->setDescription('Coucou, je suis la surcharge');
    }

    protected function getGenerator(BundleInterface $bundle = null)
    {
        if (null === $this->generator)
        {
            $this->generator = new DoctrineCrudGenerator($this->getContainer()->get('filesystem'), __DIR__.'/../Resources/skeleton/crud');
        }

        return $this->generator;
    }

}