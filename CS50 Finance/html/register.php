<?php

    // configuration
    require("../includes/config.php");

    // if form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        if(empty($_POST["username"]))
            apologize ("You haven't entered any username.");
        else if(empty($_POST["password"]))
            apologize ("You haven't entered a password.");
        else if($_POST["password"] != $_POST["confirmation"])
            apologize ("The confirmation password doesn't match");
        else 
            {
                $var = query("INSERT INTO users (username, hash, cash) VALUES(?, ?, 10000.00)", $_POST["username"], crypt($_POST["password"]));
                if($var === false)
                   apologize("The registration failed!");
                else
                        {   
                            //log in ; $_SESSION stores the id 
                            $rows = query("SELECT LAST_INSERT_ID() AS id"); $id = $rows[0]["id"];
                            $_SESSION["id"] = $row["id"];
                            redirect("index.php");
                        }
            }
    }
    else
    {
        // else render form
        render("register_form.php", ["title" => "Register"]);
    }

?>