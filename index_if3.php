/* <?php
//if ($_POST['submit'] == "Login")
{

	//script to check user name and password would be coded here
//	}

	//if authentication is successfull
//	session_start();
//	$_SESSION['access'] = "yes";{
//	header(Locationaccess.php);
}//

//if ($_POST['submit'] == "Log Out")
//{

	//if the user decides to exit
//	session_destroy();
//}

?> */
<html>
<head>
	<?php
// 	ob_implicit_flush(true);
header("Expires: Tue, 01 Jan 2000 00:00:00 GMT");
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
?>
	
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
<?php
	if (isset($_SESSION['previous'])) {
   if (basename($_SERVER['PHP_SELF']) != $_SESSION['previous']) {
        
        ### or alternatively, you can use this for specific variables:
        ### unset($_SESSION['varname']);
   }
}
session_destroy();
?>
-->
<meta http-equiv="Cache-Control" content="no-cache">
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




<!-- fin test-->

<?php
$_SESSION['previous'] = basename($_SERVER['PHP_SELF']);
if (isset($_POST["vma"]) && !empty($_POST["vma"])) {
    echo "vitesse.";
} else {
    echo "echec.";
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $distance = $_POST['distance'];
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $vma = $distance / 100;
}


    
	
    $_SESSION['vma'] = $vma;
	
	// sleep(5);

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
<!-- Location: commun/less_12.php');  
		exit();
		elseif ($vma < 18) {
			echo "$name, <br> Votre VMA est de : " . $vma . " km/h";
			header('Location: commun/less_18.php');  }
			exit();}
				else {
					echo "$name, <br> Votre VMA est de : " . $vma . " km/h";
						header('Location: commun/champion.php');
						exit();
				}
	exit;
				

<?php
    gc_enable(); // Enable Garbage Collector
    var_dump(gc_enabled()); // true
    var_dump(gc_collect_cycles()); // # of elements cleaned up
    gc_disable(); // Disable Garbage Collector
	session_write_close()
?>

</body>
</html>