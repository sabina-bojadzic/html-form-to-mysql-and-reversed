<?php
$firstName = filter_input(INPUT_POST, "firstName");
$lastName = filter_input(INPUT_POST, "lastName");
$email = filter_input(INPUT_POST, "email");
$message = filter_input(INPUT_POST, "message");

if (!empty($firstName)) {
	if (!empty($lastName)) {
		if (!empty($email)) {
			if (!empty($message)) {
				$host = "localhost";
				$dbusername = "root";
				$dbpassword = "mysql";
				$dbname = "messages";

				$conn = new mysqli($host, $dbusername, $dbpassword, $dbname);
				if (mysqli_connect_error()) {
					die('Connect Error (' . mysqli_connect_errno() . ')' . mysqli_connect_error());
				
				}else{
					$sql = "INSERT INTO `messages`(`First name`, `Last name`, `Email`, `Message`)
					values('$firstName', '$lastName', '$email', '$message')";
					if($conn->query($sql)){
						echo("New record inserted");
					}else{
						echo("Error: " . $sql . "<br>" . $conn->error);
					}
					$conn->close();
				}


			}else{
				echo "Message should not be empty!";
				die();
			}
		}else{
			echo "Email should not be empty!";
			die();
		}
	}else{
		echo "Last name should not be empty!";
		die();
	}
}else{
	echo "First name should not be empty!";
	die();
}



?>