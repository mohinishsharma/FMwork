<?php

class About extends FM_Controller
{
    
    public function main()
    {
        $data12 = array('first' => "123456789");
        // $renderer::RenderFile("home");
        FM_Render::RenderFile("home",$data12);
        FM_Render::RenderFile("footer",array("first"=>"098765431"));
        
    }
}

?>