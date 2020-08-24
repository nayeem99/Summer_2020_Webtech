<?php

if (isset($_POST['d1']) || isset($_POST['d2']) || isset($_POST['d3'])) 
	{
		if (isset($_POST['d1'])) 
		{
			echo "SSC";
		}
		if (isset($_POST['d2'])) 
		{
			echo "HSC";
		}
		if (isset($_POST['d3'])) 
		{
			echo "BSc";
		}
	
	}


?>