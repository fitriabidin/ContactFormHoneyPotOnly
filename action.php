<?php

if (isset($_POST['submit'])) {
    session_start();

	// Handling Honey Pot
     if ((isset($_POST['first_name']) && !empty($_POST['first_name'])) || (isset($_POST['phone']) && !empty($_POST['phone'])) || (isset($_POST['emails']) && !empty($_POST['emails'])) || (isset($_POST['messages']) && !empty($_POST['messages'])) ) {
        echo "This Is spammer, Dont Process The form";
		// redirect with succes to trick the spammer
    } else {
        echo "Proccess The Form and proceed ";
    }

}



?>



