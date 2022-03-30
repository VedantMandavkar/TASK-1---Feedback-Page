<?php 
include_once('connection.php'); 
$query="select * from feedback"; 
$result=mysqli_query($con,$query); 
?> 
<!DOCTYPE html> 
<html> 
	<head> 
		<title> Fetch Data From Database </title> 
	</head> 
	<body> 
	<table align="center" border="1px" style="width:600px; line-height:40px;"> 
	<tr> 
		<th colspan="6"><h2>Student Record</h2></th> 
		</tr> 
			  <th> Email </th> 
			  <th> Name </th> 
			  <th> Roll Number </th> 
			  <th> Department </th> 
              <th> Shift </th>
              <th> Description </th>
			  
		</tr> 
		
		<?php while($rows=mysqli_fetch_assoc($result)) 
		{ 
		?> 
		<tr> <td><?php echo $rows['Email']; ?></td> 
		<td><?php echo $rows['NAME']; ?></td> 
		<td><?php echo $rows['ROLL NUMBER']; ?></td> 
		<td><?php echo $rows['DEPARTMENT']; ?></td> 
        <td><?php echo $rows['SHIFT']; ?></td> 
        <td><?php echo $rows['DESCRIPTION']; ?></td> 
		</tr> 
	<?php 
               } 
          ?> 

	</table> 
	</body> 
	</html>