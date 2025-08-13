<?php
// database connexion settings
$servername = "sql213.infinityfree.com";
$username = "if0_37889916";
$password = "Babettevit234";
$dbname = "if0_37889916_posts";

// Create connection
$conn = new mysqli($servername,$username,$password,$dbname);

//check connection
if($conn->connect_error){
    die("Echec de connexion : " . $conn->connect_error);
}

// Get form data
$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["distance"];

// test condition

if ($vma < 12) {
	
	echo "<script type='text/javascript'>alert('Successful - Record Updated!'); window.location.href = 'http://www.ldemazy.com/vma/commun/less_12.php';</script>";
//		echo "$name, <br> Votre VMA est de : " . $vma . " km/h";window.location.href('Location: http://www.ldemazy.com/vma/commun/less_12.php');
    } elseif ($vma < 18) {
		echo "$name, <br> Votre VMA est de : " . $vma . " km/h";
  //      header('Location: http://www.ldemazy.com/vma/commun/less_18.php');
		} else {
			echo "$name, <br> Votre VMA est de : " . $vma . " km/h";
	//		header('Location: http://www.ldemazy.com/vma/commun/champion.php');
		}
	
	exit;


// Requete pour insérer les connées dans la base
$sql = "INSERT INTO mail(nom,email,message) VALUES ('$name','$email','$message')";

if ($conn->query($sql) === TRUE) {
    echo "donnée renseignée ! ";
} else {
    echo "Erreur : " . $sql . "<br>" . $conn->error;
}

// On ferme la connexion
$conn->close();
?>