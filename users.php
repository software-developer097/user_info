
<?php 

require_once 'connect.php';

require_once 'header.php';

echo "<div class='container'>";



$sql 	= "SELECT * FROM user_info";
$result = $con->query($sql); 

if (!empty($result) && $result->num_rows > 0) {
	?>
	<h2>List of all Users</h2>
	<table class="table table-bordered table-striped">
		<tr>
			<td>Firstname</td>
			<td>Lastname</td>
			<td>Email</td>
			<td>DOB</td>
			<td>phone</td>
			<td>Designation</td>
			<td>Gender</td>
			<td>Hobbies</td>
		</tr>
	<?php
	while( $row = $result->fetch_assoc()){ 
		echo "<form action='' method='POST'>";	//added
	    echo "<tr>";
		echo "<td>".$row['firstname'] . "</td>";
		echo "<td>".$row['lastname'] . "</td>";
		echo "<td>".$row['Email'] . "</td>";
		echo "<td>".$row['DOB'] . "</td>";
		echo "<td>".$row['phone'] . "</td>";
		echo "<td>".$row['Designation'] . "</td>";
		echo "<td>".$row['Gender'] . "</td>";
		echo "<td>".$row['Hobbies'] . "</td>";
		
		echo "</tr>";
		echo "</form>"; //added 
	}
	?>
	</table>
<?php 
}
else
{
	echo "<br><br>No Record Found";
}
?> 
</div>

<?php 

 require_once 'footer.php';