<?php

include 'db_connection.php';

if(isset($_POST["Spremi"])){
	
	
	
$Ime=addslashes($_POST["Ime"]);
$Prezime=$_POST["Prezime"];
$Email=$_POST["Email"];
$Adresa=$_POST["Poruka"];
$Grad=$_POST["Grad"];
$Spol=$_POST["spol"];

if (isset($_POST['Prijatelj'])) {
 $Prijatelj="Da";
    
}
 else {
  
   $Prijatelj="Ne";
}

if(empty($Ime)||empty($Prezime)||empty($Email)||empty($Adresa)||empty($Grad))
{
	header('Location: http://localhost/forma.php?error=emptyfields&ime:'.$Ime."&prezime:".$Prezime."&email:".$Email."&adresa".$Adresa);
	exit();
	
}
else{
	
$stmt = $db->prepare("INSERT INTO stanovnici (Ime, Adresa, Grad,Email,Spol,Prijatelj,Prezime) VALUES (?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("sssssss", $Ime, $Adresa, $Grad, $Email, $Spol, $Prijatelj, $Prezime,);
$stmt->execute();
}


}

else{
	
	
}
?>
	<html>
	<head>
	</head>
<body>
<h2>Spremanje Adrese</h2>
<a href ="Zadatakphp.php" style="margin-left:100px;">Pregled adresa</a>
</body>

</html>