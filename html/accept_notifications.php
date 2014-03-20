<?php

    //configure
    require_once("../includes/config.php");

    $rows = query("SELECT * FROM acceptfood WHERE sid = ?", $_SESSION["id"]);

    echo <<<_END
    <table class="table">
            <caption></caption>
            <thead>
                <tr>
                    <th>S.No.</th>
                    <th>Food Name</th>
                    <th>Accepted Units</th>
                    <th>Person Id</th>
                    <th></yh>
                </tr>
            </thead>
            <tbody>
_END;

    $num = 1;

    foreach ($rows as $row)
    {   
        $pid = $row['pid'];
        print("<tr>");            
        print("<td>" . $num++ . "</td>");  
        print("<td>".$row["name"]."</td>");
        print("<td>" . $row["accepted"]. "</td>");           
        print("<td>" .$pid. "</td>"); 
       
        echo("<td><form action='../html/update_score.php' method='post'><input name='name' type='hidden' value='".$row["name"]."'/><input type='hidden' name='pid' value='$pid'/><div class='input-append'><input class='input-mini' type='text' name='score' id='units' placeholder='Score'/><div class='btn-group'><button class='btn'type='submit'>Add Score</button></div></div></form></td>");
        print("</tr>");         
    
    } 

    echo <<<_END
        </tbody>
    </table>
_END;



?>
