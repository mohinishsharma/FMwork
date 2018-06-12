<?php

    class URL 
    {
        public static function Redirect($location)
        {
            if(headers_sent())
            {
                echo "<script>window.location.replace(\"$location\");</script>";
            }
            else
            {
                header("location: $location");
            }
        }
    }
    


?>