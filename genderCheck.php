<?php

    session_start();

        $gender = $_REQUEST['gender'];

        if($gender==NULL)
        {
            echo "At least one of them must be selected";
        }
        

       
?>