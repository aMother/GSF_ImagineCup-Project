<?php
    //configuration
    require_once('../includes/config.php');

    $rows = query("SELECT * FROM shopfood WHERE id = ?", $_SESSION["id"]);

    if($rows === false)
    {
        echo("Sorry, we were not able to complete your request. Please try after some time");
    }


         
     $rows = query("SELECT * FROM shopfood WHERE id = ?", $_SESSION["id"]);
     echo <<<_END
    <table class="table">
            <caption></caption>
            <thead>
                <tr>
                    <th>S.No.</th>
                    <th>Food Name</th>
                    <th>Units</th>
                    <th>Each Unit Measures</th>
                    <th>Sell-By Date</th>
                    <th>Added On</th>
                    <th>Update Units</th>
                </tr>
            </thead>
            <tbody>
_END;

    $num = 1;

    foreach ($rows as $row)
    {        
        $name = $row["name"];
        print("<tr>");            
        print("<td>" . $num++ . "</td>");             
        print("<td>" . $row["name"] . "</td>");              
        print("<td>" . $row["units"] . "</td>");
        print("<td>" . $row["qunit"] . "</td>");
        print("<td>" . $row["sellby"] . "</td>");
        print("<td>" . $row["dated"] . "</td>");
        echo "<td><form action='../html/updateFood.php' method='post'><input type='hidden' name='name' value='$name'/><div class='input-append'><input class='input-mini' type='text' name='units' id='units' placeholder='Units'/><div class='btn-group'><button class='btn'type='submit'>Update</button></div></div></form></td>";
        print("</tr>");         
    
    } 

    echo <<<_END
        </tbody>
    </table>
_END;
                


?>


