<?php 

require_once 'connect.php';

require_once 'header.php';

?>
<div class="container">
	<?php 

	if(isset($_POST['addnew'])){

		if( empty($_POST['firstname']) || empty($_POST['lastname']) || empty($_POST['Email']) || empty($_POST['DOB']) || empty($_POST['Designation'])||  empty($_POST['phone'])||  empty($_POST['Gender'])||  empty($_POST['Hobbies'])){
			echo "Please fillout all required fields"; 
		}else{		
			$firstname  = $_POST['firstname'];
			$lastname  	= $_POST['lastname'];
			$Email    	 = $_POST['Email'];
			$DOB  	     = $_POST['DOB'];
			$Designation = $_POST['Designation'];
			$Gender  	 = $_POST['Gender'];
			$phone       = $_POST['phone'];
			$Hobbies = implode(",",$_POST['Hobbies']);


			$sql = "INSERT INTO user_info(firstname,lastname,Email,DOB,Designation,Gender,phone,Hobbies) 
		    VALUES('$firstname','$lastname','$Email',$DOB,'$Designation','$Gender','$phone','$Hobbies')";

	if (mysqli_query($con,$sql)) {
    
          echo "<script>alert('Insert successfully');</script>";
          
        } else {
             echo "error: ". $sql .";
           " . mysqli_error($con);
      }
      mysqli_close($con);
	}
}
	?>
	<div class="row">
	<div class="col-md-6 col-md-offset-3">
		<div class="box">
			<h3><i class="glyphicon glyphicon-plus"></i>&nbsp;Add New User</h3> 
			<form action="" method="POST">
				<label for="firstname">Firstname</label>
				<input type="text" id="firstname"  name="firstname" class="form-control"required><br>
				<label for="lastname">Lastname</label>
				<input type="text"  name="lastname" id="lastname" class="form-control"required><br>
				<label for="Email">Email</label>
				<textarea rows="2" name="Email" class="form-control"required></textarea><br>
				<label for="DOB">DOB</label> 
				<input type="date"  name="DOB" id="DOB" class="form-control"><br>
				<label for="phone">Enter your phone number:</label><br>
                <input type="number" id="phone" name="phone" pattern=""required><br>
				<label for="Designation">Designation</label> 
				<input type="text"  name="Designation" id="Designation" class="form-control"required><br>
				<label for="Gender">Gender</label><br>
				<input type="radio"  name="Gender" id="Gender"  value ="male" class="">Male:
				<input type="radio"  name="Gender" id="Gender"  value ="female" class="">Female:<br>
				<label for="Hobbies">Hobbies</label><br>
				 
			    <input type="checkbox" name='Hobbies[]' value="Game"> Game <br/>
			    <input type="checkbox" name='Hobbies[]' value="Reading "> Reading <br/>
			    <input type="checkbox" name='Hobbies[]' value="Singing"> Singing <br/>
			    <input type="checkbox" name='Hobbies[]' value="Dancing"> Dancing <br/>
				<br/>
   
				<br>
				<input type="submit" name="addnew" class="btn btn-success" value="Add New">
			</form>
		</div>
	</div>
</div>
</div>https://github.com/software-developer097/user_info.git

<?php 

 require_once 'footer.php';