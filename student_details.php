<?php

$fname = $_POST['fname'];
$stid = $_POST['stid'];
$java = $_POST['java'];
$py = $_POST['py'];
$datamin = $_POST['datamin'];
$wp = $_POST['wp'];
$iot = $_POST['iot'];

$total = $java + $py + $datamin + $wp + $iot;
$avg = $total/500;
$percentage = $avg*100;

echo"<table border=1>";
echo"<tr>";
echo"<th>Full name</th>";
echo"<th>Student ID</th>";
echo"<th>Java</th>";
echo"<th>Python</th>";
echo"<th>DataMining</th>";
echo"<th>web Programming</th>";
echo"<th>Internet of things</th>";
echo"<th>Total</th>";
echo"<th>Percentage</th>";
echo"</tr>";

echo"<tr>";
echo"<td>$fname</td>";
echo"<td>$stid</td>";
echo"<td>$java</td>";
echo"<td>$py</td>";
echo"<td>$datamin</td>";
echo"<td>$wp</td>";
echo"<td>$iot</td>";
echo"<td>$total</td>";
if($percentage > 80){
    echo"<td bgcolor = green>$percentage%</td>";
}else if($percentage > 70){
    echo"<td bgcolor =  green>$percentage%</td>";
}else if($percentage >50){
    echo"<td bgcolor = yellow>$percentage%</td>";
}else{
    echo"<td bgcolor = red>$percentage</td>";
}
echo"</tr>";
echo"</table>";

?>
