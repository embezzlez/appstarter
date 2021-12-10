<?php
namespace Dev\Command;

use Illuminate\Filesystem\Filesystem;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;


class ClearLogs extends Command
{
    // the name of the command (the part after "bin/console")
    protected static $defaultName = 'clear:logs';
    protected static $defaultDescription = 'Clear logs files';
    protected function configure(): void
    {
        $this->addArgument('recursive' ,  InputArgument::OPTIONAL, 'Recursive delete logs' );
        // $this->addOption('set-ver' , null,InputOption::VALUE_REQUIRED , 'Value for Version');
        // $this->addOption('default' , null,InputOption::VALUE_REQUIRED , 'Value for default page');
        // $this->addOption('test-mode' , null,InputOption::VALUE_REQUIRED , 'Value for test mode true or false');

    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
       
        $output->writeln('<comment>Clearing Logs ... </comment>');
        $CACHEPATH = 'public/logs/';
        foreach(scandir($CACHEPATH) as $cf)
        {
            if($cf == '.' || $cf == '..' || $cf == 'index.html' || !preg_match("/log/",$cf))continue;
            $output->writeln('<comment>CLEAR : '.$cf);
            @unlink($CACHEPATH . $cf);
        }
        if($input->getArgument('recursive')){

            foreach(scandir($CACHEPATH.'/test_send/') as $cf)
            {
                if($cf == '.' || $cf == '..' )continue;
                $output->writeln('<comment>CLEAR TEST SEND : '.$cf);
                @unlink($CACHEPATH . $cf);
            }
        }
        $output->writeln('<info>Successfully clear logs</info>');


       return Command::SUCCESS;
    }
   
}