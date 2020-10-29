	<?php

		//create record function
		function createRecord(){

			$servername='localhost';
			$username='root';
			$password='';
			$databasename='';//enter your databasename here

			 //creating a connection to database

	$connection=mysqli_connect($servername,$username,$password,$databasename);

			//check connection is successful or not

			if(!$connection){
				die('connection unsuccessful:'.mysqli_connect_error());

			}
			// else{
			// 	echo 'connection successful';
			// }
		


		//storing userinput into variables

		$movieTitle=$_POST['create-title'];
		$movieGenre=$_POST['create-genre'];
		$movieDirector=$_POST['create-director'];

		//inserting data into moviefix table
		$sql="insert into movieflix_table(title,genre,director) values('$movieTitle','$movieGenre','$movieDirector')";

		//checking if inserting data was successful
		if(!mysqli_query($connection,$sql)){
			echo 'error'.$sql.mysqli_error($connection);
			
		}
		// else{
		// 	echo 'successfully inserted data';
			
		// }
	



		//close connection
		mysqli_close($connection);

		//re-directing user back to the main page
		header('location:index.php');

	}

		if(isset($_POST['create-button'])){
			 echo 'button clicked';
			createRecord();
		}



		?>