<?php

class FM_Controller
{
    public static $smarty;
    public function __construct()
    {
        if($GLOBALS["configs"]["smarty_engine"]["in_use"])
        {
            self::$smarty = new Smarty;

            self::$smarty->setTemplateDir($GLOBALS["configs"]["smarty_engine"]["TemplateDir"]);
		    self::$smarty->setCompileDir($GLOBALS["configs"]["smarty_engine"]["CompileDir"]);
			self::$smarty->setConfigDir($GLOBALS["configs"]["smarty_engine"]["ConfigDir"]);
			self::$smarty->setCacheDir($GLOBALS["configs"]["smarty_engine"]["CacheDir"]);
        }
    }
    public function main()
    {
        FM_Render::RenderFile("errors/404",array("errors"=>array("Content Called from Controller \"".get_called_class()."\"")));
    }
}

?>