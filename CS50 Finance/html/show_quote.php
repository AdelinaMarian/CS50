<?php

 	// configuration
    require("../includes/config.php");

    if ($_SERVER["REQUEST_METHOD"] == "POST")

    	print ("Price :" . $_POST["price"]);

    render("latest_price.php", ["title" => "Quote"]);
?>