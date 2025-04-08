
<html>
<head>
</head>
<body>
<h2>Izmjena adrese</h2>
<?php
include 'db_connection.php';
	
$id=$_POST['Id'];
$Ime=addslashes($_POST["Ime"]);
$Prezime=$_POST["Prezime"];
$Email=$_POST["Email"];
$Adresa=$_POST["Poruka"];
$Grad=$_POST["Gradov"];
$Spol=$_POST["spol"];

if (isset($_POST['Prijatelj'])) {
 $Prijatelj="Da";
    
}
 else {
  
   $Prijatelj="Ne";
}

$sql="Update stanovnici SET Ime='$Ime',Prezime='$Prezime',Adresa='$Adresa',Grad='$Grad', Email='$Email',Spol='$Spol', Prijatelj='$Prijatelj' WHERE Id='$id'";
if(mysqli_query($db,$sql))
{
	
	echo "Izmjena je uspješno spremljena";
}
else{
	echo "Izmjena nije spremljena";
	echo mysqli_errno($db).":".mysqli_error($db)."\n";
}

?>
<br>
<a href ="Zadatakphp.php">Pogled u adresar</a>
</body>

</html>