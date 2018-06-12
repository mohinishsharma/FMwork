<?php

    $GLOBALS['configs'] =
    array(
        'AppName' => "My first APP",
        'DomainName' => "localhost/fmwork",
        'defaults' => array(
            'controller' => "welcome",
            'method' => "main"
        ),
        'paths' => array(
            'app' => "www/",
            'core' => "fmwork/",
            'controllers'=>"Controller/",
            'views' => "View/",
            'models' => "Model/",
            'index' => "index.php"
        ),
        'routes' => array(
            array(
                "url"=>"home1/main",
                "controller"=>"Welcome",
                "method"=>"main"
            )
        ),
        'database' => array(
            'host' => "localhost",
            'username' => "root",
            'password' => "",
            'DBname' => "test"
        ),
        'smarty_engine' => array(
            'in_use' => true,
            'TemplateDir' => "www/smarty/template/",
            'CompileDir' => "www/smarty/template_c/",
            'CacheDir' => "www/smarty/cache/",
            'ConfigDir' => "www/smarty/configs/"
        ),
        'models_in_use' => array("sessions_model","user_model")
    );

?>