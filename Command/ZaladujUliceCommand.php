<?php

namespace Qbadev\TerytBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Question\Question;

class ZaladujUliceCommand extends ContainerAwareCommand
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
                ->setName('teryt:zaladuj-ulice') // this is the command you would pass to console to run the command.
                ->setDescription('Laduje ulice do bazy danych')
                ->setDefinition([
                    new InputArgument('sciezka', InputArgument::REQUIRED, 'Sciezka do pliku ULIC.csv'),
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
        $i = 0;

        foreach ($dane as $wiersz) {
            $wiersz = trim($wiersz);
            if (!$wiersz) {
                break;
            }
            $wiersz = str_getcsv($wiersz, ';');
            $wiersz = array_combine($naglowek, $wiersz);

            $class = new \Qbadev\TerytBundle\Entity\Ulica();

            $class->loadDataFromArray($wiersz);
            $this->em->persist($class);
            if ($i++ == 10000) {
                $this->em->flush();
                $this->em->clear();
                $i = 0;
            }
        }
        $this->em->flush();
        $output->writeln('<info>Pomyślnie zaimportowano ulice.</info>');

        $this->em->getRepository('QbadevTerytBundle:Ulica')
                ->dolaczUliceDoMiejscowosci();

        $output->writeln('<info>Powiązano ulice z miejscowosciami.</info>');
    }

    /**
     * @see Command
     */
    protected function interact(InputInterface $input, OutputInterface $output)
    {
        if (!$input->getArgument('sciezka')) {
            $helper = $this->getHelper('question');

            $question = new Question('Podaj ścieżkę do pliku XML:');
            $question->setValidator(function ($answer) {
                if (empty($sciezka))
                {
                  throw new \RuntimeException(
                      'Nie podano ścieżki'
                  );
                }
                return $answer;
            });
            $question->setMaxAttempts(2);

            $sciezka = $helper->ask($input, $output, $question);
            $input->setArgument('sciezka', $sciezka);
        }
    }
}
