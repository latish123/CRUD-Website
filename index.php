<!DOCTYPE html>
<html>
<head>
	<title>MovieFlix CRUD App</title>
	<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="main-div">
		<?php require_once 'create.php' ;?>
		<div>
			<h2>Movieflix CRUD Application</h2>
			<?php
               //first create your table in database and then do the following
				
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

				//query the table for the records
				$sql="select * from movieflix_table";//set up a query
				$result=mysqli_query($connection,$sql);//store the result of our query into the $result

				$rowCount=mysqli_num_rows($result);//method returns to us the no. of rows->$rowCount

				if($rowCount>0){
					echo "
					<table>
						<thead>
							<tr>
								<th>Record Id</th>
								<th>Title</th>
								<th>Genre</th>
								<th>Director</th>
							</tr>
						</thead>



					";
				}
	?><!-- end php code block -->
			
			



			<?php
			while($row=$result->fetch_assoc()):?>	<!-- return to us the associative information in our database -->

				<tr>
					<td><?php echo $row['id'] ?></td>
					<td><?php echo $row['title'] ?></td>
					<td><?php echo $row['genre'] ?></td>
					<td><?php echo $row['director'] ?></td>
				</tr>
			<?php endwhile ?>
		</table>

			

	  


		</div>
		<div class="content-wrapper">
			<button id="create-button">Create Record</button>
			<button id="edit-button">Edit Record</button>
			<button id="delete-button">Delete Record</button>


			<form action="create.php" method="POST" id="create-form">
				<input type="text" name="create-title" placeholder="enter movie title" /><br/>
				<input type="text" name="create-genre" placeholder="enter movie genre" /><br/>
				<input type="text" name="create-director" placeholder="enter movie director" /><br/>
				<input type="submit" value="save" name="create-button" class="small-button"/>

				
			</form>


				<form action="update.php" method="POST" id="update-form">
					<input type="text" name="update-id" placeholder="enter Record ID" /><br/>
				<input type="text" name="update-title" placeholder="enter movie title" /><br/>
				<input type="text" name="update-genre" placeholder="enter movie genre" /><br/>
				<input type="text" name="update-director" placeholder="enter movie director" /><br/>
				<input type="submit" value="save" name="submit-update-button" class="small-button"/>

				
			</form>

			<form action="delete.php" method="POST" id="delete-form">
					<input type="text" name="delete-id" placeholder="enter Record ID" /><br/>
				<input type="submit" value="save" name="submit-delete-button" class="small-button"/>

				
			</form>


		</div>
	</div>
	<script type="text/javascript" src="script1.js"></script>


</body>
</html>