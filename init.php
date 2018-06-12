<?php

/*
* This file contains all the initialization function which are required for initial checkup
* This checkup is necessary for the frame to work properly. It ensures basic file structure checking
* and generate an error.
*
*
* @package      Fmwork/init
* @author       Mohinish Sharma
* @email        Sharmamohinish67@gmail.com
* @version      v1.0.1
* @copyright    2018-2025 MonoSystem
*
*/


    // Check the structure of the folder that exists or not
    function CheckBasicStructure()
    {
        if(!file_exists(__DIR__."/".$GLOBALS["configs"]["paths"]["core"]))
            die("Core Directory does not exixts.");
        if(!file_exists(__DIR__."/".$GLOBALS["configs"]["paths"]["app"]))
            die("App Directory does not exixts.");
        if(!file_exists(__DIR__."/".$GLOBALS["configs"]["paths"]["app"].$GLOBALS['configs']['paths']["models"]))
            die("Models Directory Does not exists.");
        if(!file_exists(__DIR__."/".$GLOBALS["configs"]["paths"]["app"].$GLOBALS['configs']['paths']["controllers"]))
            die("Controllers Directory doesnt exists.");
        if(!file_exists(__DIR__."/".$GLOBALS["configs"]["paths"]["app"].$GLOBALS['configs']['paths']["views"]))
            die("Views Directory doesnt exists.");
    }

    // List all the php files the given directory
    function listFolderFiles($dir){
        $ffs = scandir($dir);
        $i = 0;
        static $list = array();
        foreach ( $ffs as $ff ){
            if ( $ff != '.' && $ff != '..' ){
                if ( strlen($ff)>=5 ) {
                    if ( substr($ff, -4) == '.php' ) {
                        $list[] = $dir."/".$ff;
                    }    
                }       
                if( is_dir($dir."/".$ff) ){
                    listFolderFiles($dir."/".$ff);
                }
            }
        }
        return $list;
    }
    
    // Register autoload function to autoload classes if not found
    function RequestAutoload()
    {
        spl_autoload_register(function($classname){
            if(!class_exists($classname)){
                if(file_exists(__DIR__."/".$GLOBALS["configs"]["paths"]["core"].$classname.".php"))
                    require_once __DIR__."/".$GLOBALS["configs"]["paths"]["core"].$classname.".php";
            }
            if(!class_exists($classname)){
                if(file_exists(__DIR__."/".$GLOBALS["configs"]["paths"]["core"]."helper/".$classname.".php"))
                    require_once __DIR__."/".$GLOBALS["configs"]["paths"]["core"]."helper/".$classname.".php" ;
            }
            if(!class_exists($classname)){
                if(file_exists(__DIR__."/".$GLOBALS["configs"]["paths"]["app"]."Controller/".$classname.".php"))
                require_once __DIR__."/".$GLOBALS["configs"]["paths"]["app"]."Controller/".$classname.".php";
            }
        });
    }

    // Function to load models form the global varibale 'models_in_use'
    function LoadModels()
    {
        foreach ($GLOBALS['configs']['models_in_use'] as $model => $value) {
            if(file_exists(__DIR__."/".$GLOBALS["configs"]["paths"]["app"].$GLOBALS['configs']['paths']["models"].$value.".php")){
                require_once __DIR__."/".$GLOBALS["configs"]["paths"]["app"].$GLOBALS['configs']['paths']["models"].$value.".php";
            }
        }
    }


    // Check if the smarty integration is made true or not
    function SmartyCheck()
    {
        if($GLOBALS["configs"]["smarty_engine"]["in_use"])
            require __DIR__."/".$GLOBALS["configs"]["paths"]["core"]."External/Smarty/Smarty.class.php";
    }
?>