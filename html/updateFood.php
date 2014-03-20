
<?php
    
    //configuration
    require('../includes/config.php');
    
    //if form was submitted
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        //validate submission
      
        if(empty($_POST["units"]) && $_POST["units"] != 0)
        {
            apologize('You must provide new units');
        
        }


        $row = query("UPDATE shopfood SET units = ? WHERE id = ? and name = ?", $_POST['units'], $_SESSION["id"], $_POST["name"]);

        if($row === false)
        {
            apologize("Sorry, we are not able to complete your request at this moment. Please try after sometime.");
        }
        else
        {
            success("Your request has been completed");
        }
    }
   
 

        


?>