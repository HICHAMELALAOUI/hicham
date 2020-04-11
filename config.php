<?php

	if(isset($_GET['lang'])){


			if ($_GET['lang'] == "en")
			$_SESSION['lang'] = "en";
		    else if ($_GET['lang'] == "fr")
			$_SESSION['lang'] = "fr";

	}
	
	

	require_once "languages/" . $_SESSION['lang'] . ".php";
?>