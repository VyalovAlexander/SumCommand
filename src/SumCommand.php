<?php
namespace VyalovAlexander;

use \Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use \Symfony\Component\Console\Input\InputInterface;
use \Symfony\Component\Console\Output\OutputInterface;
use VyalovAlexander\Sum;

class SumCommand extends Command
{
    protected function configure()
    {
        $this->setName("sum")
            ->setDescription("Sum of two nums")
            ->addArgument("a", InputArgument::REQUIRED, "first argument")
            ->addArgument("b", InputArgument::REQUIRED, "second argument");
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $sum = new Sum();
        $output->write($sum->process($input->getArgument("a"), $input->getArgument("b")));
    }


}