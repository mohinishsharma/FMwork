<?php

    class FM_Error
    {
        public static function show($type,$errors)
        {
            switch ($type) {
                case 404:
                    header("HTTP/1.0 404 Not Found");
                    FM_Render::RenderFIle("errors/404",array("errors"=>$errors));
                    break;
                case 401:
                    header("HTTP/1.0 401 UNAUTHORIZED");
                    FM_Render::RenderFIle("errors/401",array("errors"=>$errors));
                    break;
                case 400:
                    header("HTTP/1.0 400 BAD REQUEST");
                    FM_Render::RenderFIle("errors/400",array("errors"=>$errors));
                    break;
                case 403:
                    header("HTTP/1.0 403 FORBIDDEN");
                    FM_Render::RenderFIle("errors/403",array("errors"=>$errors));
                    break;
                default:
                    header("HTTP/1.0 200 OK");
                    FM_Render::RenderFIle("errors/err",array("errors"=>$errors));
                    break;
            }
            die();
        }
    }
    

?>