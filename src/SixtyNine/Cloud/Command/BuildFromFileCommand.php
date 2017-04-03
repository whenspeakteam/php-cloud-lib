<?php

namespace SixtyNine\Cloud\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class BuildFromFileCommand extends BaseCloudCommand
{
    protected function configure()
    {
        parent::configure();
        $this
            ->setName('cloud:from-file')
            ->setDescription('Create a cloud from the words in a file')
            ->addArgument('file', InputArgument::REQUIRED, 'The path to the file containing the words')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $helper = new CommandsHelper();
        $helper->createCloud('from-file', $input);
    }
}
