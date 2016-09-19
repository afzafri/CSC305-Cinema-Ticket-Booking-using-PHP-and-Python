<?php

	if($_POST['option'] == "outSeat")
	{
		$listseat = $_POST['seats'];

		$file = fopen("listseat.txt","w");
		fwrite($file,$listseat);
		fclose($file);

		echo "Success. Please return to the console.";
		
	}

	if($_POST['option'] == "bookMovie")
	{
		$movie = $_POST['movie'];

		$file = fopen("movieCode.txt","w");
		fwrite($file,$movie);
		fclose($file);

		echo "Success. Please return to the console.";
		
	}

?>