<?php

// This file lists categories of products.



// Validate the product type...

	$page_title = 'Our Goodies, by Category';
	$sp_type = 'other';
	$type = 'goodies';

// Include the header file:
include ('./includes/header.html');

// Require the database connection:
require ('mysql.inc.php');

// Call the stored procedure:
$r = mysqli_query($dbc, "CALL select_categories('$sp_type')");

// For debugging purposes:
//if (!$r) echo mysqli_error($dbc);

// If records were returned, include the view file:
if (mysqli_num_rows($r) > 0) {
	include ('./views/list_categories.html');
} else { // Include the error page:
	include ('./views/error.html');
}

// Include the footer file:
include ('./includes/footer.html');
?>