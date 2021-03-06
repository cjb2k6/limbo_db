<!DOCTYPE html>
<html>
 <link rel="stylesheet" type="text/css" href="limboCSS.css"> 
  <script>
	function goBack() {
		window.history.back()
	}
</script>
 <title>Edit Status</title>

 <body>
  <div>
   <p>
	<a href="/limbo/admin_change.php">Change Status</a> <a href="/limbo/admin_delete.php">Remove Entries</a> <a href="/limbo/admin_change_password.php">Change Password</a>
	<a href="/limbo/admin_add.php">Add Administrator</a> <a href="/limbo/limbo_login.php">Log Out</a>
   </p>
  </div>
	<h1>Change Status</h1>
	<p>Here you can change the status of an item in the database.</p>
	
<?php
# Connect to MySQL server and the database
require( '../limboincludes/connect_limbo_db.php' ) ;

# Includes these helper functions
require( '../limboincludes/limbo_helpers.php' ) ;


# Show the records
if ($_SERVER[ 'REQUEST_METHOD' ] == 'POST') {
	
	$id = $_POST['id'] ;
	
	$status = $_POST['change_status'] ;
	
	update_status($dbc, $id, $status);
	
    }

admin_change_item_table($dbc);

# Close the connection
mysqli_close( $dbc ) ;
?>
<button onclick="goBack()">Go Back</button>
 </body>
</html>