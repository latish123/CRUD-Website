<?php
/*
1.isset to call a function
2.create a connection to the database
3.store the user input into variables
4.set up our INSERT query, run it
5.close connection
6.redirect the user back to index.php
*/

function DeleteRecord(){
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

			$id=$_POST['delete-id'];

		//set up/define our DELETE Query,then run it
		$sql="delete from movieflix_table where id='$id'";
		$deleteQuery=mysqli_query($connection,$sql);//executed our SQL Query

		//checking if deleting data was successful
		if(!$deleteQuery){
			echo 'error'.$sql.mysqli_error($connection);
			
		}
		else{
			echo 'successfully deleted data';
			
		}
	



		//close connection
		mysqli_close($connection);

		//re-directing user back to the main page
		header('location:index.php');

}

if(isset($_POST['submit-delete-button'])){
	echo 'delete button clicked';
	DeleteRecord();
}



?>