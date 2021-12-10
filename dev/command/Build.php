<?php
namespace Dev\Command;

use Illuminate\Filesystem\Filesystem;
use Alchemy\Zippy\Zippy;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Boris\Boris;
use Symfony\Component\Console\Input\ArrayInput;

class Build extends Command
{
    // the name of the command (the part after "bin/console")
    protected static $defaultName = 'build';
    protected static $defaultDescription = 'Build framework to zip file';
    protected function configure(): void
    {
        // $this->addOption('app' , null, InputOption::VALUE_REQUIRED, 'Value for App name' );
        // $this->addOption('set-ver' , null,InputOption::VALUE_REQUIRED , 'Value for Version');
        // $this->addOption('default' , null,InputOption::VALUE_REQUIRED , 'Value for default page');
        // $this->addOption('test-mode' , null,InputOption::VALUE_REQUIRED , 'Value for test mode true or false');

    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $output->writeln('<comment> Remove .access_key </comment>');
        @unlink('public/badpanel/.access_key');
        
        $output->writeln('<comment>Running `clear:cache` </comment>');
        $cmd = $this->getApplication()->find('clear:cache');
        $arg = [];
        $arr = new ArrayInput($arg);
        $cmd->run($arr, $output);

        $output->writeln('<comment>Running `clear:logs recursive` </comment>');
        $cmdx = $this->getApplication()->find('clear:logs');
        $arg = ['recursive'=> 'recursive'];
        $arr = new ArrayInput($arg);
        $cmdx->run($arr, $output);

        $output->writeln('<comment>Running `composer update --no-dev` </comment>');
        @system('composer update --no-dev');

        $base = dirname(dirname(__DIR__)).'/';
        require $base.'app/config/web.php';
        $filename = strtolower(str_replace(" " ,"-",$config['web']['app_name'])).'['.$config['web']['version'].']-'.date('dmY').'.zip';
       $output->writeln("<comment>Generate htaccess.txt and index.php files ...</comment>");
       
       copy($base.'vendor/embezzlez/embezzle/src/htaccess.txt',$base.'htaccess.txt');
       copy($base.'vendor/embezzlez/embezzle/src/installer.php',$base.'index.php');
        $this->createZip($filename);
        $output->write('<info>Successfully build application : '.$filename.' </info>');
       return Command::SUCCESS;
    }
    protected function createZip($file)
    {
        $zip = Zippy::load();
        $base = dirname(dirname(__DIR__)).'/';
        $archive = $zip->create($file , [$base .'app' ,
                                              $base . 'public',
                                              $base .'vendor',
                                              $base . 'index.php',
                                              $base .'htaccess.txt'
                                              ] , true);
        
    }
   
}