<?php
    // configuration
    require('../includes/config.php');
    
    // if form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {

        if(empty($_POST['name']))
        {
            apologize('You must provide food name');
        }
        else if(empty($_POST['units']))
        {
            apologize('You must provide food quantity');
        }
        else if(empty($_POST['qunit']))
        {
            apologize('You must provide quantity in each unit');
        }
        else if(empty($_POST['unit']))
        {
            apologize('You must select unit of quantity in each unit from dropdown list');
        }
        else if(empty($_POST['sellby']))
        {
            apologize('You must provide sell-by date');
        }
        else if(empty($_POST['description']))
        {
            apologize('You must provide a little description');
        }

        $_POST['qunit'] .= (" ".$_POST['unit']);

        $date = date('Y-m-d');

        //getting latitude and longitude of 
        $query = query("SELECT latitude, longitude from profile WHERE id = ?", $_SESSION["id"]);

        //inserting into table shopfood
       $rows = query("INSERT INTO shopfood (id, name, units, qunit, sellby, description, dated, latitude, longitude) VALUES(?, ? ,? ,?, ?, ?, ?, ?, ?)", $_SESSION["id"],$_POST["name"], (int)$_POST["units"], $_POST["qunit"],$_POST["sellby"], $_POST["description"], $date, $query[0]['latitude'], $query[0]['longitude']);

        if($rows === false)
        {
          apologize('We honestly don\'t know what happened. Please forgive us and try after sometime... ');
        }
       else
       {
          success('We have carefully added...<br/>We will try our best to ensure that nothing goes wasted...<br/>Thanks for beleiving in us.');
       }
    }

?>
