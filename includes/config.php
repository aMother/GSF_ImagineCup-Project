<?php

    /***
     * 
     *
     * Configure Pages 
     *
     *
     * 
     */

   // display errors, warnings, and notices
    ini_set("display_errors", true);
    error_reporting(E_ALL);

    // requirements
    require("../includes/constants.php");
    require("../includes/functions.php");

    // enable sessions
    session_start();

    // require authentication for most pages
    if (!preg_match("{(?:login|logout|register|index|forceLogin)\.php$}", $_SERVER["PHP_SELF"]))
    {
        if (empty($_SESSION["id"]))
        {
            redirect("forceLogin.php");
        }
    }

?>
