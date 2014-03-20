
<?php
    
     // configuration
    require("../includes/config.php");
   
    // if form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        if(empty($_POST["score"]))
        {
            apologize("You must provide score");
        }

        $score = query("SELECT score FROM profile where id = ?", $_POST['pid']);


        if($score[0]['score'] == -33333)
        {
            $score[0]['score'] = 0;
        }

        $new_score = $score[0]['score'] + $_POST["score"];

        $rows = query("UPDATE profile SET score = ? WHERE id = ?", $new_score, $_POST['pid'] );

        if($rows === false)
        {
            apologize('we are sorry');

        }

        else{
         
            //deletes the notification from home page of seller
            $delete = query('DELETE FROM acceptfood WHERE sid = ? AND pid = ? AND name = ?', $_SESSION['id'], $_POST['pid'], $_POST['name']);

            if($delete === false)
            {
                apologize('it didn\'t');
            }


            info('Thanks for updating score.');
        }

    }




?>
