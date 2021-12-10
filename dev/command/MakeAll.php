<?php
namespace Dev\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\ArrayInput;

class MakeAll extends Command
{
    // the name of the command (the part after "bin/console")
    protected static $defaultName = 'make:all';
    protected static $defaultDescription = 'Generate request and page files';
    protected function configure(): void
    {
        $this->addOption('name' , null, InputOption::VALUE_REQUIRED, 'Value for page name and request name' );
        $this->addOption('request-use-html' , null,InputOption::VALUE_OPTIONAL , 'For request use html core or not');

    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $name = $input->getOption('name');
        $html = $input->getOption('request-use-html');


        $output->writeln('<comment>Generating page please wait ... </comment>');
       $cmd = $this->getApplication()->find('make:page');
       $arg = ['pageName' => $name];
       $greetInput = new ArrayInput($arg);
       $returnCode = $cmd->run($greetInput, $output);
       $output->writeln('<info>Successfully generate page !</info>');
    
       $cmdx = $this->getApplication()->find('make:request');
       $argx = ['RequestName' => $name, '--use-html' => $html ];
       $greetInputx = new ArrayInput($argx);
       $returnCodex = $cmdx->run($greetInputx, $output);
     



       return Command::SUCCESS;
    }
}