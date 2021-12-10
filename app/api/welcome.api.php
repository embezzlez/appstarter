<?php



    $data = [];

    $email = 'ryujinapp@example.com';
    $data['email'] = $email; 

    
    $password = 'mypassword';
    $data['password'] = $password; 

    
        $send = [
                'from' => $from_send,
                'subject' => $subject_send,
                'type' => $type_send,
                'data' => $data
                ];

        $log = [
                'type' => $type_log,
                'desc' => $desc_log
                ];

        $sent = $this->send($send,$log);

        $data['send_status'] = $sent;
        return json_response(1,$data,'welcome');

