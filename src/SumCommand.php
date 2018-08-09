<?php
namespace TrubinE;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Output\OutputInterface;
//use TrubinEN\Test;
use FFormula\Sum; 

class SumCommand extends Command
{
    public function configure()
    {
        $this->setName("sum")
             ->setDescription("Sum 2 numbers")
             ->addArgument('a', InputArgument::REQUIRED, 'First number')
             ->addArgument('b', InputArgument::REQUIRED, 'Two number');
    }

   protected function execute (InputInterface $input, OutputInterface $output)
   {
       $a = $input->getArgument('a');
       $b = $input->getArgument('b');
       $sum = new Sum();
       $res = $sum->sum($a, $b);
       $output->writeln($res);
   }
}
