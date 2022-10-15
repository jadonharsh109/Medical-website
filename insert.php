<!DOCTYPE html>
<html>

<head>
	<title>Insert Page page</title>
</head>

<body>
	
		<?php

		// servername => localhost
		// username => root
		// password => empty
		// database name => staff
		$conn = mysqli_connect("localhost", "root", "", "medical-website");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
       
		$name = $_REQUEST['name'];
		$email = $_REQUEST['email'];
		$number = $_REQUEST['number'];
        $message = $_REQUEST['message'];
		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO contact SET
        name='$name',
        email='$email',
        number='$number',
        message='$message'

		";
		if(mysqli_query($conn, $sql)){
			echo "<h3>data stored in a database successfully."
				. " Please browse your localhost php my admin"
				. " to view the updated data</h3>";

			echo nl2br("\n $name\n $message\n "
				. "$number\n  $email");
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
	
</body>

</html>
