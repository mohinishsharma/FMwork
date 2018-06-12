<?php

class FM_Render
{
    public static function RenderFile($filename, $data =array())
    {
        if(strrpos($filename,".") !== false)
        {
            $filename = explode(".",$filename)[0];
        }
        $r_ren =  $GLOBALS["configs"]["paths"]["app"]."View/".$filename.".php";
        if(file_exists($r_ren))
        {
            extract($data);
            require($r_ren);
        }
        else {
            echo "View Dosent Exists.";
        }
        
    }

    public static function RenderSmarty($filename,$data = array())
    {
        FM_Controller::$smarty->assign($data);
        FM_Controller::$smarty->display($filename);
    }

    
}

?>