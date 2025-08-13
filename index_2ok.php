<html>
<head>
<title>Calcul de la VMA</title><br><br><br>
</head>

<body>
<header>
<h1><strong>Calcul de la VMA</strong></h1>
</header>

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
	$_SESSION['vma'] = $vma;
	
	sleep(15);

    if ($vma < 12) {
		echo "$name, <br> Votre VMA est de : " . $vma . " km/h";
        header('Location: http://ldemazy.free.nf/commun/less_12.php');
    } elseif ($vma < 18) {
		echo "$name, <br> Votre VMA est de : " . $vma . " km/h";
        header('Location: http://ldemazy.free.nf/commun/less_18.php');
		} else {
			echo "$name, <br> Votre VMA est de : " . $vma . " km/h";
			header('Location: http://ldemazy.free.nf/commun/champion.php');
		}
	
	exit;
}
?>

<?php
    gc_enable(); // Enable Garbage Collector
    var_dump(gc_enabled()); // true
    var_dump(gc_collect_cycles()); // # of elements cleaned up
    gc_disable(); // Disable Garbage Collector
?>

</body>
</html>