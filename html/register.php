<?php
    //configuration
    require('../includes/config.php');
    
    //if form was submitted
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        //validate submission
        if(empty($_POST["firstname"]))
        {
            apologize("You must provide your firstname");
        }
        else if(empty($_POST["lastname"]))
        {
            apologize('You must provide your lastname');
        }
        else if(empty($_POST['latitude']))
        {
            apologize('You must either allow us to track your location or search yourself.');
        }
        else if(empty($_POST['longitude']))
        {
            apologize('You must either allow us to track your location or search yourself.');
        }
        else if(empty($_POST['email']))
        {
            apologize('You must provide your email.');

        }
        else if (empty($_POST["password"]))
        {
            apologize("You must provide your password.");
        }
        else if (empty($_POST["cpassword"]))
        {
            apologize("You must  confirm your password");
        }
         else if($_POST["password"] != $_POST["cpassword"])
        {
            apologize("Sorry, passwords didn't match. Try Again");
        }


        
        $name = $_POST['firstname']." ".$_POST['lastname'];
        
        $rowu = query("INSERT INTO users (email, hash, ras) VALUES(?, ?, ?)" , $_POST['email'], crypt($_POST['password']), $_POST['ras']);

        $rowp = query("INSERT INTO profile (name, latitude, longitude) VALUES(?, ?, ?)", $name, $_POST['latitude'],$_POST['longitude']);

        if($rowu === false)
        {
            apologize('Oh! snap. There was an error. Please try after sometime');
        }
        
        
           $qrow = query("SELECT * FROM users WHERE email = ?",$_POST["email"]);

           $_SESSION['id'] = $qrow[0]["id"];
           $_SESSION['ras'] = $qrow[0]["ras"];
           
           //redirect to home,php
           redirect("../html/home.php");
        
    }

    else
    {
        
        render("register_form.php",["title"=>"Register"]); 

    }




       


?>