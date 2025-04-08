<html>

<head>
     
	   
	   
	   <style>
	   p a:hover {
    color: #555;
}
p a {
    font-size: 11px;
    color: #aaa;
    float: right;
    margin-top: -13px;
    margin-right: 20px;
	box-shadow: inset 0 1.5px 3px rgba(190, 190, 190, .4), 0 0 0 5px #f5f7f8;
    -webkit-transition: all .4s ease;
    -moz-transition: all .4s ease;
    transition: all .4s ease;
}
	html, body {   
 width: 100%;   
height: 100%;   
font-family: "Helvetica Neue", Helvetica, sans-serif;   
color: #444;   
-webkit-font-smoothing: antialiased;
    background: #f0f0f0;
	transition: background-color .5s;}
	
.Registracija{
	
	  position: fixed;
    width: 400px;
    height: 520px;
    top: 40%;
    left: 48%;
    margin-top: -140px;
    margin-left: -170px;
	background: #fff;
    border-radius: 3px;
    border: 1px solid #ccc;
    box-shadow: 0 1px 2px rgba(0, 0, 0, .1);
}
label {
    color: #555;
    display: inline-block;
    margin-left: 20px;
    padding-top: 10px;
    font-size: 14px;
}
input {
    font-family: "Helvetica Neue", Helvetica, sans-serif;
    font-size: 15px;
    outline: none;
}
input[type=radio]{
	 padding-left: 10px;


    margin-left: 20px;
	
}

input[name=Grad],
input[type=text],
input[type=Email],
input[type=password] {
    color: #777;
    padding-left: 10px;
    margin: 10px;
    margin-top: 12px;
    margin-left: 20px;
    width:300px;
    height: 35px;
    border: 1px solid #c7d0d2;
    border-radius: 2px;
    box-shadow: inset 0 1.5px 3px rgba(190, 190, 190, .4), 0 0 0 5px #f5f7f8;
}

textarea{
	
	color: #777;
    padding-left: 10px;
    margin: 10px;
    margin-top: 12px;
    margin-left: 20px;
    width:300px;
    height: 35px;
    border: 1px solid #c7d0d2;
    border-radius: 2px;
    box-shadow: inset 0 1.5px 3px rgba(190, 190, 190, .4), 0 0 0 5px #f5f7f8;
}

input[type=submit] {
    float: right;
    margin-right: 20px;
    margin-top: 20px;
    width: 80px;
    height: 30px;
    font-size: 14px;
    font-weight: bold;
    color: #fff;
    background-color: #acd6ef; /*IE fallback*/
    background-image: -webkit-gradient(linear, left top, left bottom, from(#acd6ef), to(#6ec2e8));
    background-image: -moz-linear-gradient(top left 90deg, #acd6ef 0%, #6ec2e8 100%);
    background-image: linear-gradient(top left 90deg, #acd6ef 0%, #6ec2e8 100%);
    border-radius: 30px;
    border: 1px solid #66add6;
    box-shadow: 0 1px 2px rgba(0, 0, 0, .3), inset 0 1px 0 rgba(255, 255, 255, .5);
    cursor: pointer;
}
input[type=submit]:hover {
    background-image: -webkit-gradient(linear, left top, left bottom, from(#b6e2ff), to(#6ec2e8));
    background-image: -moz-linear-gradient(top left 90deg, #b6e2ff 0%, #6ec2e8 100%);
    background-image: linear-gradient(top left 90deg, #b6e2ff 0%, #6ec2e8 100%);
}
input[type=submit]:active {
    background-image: -webkit-gradient(linear, left top, left bottom, from(#6ec2e8), to(#b6e2ff));
    background-image: -moz-linear-gradient(top left 90deg, #6ec2e8 0%, #b6e2ff 100%);
    background-image: linear-gradient(top left 90deg, #6ec2e8 0%, #b6e2ff 100%);
}
.lower {
    background: #ecf2f5;
    width: 100%;
    height: 82px;
    margin-top: 20px;
}



	   
	   </style>
</head>

<body>



<form action ="Spremi.php" method="POST" enctype="multipart/form-data">
<div class="Registracija">


<input type="text" id="IME" name="Ime" placeholder="Ime">

<input type="text" id="pr" name="Prezime" placeholder="Prezime">


<input type ="Email" id="Mail" name="Email" placeholder="Email">

<textarea name="Poruka" rows="2" cols="30" placeholder="Adresa"></textarea>

<input list="Gradovi" name="Grad" >
  <datalist name ="Gradov" id="Gradovi" >
    <option value="Zagreb">
    <option value="Osijek">
    <option value="Rijeka">
    
  </datalist>
  <br>
  <label>Spol:</label><br>
   <input type="radio" name="spol" value="Musko"><label>Muško</label><br>
  <input type="radio" name="spol" value="Zensko"><label> Žensko</label><br>
  <label for="checkbox1"><input type="checkbox" name ="Prijatelj" >Prijatelj</label>
<input type="file" name="image" id="image"/>
<div class="lower">
<a href="Zadatakphp.php">Pregled adresa</a>
<input type="submit" value="Spremi" name="Spremi"  id="spremi" >
</div></div>


</form>
</body>
</html>


<script>
$(document).ready(function()){
	$('spremi').click(function){
		var image_name=$('#image').val();
		if(image_name =='')
		{
			alert("Odaberite sliku");
			return false;
			
		}
		else{
			var nastavak=$('#image').val().split('.').pop().toLowerCase();
			if(jQuery.in_array(nastavak,['gif','png','jpg','jpeg'])== -1)
			{
				
				alert('Ne valja nastavak');
				$('#image').val('');
				return false;
			}
			
		}
	}
	
}


</script>