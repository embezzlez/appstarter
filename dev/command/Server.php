<?php
namespace Dev\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputOption;

class Server extends Command
{
    // the name of the command (the part after "bin/console")
    protected static $defaultName = 'ryu:run';
    protected static $defaultDescription = 'Run local php-server development mode';
    protected function configure(): void
    {
       
        $this->addOption('at' , null, InputOption::VALUE_OPTIONAL , 'Default server is http://localhost:12345 you can change address with options --at');
    }

    protected function execute(InputInterface $input, OutputInterface $output): void
    {
       if($input->getOption('at') == null)
       {
           @system('php -S localhost:12345 -t public/');
           Command::SUCCESS;
       }else{
            @system('php -S '.$input->getOption('at').' -t public/');
           Command::SUCCESS;

       }
    }
}