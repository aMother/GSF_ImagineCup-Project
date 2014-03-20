<?php
    
    //configuration
    require("../includes/config.php");
    
    //if form was submitted    
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    { 
        if(empty($_POST["search"]))
        {
            apologize("You must provide name of the person you are looking for");
        }




        $rows = query("SELECT * FROM profile WHERE name = ?", $_POST["search"]);
        $count = count($rows);
        
        if($rows === false)
        {
            apologize("We can't complete your request at this moment");
        }
        else
        {
            if(empty($rows))
            {
                info("The person with name '".$_POST['search']."' has not registered here till yet. Be, sure to ask him/her next time As it can  save lives.");
            }

            success('Dear user we have found someone with the name you searched. But, Since the site is under beta stage we have not currently asked users anything that might interest you. Later in future you will be able to have a lot of inforamtion through ths option about that user');





        }


    }
?>
