<?php

    // configuration
    require("../includes/config.php");

    // if form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
		$_POST = lookup($_POST["symbol"]);
		if($_POST === false)
			apologize("The symbol is invalid!");
        else
		  // else render quote_price
        render("latest_price.php", ["title" => "Quote"]);
	}
 	else
    {
        // else render form
        render("form_symbol.php", ["title" => "Quote"]);
    }

?>