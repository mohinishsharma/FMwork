<?php

class Welcome extends FM_Controller
{
    
    public function main()
    {
        $data12 = array('first' => "123456789");
        FM_Render::RenderFile("home",$data12);
        $db = new DB;
        $s_model = new sessions_model();
        $s_model->hell();

        $u_model = new user_model();
        $u_model->main();

        // URL::Redirect("about/index");
        
    }

    public function calltome()
    {
        $data12 = array('first' => "123456789");
        self::$smarty->display("index.tpl",$data12);
        // FM_Render::RenderSmarty("index.tpl",$data12);
    }
}

?>