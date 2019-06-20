<?php
include("config.php");

//Get data 
$nom = mysqli_real_escape_string($cn,$_POST['nom']);
$prenom = mysqli_real_escape_string($cn,$_POST['prenom']);
$specialite = mysqli_real_escape_string($cn,$_POST['specialite']);
$formation = mysqli_real_escape_string($cn,$_POST['formation']);
$diplome = mysqli_real_escape_string($cn,$_POST['diplome']);
$ecole = mysqli_real_escape_string($cn,$_POST['ecole']);
$mobile = mysqli_real_escape_string($cn,$_POST['mobile']);
$email = mysqli_real_escape_string($cn,$_POST['email']);
$pays = mysqli_real_escape_string($cn,$_POST['pays']);
$question = mysqli_real_escape_string($cn,$_POST['question']);



//count email statut
//$sql_count_email = "SELECT count(*) as total FROM liste_attente WHERE email LIKE '".$email."'";
//mysqli_query($cn, "SET NAMES 'utf8'");
//$result_count_email = mysqli_query($cn, $sql_count_email);
//$row_count_email = $result_count_email->fetch_assoc();

//if($row_count_email['total'] < 1){


		
		
	//database add
	$sql = "insert into polytech (nom,prenom,specialite,formation,diplome,ecole,mobile,email,question,pays,ip) values('".$nom."','".$prenom."','".$specialite."','".$formation."','".$diplome."','".$ecole."','".$mobile."','".$email."','".$question."','".$pays."','".$_SERVER['SERVER_ADDR']."')";
	mysqli_query($cn, "SET NAMES 'utf8'");
	mysqli_query($cn, $sql);
	
echo "<script>document.location.href='index.php?status=1';</script>";



//}else{
	//echo "0";
//}





?>