<?php

    //configure
    require_once("../includes/config.php");

    $rows = query("SELECT * FROM cron WHERE id = ?", $_SESSION["id"]);



    echo <<<_END
    <table class="table">
            <caption></caption>
            <thead>
                <tr>
                    <th>S.No.</th>
                    <th>Food Name</th>
                    <th>Sell-By Date</th>
                    <th>Description</th>
                    <th>Quantity</th>
                </tr>
            </thead>
            <tbody>
_END;

    $num = 1;

    foreach ($rows as $row)
    {   
        $sid = $row['sid'];
        $latitude = $row["latitude"];
        $longitude = $row["longitude"];
        $name = $row["name"];
        print("<tr>");            
        print("<td>" . $num++ . "</td>");             
        print("<td>" . $name . "</td>"); 
        print("<td>" . $row["sellby"] . "</td>");
        print("<td>" . $row["description"] . "</td>");         
        print("<td>" . $row["qunit"] . "</td>");
        echo("<td><form action='../html/viewMap.php' method='post'><input type='hidden' name='latitude' value='$latitude'/>"."<input type='hidden' name='longitude' value='$longitude'/><input type='submit' class='btn btn-primary btn-mini' value='view on map' /></form></td>".
       "<td><form action='../html/acceptFood.php' method='post'><input type='hidden' name='sid' value='$sid'/>"."<input type='hidden' name='name' value='$name'/>"."<div class='input-append'><input class='input-mini' type='text' name='units' id='units' placeholder='Units'/><div class='btn-group'><button class='btn' type='submit'>Accept</button></div></div></form></td>");
        print("</tr>");         
        

    } 

    echo <<<_END
        </tbody>
    </table>
_END;
                


?>
