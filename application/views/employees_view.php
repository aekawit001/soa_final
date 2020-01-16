<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<meta charset="UTF-8">
<?php 
include('controlors/api/connection.php');

$query = "SELECT * FROM tb_member ORDER BY member_id asc" or die("Error:" . mysqli_error()); 

$result = mysqli_query($con, $query); 
echo "<table border='1' align='center' width='500'>";

echo "<tr align='center' bgcolor='#CCCCCC'><td>employeeNumber </td><td>firstName </td><td>lastName </td><td>extension</td> <td>email </td><td>officeCode </td><td>reportsTo </td><td>jobTitle</td></tr>";
while($row = mysqli_fetch_array($result)) { 
  echo "<tr>";
  echo "<td>" .$row["employeeNumber "] .  "</td> "; 
  echo "<td>" .$row["firstName "] .  "</td> ";  
  echo "<td>" .$row["lasttName "] .  "</td> ";
  echo "<td>" .$row["extension "] .  "</td> ";
  echo "<td>" .$row["email"] .  "</td> ";
  echo "<td>" .$row["officeCode "] .  "</td> "; 
  echo "<td>" .$row["reportsTo "] .  "</td> ";  
  echo "<td>" .$row["jobTitle "] .  "</td> ";
  //แก้ไขข้อมูล
  echo "<td><a href='UserUpdateForm.php?ID=$row[0]'>edit</a></td> ";
  
  //ลบข้อมูล
  echo "<td><a href='UserDelete.php?ID=$row[0]' onclick=\"return confirm('Do you want to delete this record? !!!')\">del</a></td> ";
  echo "</tr>";
}
echo "</table>";
//5. close connection
mysqli_close($con);
?>