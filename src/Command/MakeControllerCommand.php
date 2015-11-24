<?php

namespace ACG\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputOption;


class MakeControllerCommand extends Command
{
    protected function configure()
    {
        $this
            ->setName('make:controller')
            ->setDescription('Generates a new controller')
            ->addArgument(
                'name',
                InputArgument::REQUIRED,
                'The controller name (Ex: PostsController)'
            )
            ->addOption(
               'plain',
               null,
               InputOption::VALUE_NONE,
               'If \'plain\' option is passed, the controller will be created with no predefined actions'
            )
        ;
    }
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $name = $input->getArgument('name');
        $type = $input->getOption('plain') == 1 ? 'Plain' : 'Complete' ;
        $output->writeln('Controller '.$name.' was created ! - Method: '. $type);
    }
}