<?php

include 'db_connection.php';

$id=$_GET['id'];
$sql="DELETE  FROM stanovnici WHERE Id = $id";
$result=mysqli_query($db,$sql);
if($result)
{
	echo "Zapis je obrisan";
	
}
else {
	echo "Doslo je do pogreske <br>";
	
	echo mysqli_errno($db).":".mysqli_error($db)."\n";
}

	mysqli_close($db);
	?>
	<html>
	<head>
	</head>
<body>
<h2>Brisanje Adrese</h2>
<a href ="Zadatakphp.php" style="margin-left:100px;">Pregled adresa</a>
</body>

</html>