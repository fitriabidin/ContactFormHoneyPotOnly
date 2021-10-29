<?php

if (isset($_POST['submit'])) {
    session_start();

	// Handling Honey Pot
    if (isset($_POST['first_name']) && !empty($_POST['first_name']) ) {
        echo "This Is spammer, Dont Process The form";
		// redirect with succes to trick the spammer
    } else {
        echo "Proccess The Form and proceed ";
    }

}



?>



