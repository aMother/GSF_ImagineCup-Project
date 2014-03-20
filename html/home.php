<?php
    //configuration
    require("../includes/config.php");

    //render
    if($_SESSION["ras"] == "b")
    {
        render("buyer_home.php",["title"=>"Person's Home"]);
    }
    else if($_SESSION["ras"] == "s")
    {
        render("seller_home.php",["title"=>"Shop's Home"]);
    }
    else
    {
        apologize("We don't know what has hapened exactly.Please close your browser and  try again");
    }
?>

