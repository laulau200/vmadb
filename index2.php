<html>
<head>
<style>
body{
	background-color: #7FFFD4;
	color: #D2691E;
	font-family: sans-serif;
	font-size: large;	
}

p{
	background-color: #00FFFF;
	width: 250px;
	height: auto;
	padding: 50px;
	margin: 50px;
	border: 5px solid ref;
	border-radius: 20%;
	opacity: 0.9;
	display: ;
	letter-spacing: 2px
	word-spacing:3px; 
		
}

</style>
<title>Calcul de la VMA</title><br><br><br>
<!-- script connexion --><?php $servername = "sql213.infinityfree.com";
$username = "if0_37889916";
$password = "Babettevit234";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
echo "01-04";
?><!-- fin script-->
</head>

<body>
<header>
<h1><strong>Calcul de la VMA</strong></h1>
</header>
<!--h1>Calcul de la VMA</h1-->
<br><br>
<h2>Saisie des informations</h2>
<br><br>

<form action="insert.php" method="POST">
Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
Distance en m&egrave;tres parcourue en 6 minutes : <input type="number" name="distance"><br>
<input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $distance = $_POST['distance'];
  $name = $_POST['name'];
  $email = $_POST['email'];
  $vma = $distance / 100;
    
    echo "$name, <br> Votre VMA est de : ".$vma. "km/h";
  }  
?>

<?php
    gc_enable(); // Enable Garbage Collector
    var_dump(gc_enabled()); // true
    var_dump(gc_collect_cycles()); // # of elements cleaned up
    gc_disable(); // Disable Garbage Collector
?>

/* Redirection du navigateur */
  if ($vma < 12) {window.location.href = "http://www.ldemazy.free.nf/vma/less_12.php";

  } else if ($vma < 18) {window.location.href = "http://www.ldemazy.free.nf/vma/less_18.php";

  } else ($vma > 18) {window.location.href = "http://www.ldemazy.free.nf/vma/champion.php";
  }

</body>
</html>