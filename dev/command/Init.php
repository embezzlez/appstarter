<?php
namespace Dev\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;


class Init extends Command
{
    // the name of the command (the part after "bin/console")
    protected static $defaultName = 'init';
    protected static $defaultDescription = 'Generate request and page files';
    protected function configure(): void
    {
        $this->addOption('app' , null, InputOption::VALUE_REQUIRED, 'Value for App name' );
        $this->addOption('set-ver' , null,InputOption::VALUE_REQUIRED , 'Value for Version');
        $this->addOption('default' , null,InputOption::VALUE_REQUIRED , 'Value for default page');
        $this->addOption('test-mode' , null,InputOption::VALUE_REQUIRED , 'Value for test mode true or false');

    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $app = $input->getOption('app');
        $version = $input->getOption('set-ver');
        $default = $input->getOption('default');
        $test= $input->getOption('test-mode');

        $output->writeln('<comment>Generating ryuinit please wait ... </comment>');
        $this->initTpl($app,$version,$default,$test);
        $output->writeln('<info>Successfully generate config</info>');


       return Command::SUCCESS;
    }
    protected function initTpl($app,$ver,$default,$test)
    {
        $tmplcfg = "<?php
/**
* RYUJIN APP 
* CONFIGURATION 
* 
* DATE GENERATED : ".date('D, d-m-Y H:i')."
**/

\$config['web']['app_name']     = '$app';
\$config['web']['version']      = '$ver';
\$config['web']['default_page'] = '$default';
\$config['web']['api_url']      = 'https://apiv1.shinryujin.net';
\$config['web']['test_send']    = $test;
";
file_put_contents('app/config/web.php' , $tmplcfg);
    }
}