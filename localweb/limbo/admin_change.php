<!DOCTYPE html>
<html>

 <title>Edit Status</title>
 <body>
  <div>
   <p>
    <a href="/limbo/lost.php">Lost Something</a> <a href="/limbo/found.php">Found Something</a> <a href="/limbo/quicklinks.php">Quick Links</a>
   </p>
  </div>
	<h1>Change Status</h1>
	<p>Here you can change the status of an item in the database.</p>
	
<?php
# Connect to MySQL server and the database
require( 'limboincludes/connect_limbo_db.php' ) ;

# Includes these helper functions
require( 'limboincludes/limbo_helpers.php' ) ;


# Show the records
admin_change_item($dbc);

# Close the connection
mysqli_close( $dbc ) ;
?>
<button onclick="goBack()">Go Back</button>
 </body>
</html>