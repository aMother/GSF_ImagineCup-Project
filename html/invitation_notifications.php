<?php
    
    //configuration
    require_once('../includes/config.php');

    $query_1 = query("SELECT name FROM profile WHERE id = ?", $_SESSION['id']);

    $rows = query("SELECT * FROM invitation where name= ?", $query_1[0]['name']);

    

    echo <<<_END
    <table class="table">
            <caption></caption>
            <thead>
                <tr>
                    <th>S.No.</th>
                    <th>Email Of Inviter</th>
                    <th>Venue</th>
                    <th>Time</th>
                    <th>Message</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
_END;

    $num = 1;

    foreach ($rows as $row)
    {   
        $query_2 = query("SELECT email FROM users where id = ?", $row['invitorid']);
      
        $latitude = $row["latitude"];
        $longitude = $row["longitude"];
   
        print("<tr>");            
        print("<td>" . $num++ . "</td>");             
        print("<td>" . $query_2[0]['email'] . "</td>"); 
        print("<td>" . $row["place"] . "</td>");
        print("<td>" . $row["time"] . "</td>");         
        print("<td>" . $row["message"] . "</td>");
        echo("<td><form action='../html/viewMap.php' method='post'><input type='hidden' name='latitude' value='$latitude'/>"."<input type='hidden' name='longitude' value='$longitude'/><input type='submit' class='btn btn-primary btn-mini' value='view on map' /></form></td>");
        print("</tr>");         
        

    } 

    echo <<<_END
        </tbody>
    </table>
_END;
                

?>
