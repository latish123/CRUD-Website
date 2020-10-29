<?php
/*
1.isset to call a function
2.create a connection to the database
3.store the user input into variables
4.set up our INSERT query, run it
5.close connection
6.redirect the user back to index.php
*/

function updateRecord(){
	//create a connection to our database

			$servername='localhost';
			$username='root';
			$password='';
			$databasename='';//enter your databasename here

			 //creating a connection to database

			$connection=mysqli_connect($servername,$username,$password,$databasename);

			if(!$connection){
				die('connection unsuccessful:'.mysqli_connect_error());

			}
			// else{
			// 	echo 'connection successful';
			// }

			
			//store userinput inside 

			$id=$_POST['update-id'];

		$movieTitle=$_POST['update-title'];
		$movieGenre=$_POST['update-genre'];
		$movieDirector=$_POST['update-director'];

		//set up/define our UPDATE Query,then run it
		$sql="update movieflix_table set title='$movieTitle',
		genre='$movieGenre', director='$movieDirector' where id='$id'";
		$updateQuery=mysqli_query($connection,$sql);//executed our SQL Query

		//checking if inserting data was successful
		if(!$updateQuery){
			echo 'error'.$sql.mysqli_error($connection);
			
		}
		// else{
		// 	echo 'successfully updated data';
			
		// }
	



		//close connection
		mysqli_close($connection);

		//re-directing user back to the main page
		header('location:index.php');

}

if(isset($_POST['submit-update-button'])){
	echo 'update button clicked';
	updateRecord();
}



?>