<?php
    //configuration
    require('../includes/config.php');
    
     // if form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
   
        render("map_template.php",['title'=>'View on Map','form'=>"<div id='mapDiv' style='position: relative; width: 60%; height: 300px; margin-bottom: 10px;  border-radius: 5px; box-shadow: 3px 3px 5px 1px rgb(112, 155, 234);'></div>
                <input type='hidden' id='latitude' name='latitude' value='".$_POST["latitude"]."'/>
                <input type='hidden' id='longitude' name='longitude' value='".$_POST["longitude"]."'/>
                <p id='mode'></p><input type='button'  id='btn' data-loading-text='Tracking...'  class='btn btn-primary' value='Track Shop'/>"]);
        

    }




    




?>