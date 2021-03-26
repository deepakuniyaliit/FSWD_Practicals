<?php
    include('configuration.php');
    
    function validate($un, $g, $e, $c, $ct)
    {
        if(empty($un) || empty($g) || empty($e) || empty($c) || empty($ct))
            return false;
        else if(strlen($c) != 10)
            return false;
        else 
            return true;
    }
?>
