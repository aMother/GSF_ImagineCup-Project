<?php
    
    //The Cron job will fire on 23:55 every day

    //configuration
    require("../includes/functions.php");
    
    $time = time();

    //Deletes the notifications whose showby date is current date. As after 5 mins it will be expired 

    $expire =  date("Y-m-d", $time);

    $delete = query("DELETE FROM cron WHERE sellby = ?", $expire);
    
    /****/

    $timestamp = $time + 60 * 60 * 24 * 2;

    $date = date("Y-m-d", $timestamp);

    //echo($date);
    
    //select all the food from the 'shopfood table' whose show-by date is due on the second day of this selection and order by latitude ascending
    $food_rows = query("SELECT id, name, units, qunit, description, latitude, longitude FROM shopfood WHERE sellby = ? ORDER BY latitude", $date);

    /*
    foreach($food_rows as $value)
    {
        foreach($value as $val)
        {
            echo($val."<br/>");
        }

    }
    */

    
    //selct all the persons from the 'profile table' and order by latitude descending
    $person_rows = query("SELECT id, latitude, longitude FROM profile ORDER BY latitude DESC");
    
    /*
    foreach($person_rows as $value)
    {
        foreach($value as $val)
        {
            echo($val."<br/>");
        }

    }
    */
    
    //If Something goes wrong
    if($food_rows === false)
    {
        //Notify Site Administrator
    }
    else if($person_rows === false)
    {
      
        //Notify Site Administrator
    }
    
    //if everything goes well
    if(($food_rows !== FALSE) && ($person_rows !== FALSE))
    {
        //echo('hello');

        $count_f = count($food_rows);
        
        //echo("count_f = ".$count_f."<br/>");

        $start_p = count($person_rows); // The Searching in $person_rows array will be started from (this - 1) index
        $start_p -= 1;

        //echo("start_p = ".$start_p."<br/>");
       
        for($i = 0; $i < $count_f; ++$i)
        {
         
            $food_row = $food_rows[$i];

            //echo($food_row['latitude']);

            
            for($j = $start_p; $j >= 0; --$j)
            {
          
                $person_row = $person_rows[$j];

               // echo($person_row['latitude']);

                if(abs($food_row['latitude'] - $person_row['latitude']) < 0.05) /* 
                                                                                 * diffrence in latitude of 0.05 results in minimum distance of 5 km approx
                                                                                 * when longitude of both points are same. It's more when they are not                                                                                      * same.
                                                                                 */
                {
                    

                    if(abs($food_row['longitude'] - $person_row['longitude']) < 0.05)/* 
                                                                                     * diffrence in longitude of 0.05 results in minimum distance of 5 km                                                                                       * when latitude  of both points are same. It's more when they are not                                                                                      * same.
                                                                                     */
                    {
                           
                        //inserting food and it's data with id of person to table cron.The table will be used to notify that person

                        $push = query("INSERT INTO cron (id, name, qunit, sellby, description, latitude, longitude, sid) VALUES(?, ?, ?, ?, ?, ?, ?, ?)", $person_row["id"], $food_row["name"], $food_row["qunit"],$date, $food_row["description"], $person_row["latitude"], $person_row["longitude"], $food_row['id']);
                        if($push === false)
                        {
                           //Notify site Administrator
                        }

                    }



                }




            }





        }                         
    
    }
   
?>