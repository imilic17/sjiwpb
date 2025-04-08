<?php

include 'db_connection.php';

$sql=mysqli_query($db,"SELECT * FROM stanovnici WHERE Id =".$_GET['id']);
if ($row = mysqli_fetch_array($sql)){
	$id=$row['Id'];
	$Ime=$row['Ime'];
	$Prezime=$row['Prezime'];
	$Adresa=$row['Adresa'];
	$Grad=$row['Grad'];
	$Email=$row['Email'];
	$Spol=$row['Spol'];
	$Prijatelj=$row['Prijatelj'];
	
	
	
}
	mysqli_free_result($sql);
	mysqli_close($db);



?>



<html>

<head>
     
            <link rel="stylesheet" type="text/css" href="style.css">
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Forma za pregled adresa</title>
</head>

<body>



<form action ="SpremiIzmjenu.php" method="POST">
<div class="Registracija">


<input type="text" id="IME" name="Ime" value="<?php echo $Ime ?>">

<input type="text" id="pr" name="Prezime" value="<?php echo $Prezime ?>">

<input type ="Email" id="Mail" name="Email" value="<?php echo $Email ?>">

<textarea name="Poruka" rows="2" cols="30" <?php echo $Adresa ?>><?php echo $Adresa ?></textarea>


  <select name ="Gradov" class="Gradovi" style="color: #777;
    padding-left: 10px;
    margin: 10px;
    margin-top: 12px;
    margin-left: 20px;
    width:300px;
    height: 35px;
    border: 1px solid #c7d0d2;
    border-radius: 2px;
    box-shadow: inset 0 1.5px 3px rgba(190, 190, 190, .4), 0 0 0 5px #f5f7f8;" >
    <option "<?php if($Grad=="Zagreb") echo "selected"?>">Zagreb</option>
     <option "<?php if($Grad=="Osijek") echo "selected"?>">Osijek</option>
    <option "<?php if($Grad=="Rijeka") echo "selected"?>">Rijeka</option>
    
  </select>
  <br>
  <label>Spol:</label><br>
   <input type="radio" name="spol" value="Musko" <?php if($Spol=="M") echo "checked"?>/><label>Muško</label><br>
  <input type="radio" name="spol" value="Zensko"  <?php if($Spol=="Z") echo "checked"?>/><label> Žensko</label><br>
  <label for="checkbox1"><input type="checkbox" name ="Prijatelj"  <?php if($Prijatelj=="Da") echo "checked"?> >Prijatelj</label>
  <input type="hidden" name= "id" value="<?php echo $Id?>">
<div class="lower">
<a href="Zadatakphp.php">Pregled adresa</a>

</div></div>


</form>