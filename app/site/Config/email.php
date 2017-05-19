<?php

class EmailConfig {

    public $default = array(
        'transport' => 'Mail',
        'from' => 'faleconosco@imobiliariapai.com.br',
        'charset' => 'utf-8',
    );
    
    public $smtp = array(
        'transport' => 'Smtp',
        'host' => 'smtp.classificadosprime.com.br',
        'port' => 587,
        'timeout' => 30,
        'username' => 'contato@classificadosprime.com.br',
        'password' => '88546336',
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
