<?php

    if(!function_exists('current_date')){
        function current_date(){
            return "<h3>Today is " . date("d M Y, l"). "<br></h3>";
        }
    }
    
    if(!function_exists('current_time')){
        function current_time(){
            date_default_timezone_set("Asia/Kolkata");
            return "<h3>Current time is " . date("h:i:sa"). "<br></h3>";
        }
    }

?>