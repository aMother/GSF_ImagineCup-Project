<?php
    // configuration
    require("../includes/config.php");
   
    // if form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        // validate submission
        if (empty($_POST["email"]))
        {
            apologize("You must provide your username.");
        }
        else if (empty($_POST["password"]))
        {
            apologize("You must provide your password.");
        }

        // query database for user
        $rows = query("SELECT * FROM users WHERE email = ?", $_POST["email"]);

        // if we found user, check password
        if (count($rows) == 1)
        {
            // first (and only) row
            $row = $rows[0];

            // compare hash of user's input against hash that's in database
            if (crypt($_POST["password"], $row["hash"]) == $row["hash"])
            {
                // remember that user's now logged in by storing user's ID in session
                $_SESSION["id"] = $row["id"];
                $_SESSION["ras"] = $row["ras"]; 

                // redirect to portfolio
                redirect('home.php');   /* Help me here */
            }
        }

        // else apologize
        apologize("Invalid email and/or password.");
    }
    else
    {
        // else render form
        render("forceLogin_form.php",["title"=>"Log In"]);
    }
?>