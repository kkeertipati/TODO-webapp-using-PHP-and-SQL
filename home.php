    
<?php
session_start();
include_once 'dbconnect.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Home | Koding Made Simple</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" >
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
<style>

table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
</head>


    


<body>

<nav class="navbar navbar-default" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="home.php">DLOG </a>
        </div>
        <div class="collapse navbar-collapse" id="navbar1">
            <ul class="nav navbar-nav navbar-right">
                <?php if (isset($_SESSION['usr_id'])) { ?>
                <li><p class="navbar-text">Signed in as <?php echo $_SESSION['usr_name']; ?></p></li>
                <li><a href="logout.php">Log Out</a></li>
                <?php } else { ?>
                <li><a href="login.php">Login</a></li>
                <li><a href="register.php">Sign Up</a></li>
                <?php } ?>
            </ul>
        </div>
    </div>
</nav>    
    
    
    
    

<h3>Dropdown Menu has two options 'create a new row' and 'read by location'</h3>
<p>Hover over the "Dropdown" link to see the dropdown menu.</p>
<p> To see the full table click on view full table below</p>
<ul >
 <li><a href="create.php">Create Form</a></li>
 <li><a href="read.php">Read by state</a></li>
</ul>

</body>
</html>



<?php

/**
 * Function to query information based on 
 * a parameter: in this case, location.
 *
 */

if (isset($_POST['show'])) 
{
	
	try 
	{	
		require "config.php";
		require "common.php";

		$connection = new PDO($dsn, $username, $password, $options);

		$sql = "SELECT * 
						FROM information";

		

		$statement = $connection->prepare($sql);
		
		$statement->execute();

		$result = $statement->fetchAll();
	}
	
	catch(PDOException $error) 
	{
		echo $sql . "<br>" . $error->getMessage();
	}
}
?>
		
<?php  
if (isset($_POST['show'])) 
{
	if ($result && $statement->rowCount() > 0) 
	{ ?>
		<h2>Full Table</h2>

		<table>
			<th>
				<tr>
					<th>#</th>
					<th>First Name</th>
					<th>Last Name</th>
					<th>Email Address</th>
					<th>Age</th>
					<th>Location</th>
					<th>Date</th>
				</tr>
			</th>
			<tbody>
	<?php 
		foreach ($result as $row) 
		{ ?>
			<tr>
				<td><?php echo escape($row["id"]); ?></td>
				<td><?php echo escape($row["firstname"]); ?></td>
				<td><?php echo escape($row["lastname"]); ?></td>
				<td><?php echo escape($row["email"]); ?></td>
				<td><?php echo escape($row["age"]); ?></td>
				<td><?php echo escape($row["location"]); ?></td>
				<td><?php echo escape($row["date"]); ?> </td>
			</tr>
		<?php 
		} ?>
		</tbody>
	</table>
	<?php 
	} 
	else 
	{ ?>
		<blockquote>No results found</blockquote>
	<?php
	} 
}?> 




<form method="post"><input type="submit" name="show" value="View Full Table"></form>

