<?php

include 'db_connection.php';


$sql="SELECT * FROM stanovnici";
$result=mysqli_query($db, $sql);


if($result){
	echo '<table>';
	echo '<tr><th>Ime</th><th>Prezime</th><th>Adresa</th><th>Grad</th><th>Email</th><th>Spol</th><th>Prijatelj</th><th>Slika</th><th>Brisanje</th><th>Izmjena</th></tr>';
	while($row = mysqli_fetch_assoc($result))
{
	$id=$row['Id'];
	$Ime=$row['Ime'];
	$Prezime=$row['Prezime'];
	$Adresa=$row['Adresa'];
	$Grad=$row['Grad'];
	$Email=$row['Email'];
	$Spol=$row['Spol'];
	$Prijatelj=$row['Prijatelj'];
	if(	$Spol=='M'){
	
	$m='<img height ="100" width="100" src ="m.jpg"';
}
else{
	$m='<img height ="100" width="100"  src ="z.jpg"';
	
}

	echo "<tr>";
	echo "<td><a href='Pogled.php?id=$id'>".stripslashes($row['Ime'])."</a></td>";
	echo "<td>$Prezime</td>";
	echo "<td>$Adresa</td>";
	echo "<td>$Grad</td>";
		echo "<td>$Email</td>";
	echo "<td>$Spol</td>";
	echo "<td>$Prijatelj</td>";
	echo "<td>$m</td>";
	echo "<td><a href='Obrisi.php?id=$id'>Obriši</a></td>";
	echo "<td><a href='Izmjeni.php?id=$id'>Izmjeni</a></td></tr>";

}
	
	
}
else {
	echo "Doslo je do pogreske <br>";
	
	echo mysqli_errno($db).":".mysqli_error($db)."\n";
}
	echo '</table>';
	mysqli_free_result($result);
	mysqli_close($db);



?>
<html>

<head>
<style>
table {
  width:50%;
  margin:auto;
  }
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 15px;
  text-align: left;
}
table#t01 tr:nth-child(even) {
  background-color: #eee;
}
table#t01 tr:nth-child(odd) {
 background-color: #fff;
}
table#t01 th {
  background-color: black;
  color: white;
}
.a{

}
</style>
</head>
<body>

<a href ="forma.php" style="margin-left:500px;">Unos nove adrese</a>
</body>

</html>