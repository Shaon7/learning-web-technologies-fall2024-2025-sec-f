<?php


    session_start();
    $date = $_REQUEST['date'];
    $month = $_REQUEST['month'];
    $year = $_REQUEST['yyyy'];

    
    if($date==NULL)
    {
        echo " Date can't be null";
    }
    else if($month==NULL)
    {
        echo "Month can not be Null";
    }
    else if($year==NULL)
    {
        echo "Year can't be NULL";
    }
    else if($date<1 || $date>30)
    {
        echo "date must be from 1 to 30";
    }
    else if($month<1 || $month>12)
        echo "Month must be from 1 to 12";
    else if($year<1953 ||$year>1998)
        echo "Year must be from 1953 to 1998";
?>