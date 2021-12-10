<?php
namespace Dev\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

class MakePage extends Command
{
    // the name of the command (the part after "bin/console")
    protected static $defaultName = 'make:page';
    protected static $defaultDescription = 'Generate template of pages files';
    protected function configure(): void
    {
        $this->addArgument('pageName' , InputArgument::REQUIRED , 'Input page name is required');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input,$output);
      $page = $input->getArgument('pageName');
      if($this->PageTemplate($page)){
          $io->writeln('<info>Successfully generate page template</info>');
      }else{
        $io->writeln('<error>Failed to generate page template</error>');
      }
      return Command::SUCCESS;
    }
    protected function PageTemplate($name){

$template = "
@fun('debug')
@php echo generate_html(['h3' => 'Hello world'],'RyuJin App') @endphp
";
return file_put_contents('app/pages/'.$name.'.blade.php' , $template);

    }
}