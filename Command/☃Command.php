<?php

namespace Benjamin\☃Bundle\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputInterface;

class ☃Command extends Command
{
    public function configure()
    {
        $this
            ->setName('☃')
            ->setAliases(array('snowman'))
            ->setDescription('Hey it\s winter !');
    }

    public function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln('☃ ☃ ☃');
    }
}
