<?php

class EmailConfig {

    public $default = array(
        'transport' => 'Mail',
        'from' => 'faleconosco@imobiliariapai.com.br',
        'charset' => 'utf-8',
    );
    
    public $smtp = array(
        'transport' => 'Smtp',
        'host' => 'smtp.harasrecanto.com',
        'port' => 587,
        'timeout' => 30,
        'username' => 'no-reply@harasrecanto.com',
        'password' => '312@harasrecanto',
        'client' => null,
        'log' => true,
        'emailFormat' => "html"
    );

    // public $smtp = array(
    //     'transport' => 'Smtp',
    //     'host' => 'smtp.imobiliariapai.com.br',
    //     'port' => 587,
    //     'timeout' => 30,
    //     'username' => 'no-replay@imobiliariapai.com.br',
    //     'password' => 'imob1009pai',
    //     'client' => null,
    //     'log' => true,
    //     'emailFormat' => "html"
    // );


}
