<?php
    
    // configuration
    require("../includes/config.php");
   
    // if form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        // validate submission
        if(empty($_POST['latitude']))
        {
            apologize('You Haven\'t identified your location on map. Please allow us to track. Or Track Yourself');
        }
        else if(empty($_POST['longitude']))
        {
            apologize('You Haven\'t identified your location on map. Please allow us to track. Or Track Yourself');
        }




        $timestamp = time() + 60 * 60 * 24 * 2;

        $date = date("Y-m-d", $timestamp);

        //echo($date);
    
        //select all the food from the 'shopfood table' whose show-by date is due on the second day of this selection and order by latitude ascending
        $food_rows = query("SELECT id, name, units, qunit, description, latitude, longitude FROM shopfood WHERE sellby = ? ORDER BY latitude", $date);

        /*Adapted From cron.php*/

        if($food_rows === false)
        {
            apologize('We are unable to complete your request. Pleas Try after sometime');
        }

        $count_f = count($food_rows);
        
        for($i = 0; $i < $count_f; ++$i)
        {
            if(abs($food_row['latitude'] - $_POST['latitude']) < 0.05)       
            {
                    

                    if(abs($food_row['longitude'] - $_POST['longitude']) < 0.05)
                    {
                           
                        //inserting food and it's data with id of person to table cron.The table will be used to notify that person

                        $push = query("INSERT INTO cron (id, name, qunit, sellby, description, latitude, longitude, sid) VALUES(?, ?, ?, ?, ?, ?, ?, ?)", $person_row["id"], $food_row["name"], $food_row["qunit"],$date, $food_row["description"], $person_row["latitude"], $person_row["longitude"], $food_row['id']);


                        
                        if($push === false)
                        {
                            apologize('We are unable to complete your request');
                        }


                        redirect('../html/home.php');
              
                       



                    }
        }



        }

     
        
        
    } 
    
    else
    {
        render("present_template.php",["title" => "Helping You To Shop At Present Location"]);
    }   

?>
