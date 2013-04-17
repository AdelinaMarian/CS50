<?php

 	// configuration
    require("../includes/config.php");

    print ("Price :" . $stock["price"]);

    render("quote.php", ["title" => "Quote"]);
?>