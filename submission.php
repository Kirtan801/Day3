<?php
$name = $_POST['name'];
$age = $_POST['age'];
$mail = $_POST['mail'];


echo"<table border=1>";
echo"<tr>";
echo"<th>Name</th>";
echo"<th>Age</th>";
echo"<th>email</th>";
echo"</tr>";

echo"<tr>";
echo"<td>$name</td>";
echo"<td>$age</td>";
echo"<td>$mail</td>";
echo"</tr>";
echo"</table>";
?>