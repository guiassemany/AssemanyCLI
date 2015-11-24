<?php

namespace ACG\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class AboutCommand extends Command
{
    protected function configure()
    {
        $this
            ->setName('about')
            ->setDescription('About the ACG')
        ;
    }
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln('Hello! This is the Assemany Code Generator! Welcome!');
    }
}