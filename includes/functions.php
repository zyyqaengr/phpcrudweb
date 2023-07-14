<?php 



	function Create () {


		if (isset($_POST['submit'])) {

			global $connection;
				
			$firstname = $_POST['firstname'];
			$lastname = $_POST['lastname'];
			$email = $_POST['email'];
			$date = date('d-m-y');
					

			

			$firstname = mysqli_real_escape_string($connection,$firstname);
			$lastname = mysqli_real_escape_string($connection,$lastname);
			$email = mysqli_real_escape_string($connection,$email);

			

			$query = "INSERT INTO users (firstname,lastname,email,date_created) ";
			$query .= "VALUES ('$firstname', '$lastname', '$email', now() ) ";
			$result = mysqli_query($connection,$query);

			

			if (!$result) {
				die('There was an error creating your account!' . mysqli_error($connection) );
			}

			echo "Data Submitted Successfully!";
			
		
			
}
	
}


	// READ NOT WORKING IN FUNCTION :(
	// function Read () {

	// 	global $connection;
	// 	 $read = "SELECT * FROM users";
 //        $read_query = mysqli_query($connection,$read);

 //        while( $readresults = mysqli_fetch_array($read_query)) {
 //            $firstname = $readresults['firstname'];
 //            $lastname = $readresults['lastname'];
 //            $email = $readresults['email'];
        
	// 		}	



	// }


















 ?>