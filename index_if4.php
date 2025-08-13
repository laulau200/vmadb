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
<input type=\"submit\" name=\"Submit\" value=\"Votre vma est de" .$vma. "kmh ! " onclick=\"window.close()\">;
<!--page 153 -->
</form>

<!-- Test a faire modifier le fichier editnews-->
// <form action="commun/less_12.php" method="post">
    // <input type="hidden" name="starts" value="<php echo $starts?>">
    // <input type="hidden" name="end" value="<php echo $end?>">
    // <input type="hidden" name="event" value="<php echo $event?>">
    // <input type="submit" name="submit" value="Your Link" data-icon="edit">
// </form>

<!-- fin test-->

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $distance = $_POST['distance'];
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $vma = $distance / 100;


    
	
    $_SESSION['vma'] = $vma;
	
	sleep(5);

    
 echo '<BR><input type="submit" name="submit" value="Soumettre" onclick="myFunction()">'
//  <button onclick="myFunction()">Replace document</button>

<script>
function myFunction() {
	if ($distance < 1200) {	
  window.location.replace("http://www.ldemazy.com/vma/commun/less_12.php")
}
    //print ("beau resultat !") ;
} 	elseif ($distance < 1800) {
		window.location.replace("http://www.ldemazy.com/vma/commun/less_18.php/");
} 	else {
  window.location.replace("http://www.ldemazy.com/vma/commun/champion.php/");
    }
	</script>

    /* } elseif ($vma <script 18) {
		echo "$name, <br> Votre VMA est de : " . $vma . " km/h";
        header('Location: /commun/less_18.php');
		} else {
			echo "$name, <br> Votre VMA est de : " . $vma . " km/h";
			header('Location: commun/champion.php');
		}

</script>
	exit;  */
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