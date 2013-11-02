<?php

	//Website-Builder index.php
	//This page doesn't contain much,
	//just finds out the page you
	//actually want and includes it.

	//Get the page name.
	//Format:
	//  www.example.com/?p=pagename
	//Declare and get the page value.

	$page = $_GET['p']; // p stands for page. :)

	if ($page == NULL) {$page = "home";} //If there is no page specified, it makes it "home".

	//Once we know which page we want, time to start generating it.

	//A typical page will be made up of 3 main parts.
		// 1, Header (which is typically the same on all pages).
		// 2, Content (which is different dependant on the page).
		// 3, Footer (which is typically the same on all pages).

	//First include the Header (top.php), anything from DOCTYPE, including navigation etc.
	include "./includes/top.php";

	//Second include the Content, which is in the pages folder.
	//Each page is in format <pagename>.php
	$pagefull = "./pages/" . $page . ".php";
	include "$pagefull";

	//Finally include the Footer, which is footer.php
	include "./includes/footer.php";

?>