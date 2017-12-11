<?php

namespace Qbadev\TerytBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class ZaladujGminyCommand extends ContainerAwareCommand
{
    /**
     * Initialize whatever variables you may need to store beforehand, also load
     * Doctrine from the Container.
     */
    protected function initialize(InputInterface $input, OutputInterface $output)
    {
        parent::initialize($input, $output); //initialize parent class method

        $this->em = $this->getContainer()->get('doctrine')->getManager(); // This loads Doctrine, you can load your own services as well
    }

    /**
     * Configure the task with options and arguments.
     */
    protected function configure()
    {
        parent::configure();

        $this

        ->setName('teryt:zaladuj-gminy') // this is the command you would pass to console to run the command.
        ->setDescription('Laduje gminy, powiaty oraz wojewodztwa do bazy danych')
        ->setDefinition([
                new InputArgument('sciezka', InputArgument::REQUIRED, 'Sciezka do pliku TERC.csv'),
            ]
        );
    }

    /**
     * Our console/task logic.
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $sciezka = $input->getArgument('sciezka');
        $dane = file($sciezka);
        $naglowek = str_getcsv($dane[0], ';');

        unset($dane[0]);

        foreach ($dane as $wiersz) {
            $wiersz = trim($wiersz);
            if (!$wiersz) {
                break;
            }
            $wiersz = str_getcsv($wiersz, ';');
            $wiersz = array_combine($naglowek, $wiersz);
                    //print_r($wiersz);exit;
            if ($wiersz['POW'] == '') {
                $class = new \Qbadev\TerytBundle\Entity\Wojewodztwo();
            } elseif ($wiersz['GMI'] == '') {
                $class = new \Qbadev\TerytBundle\Entity\Powiat();
            } else {
                $class = new \Qbadev\TerytBundle\Entity\Gmina();
            }
            $class->loadDataFromArray($wiersz);
            $this->em->persist($class);
        }
        $this->em->flush();

        $output->writeln('<info>Pomyślnie zaimportowano powiaty, gminy oraz województwa.</info>');

        $this->em->getRepository('QbadevTerytBundle:Powiat')
                ->dolaczPowiatyDoWojewodztw();

        $output->writeln('<info>Powiązano powiaty z województwami.</info>');

        $this->em->getRepository('QbadevTerytBundle:Gmina')
                ->dolaczGminyDoWojewodztw();

        $output->writeln('<info>Powiązano gminy z województwami.</info>');

        $this->em->getRepository('QbadevTerytBundle:Gmina')
                ->dolaczGminyDoPowiatow();

        $output->writeln('<info>Powiązano gminy z powiatami.</info>');

    }

    /**
     * @see Command
     */
    protected function interact(InputInterface $input, OutputInterface $output)
    {
        if (!$input->getArgument('sciezka')) {
            $sciezka = $this->getHelper('dialog')->askAndValidate(
                $output,
                'Podaj ścieżkę do pliku XML:',
                function ($sciezka) {
                    if (empty($sciezka)) {
                        throw new \Exception('Nie podano ścieżki');
                    }

                    return $sciezka;
                }
            );
            $input->setArgument('sciezka', $sciezka);
        }
    }
}
