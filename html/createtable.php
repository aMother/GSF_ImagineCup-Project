<?php
    
    require("../includes/functions.php");
    $conn = connect();

    $sql1 = "CREATE TABLE users(
			id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY, 
			email VARCHAR(100) NOT NULL UNIQUE,
			hash VARCHAR(100) NOT NULL,
			ras CHAR(1) NOT NULL)";

            try{
	$conn->query($sql1);
}
catch(Exception $e){
	print_r($e);
}

echo "<h3>Table created.</h3>";

    $sql2 = "CREATE TABLE profile(
             id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
             name VARCHAR(100) NOT NULL,
             latitude decimal(33, 30) NOT NULL,
             longitude decimal(33,30) NOT NULL,
             score int NOT NULL DEFAULT '-33333'
             )";

             try{
	$conn->query($sql2);
}
catch(Exception $e){
	print_r($e);
}

echo "<h3>Table created.</h3>";




     $sql3 = "CREATE TABLE cron(
              id INT UNSIGNED NOT NULL,
              name VARCHAR(100) NOT NULL,
              qunit VARCHAR(20) NOT NULL,
              sellby date NOT NULL,
              description VARCHAR(300) NOT NULL,
              latitude decimal(33,30) NOT NULL,
              longitude decimal(33,30) NOT NULL,
              sid INT UNSIGNED NOT NULL
              )";


              try{
	$conn->query($sql3);
}
catch(Exception $e){
	print_r($e);
}

echo "<h3>Table created.</h3>";



     



     $sql4 = "CREATE TABLE acceptfood(
                pid INT UNSIGNED NOT NULL,
                accepted INT UNSIGNED NOT NULL,
                sid INT UNSIGNED NOT NULL,
                name VARCHAR(100) NOT NULL
              )";


                       try{
	$conn->query($sql4);
}
catch(Exception $e){
	print_r($e);
}

echo "<h3>Table created.</h3>";



    $sql5 = "CREATE TABLE invitation(
                name VARCHAR(100) NOT NULL,
                time VARCHAR(100) NOT NULL,
                place VARCHAR(100) NOT NULL,
                latitude decimal(33,30) NOT NULL,
                longitude decimal(33,30) NOT NULL,
                message VARCHAR(300),
                invitorid INT UNSIGNED NOT NULL
              )";




                       try{
	$conn->query($sql5);
}
catch(Exception $e){
	print_r($e);
}

echo "<h3>Table created.</h3>";

     $sql6 = "CREATE TABLE shopfood(
                id INT UNSIGNED NOT NULL,
                name VARCHAR(100) NOT NULL,
                units INT UNSIGNED NOT NULL,
                qunit VARCHAR(100) NOT NULL,
                sellby date NOT NULL,
                latitude decimal(33,30) NOT NULL,
                longitude decimal(33,30) NOT NULL,
                description VARCHAR(300) NOT NULL,
                dated date NOT NULL
                )";



                         try{
	$conn->query($sql6);
}
catch(Exception $e){
	print_r($e);
}

echo "<h3>Table created.</h3>";
?>
