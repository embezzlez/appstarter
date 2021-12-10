<?php
namespace Dev\Command;

use Illuminate\Filesystem\Filesystem;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;


class ClearCache extends Command
{
    // the name of the command (the part after "bin/console")
    protected static $defaultName = 'clear:cache';
    protected static $defaultDescription = 'Clear cache files';
    protected function configure(): void
    {
        // $this->addOption('app' , null, InputOption::VALUE_REQUIRED, 'Value for App name' );
        // $this->addOption('set-ver' , null,InputOption::VALUE_REQUIRED , 'Value for Version');
        // $this->addOption('default' , null,InputOption::VALUE_REQUIRED , 'Value for default page');
        // $this->addOption('test-mode' , null,InputOption::VALUE_REQUIRED , 'Value for test mode true or false');

    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
       
        $output->writeln('<comment>Clearing cache ... </comment>');
        $CACHEPATH = 'app/cache/';
        foreach(scandir($CACHEPATH) as $cf)
        {
            if($cf == '.' || $cf == '..')continue;
            $output->writeln('<comment>CLEAR : '.$cf);
            @unlink($CACHEPATH . $cf);
        }
        $output->writeln('<info>Successfully clear cache</info>');


       return Command::SUCCESS;
    }
   
}