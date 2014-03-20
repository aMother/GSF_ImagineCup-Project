<?php
    // configuration
    require("../includes/config.php");
   
    // if form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        //validate submission
        if(empty($_POST["units"]) && $_POST["units"] != 0)
        {
            apologize('You must provide new units');
        
        }
        else if($_POST["units"] === 0)
        {
            apologize('Zero doesn\'t make any sense');

        }


        $rows = query("SELECT * FROM shopfood WHERE id = ? AND name = ?", $_POST['sid'], $_POST['name']);

        if($rows === false)
        {
            apologize('bad');
        }

        if(count($rows) > 1)
        {
            //do something
        }

        $row = $rows[0];

        if($row['units'] === 0)
        {
            info('Thanks for your interest.But, we are sorry to inform you that all the units of this food has already been sold.<br/>');

        }


        if($row['units'] < $_POST['units'])
        {
            $push = query("INSERT INTO acceptfood(pid, accepted, sid, name) VALUES(?, ?, ?, ?)", $_SESSION['id'], $row['units'], $_POST['sid'], $_POST['name']);
            if($push === false)
            {
                apologize('Something goes wrong');
            }
            info("Great! You have requested more units of food then the shop have. Shop only has ".$row['units']."So, go and grab them<br/>When you will buy, Don't forget to tell your Id which is ". $_SESSION["id"]." This will allow shop keeper to update your score.<br/>Thanks for everthing");

        }
        else if($row['units'] > $_POST['units'])
        {
            $push = query("INSERT INTO acceptfood(pid, accepted, sid, name) VALUES(?, ?, ?, ?)", $_SESSION['id'], $_POST['units'],$_POST['sid'], $_POST['name']);
            if($push === false)
            {
                apologize('Something goes wrong');
            }
            info("We are glad to inform you that shop is having requested units. So, go and grab them<br/>When you will buy, Don't forget to tell your Id which is ". $_SESSION["id"]." This will allow shop keeper to update your score.");

        }
        else if($row['units'] == $_POST['units'])
        {
            $push = query("INSERT INTO acceptfood(pid, accepted, sid, name) VALUES(?, ?, ?, ?)", $_SESSION['id'], $_POST['units'],$_POST['sid'], $_POST['name']);
            if($push === false)
            {
                apologize('Something goes wrong');
            }
            info("We are glad to inform you that shop is having requested units. So, go and grab them<br/>When you will buy, Don't forget to tell your Id which is ". $_SESSION["id"]." This will allow shop keeper to update your score.");


        }





    }

?>