<?php
    require("../includes/config.php");
   
    // if form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        if(empty($_POST['name']))
        {
            apologize('You must provide person name');
        }
        else if(empty($_POST['time']))
        {
            apologize('You must provide time of meeting');
        }
        else if(empty($_POST['latitude']))
        {
            apologize('You must identify location on map. Either allow us to track or search yourself');
        }
        else if(empty($_POST['longitude']))
        {
            apologize('You must identify location on map. Either allow us to track or search yourself');
        }

        $query = query('SELECT * from profile WHERE name = ? LIMIT 1',$_POST['name']);
       
        if(count($query) === 1)
        {
            
        $rows = query("INSERT INTO invitation(name, time, place, latitude, longitude, message, invitorid) VALUES(?, ?, ?, ?, ?, ?, ?)", $_POST['name'], $_POST['time'], $_POST['place'], $_POST['latitude'], $_POST['longitude'], $_POST['message'], $_SESSION['id']);

        if($rows === false)
        {
            apologize("We are unable to complete your request");
        }
        success('We have send your invitation.You will be notified through email when they accept it. At this monent this is what we have');


        }
        else
        {
            info("Our database has no person with name".$_POST["name"]."<br/>Be sure to ask the person to bond with us as it can save lives");   
        }

    }
    else
    {
        render("invitation_form.php",["title"=>"helping you Invite"]);
    }





?>