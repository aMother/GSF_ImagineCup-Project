<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        
        <?php if (isset($title)): ?>
            <title>Hope - <?= htmlspecialchars($title) ?></title>
        <?php endif ?>
        
        <link href="../html/css/bootstrap.min.css" rel="stylesheet" media="screen"/>
        <link href="../html/css/bootstrap-responsive.min.css" rel="stylesheet"/>
        <link href="../html/css/myStyles.css" rel="stylesheet"/>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> 
        <script>  
            // Fallback to loading jQuery from a local path if the CDN is unavailable  
            (window.jQuery || document.write('<script src="../html/js/jquery-1.9.1.min.js"><\/script>'));  
        </script>
        <script src="../html/js/bootstrap.min.js"></script>
        <script src="https://ecn.dev.virtualearth.net/mapcontrol/mapcontrol.ashx?v=7.0&s=1"></script>
        <script src="../html/js/getUserLocation.js"></script>
        <script src="../html/js/displayUserLocation.js"></script>
       


       
   </head>
     <body onload="GetMap();">
        <div class="container-fluid">
            <div class="row-fluid">
      
