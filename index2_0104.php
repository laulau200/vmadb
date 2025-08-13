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
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Exemple de structure d'une page web">
<meta name="keywords" content="HTML, CSS, Javascript">
<meta name="uthor" content="Laurent DEMAZY">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="keywords" content="technicien informatique, administrateur r�seaux, windows, linux">
<meta name="author" content="Laurent DEMAZY">
<meta http-equiv="refresh" content="300">

<title>Calcul de la VMA</title><br><br><br>
</head>

<body>
<header>
<h1><strong>Calcul de la VMA</strong></h1>
</header>
<!--h1>Calcul de la VMA</h1-->
<br><br>
<h2>Saisie des informations</h2>
<br><br>

<form action="" method="POST">
Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
Distance en m&egrave;tres parcourue en 6 minutes : <input type="number" name="distance"><br>
<input type="submit">
</form>

<?php
unset($distance);
$name = $_POST['name'];
$vma = $_POST['distance']/100;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // destroy more than one variable
unset($email, $distance);
    
    echo "$name, <br> Votre VMA est de : ".$vma. "km/h";
	
  }  
  
 if ($vma < 12) {
		echo "$name, <br> Votre VMA est de : " . $vma . " km/h";
$newUrl = 'http://www.ldemazy.free.nf/vma/less_12.php/';
echo "<script>window.location.href='{$newUrl}';</script>";}
	else if ($vma < 18) {
$newUrl = 'http://www.ldemazy.free.nf/vma/less_18.php/';
echo "<script>window.location.href='{$newUrl}';</script>";}
	else {
		$newUrl = 'http://www.ldemazy.free.nf/vma/champion.php/';
		echo "<script>window.location.href='{$newUrl}';</script>";}


?>

<?php
    gc_enable(); // Enable Garbage Collector
    var_dump(gc_enabled()); // true
    var_dump(gc_collect_cycles()); // # of elements cleaned up
    gc_disable(); // Disable Garbage Collector
?>

</body>
</html>