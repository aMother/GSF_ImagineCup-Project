<?php
    
    //configuration
    require("../includes/config.php");

    $rows = query("SELECT score FROM profile WHERE id = ?", $_SESSION['id']);

    if($rows[0]['score'] != -33333)
    {
        render('score_template.php',['title'=>'Score','tell'=>"<p class='text-info'>Your Score is ".$rows[0]['score']."</p></div>"]);
    }
    else
    {
        render('score_template.php',['tell'=>"<p class='text-warning'>You have Never Been Scored. We encourage you to involve with us and get a beautiful score as you are.</p>"]);
    }
    
    

?>

