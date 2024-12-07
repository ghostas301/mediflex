<?php
require_once('conn.php');
extract($_POST);
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$ville = $_POST['ville'];
$profile = $_POST['profile'];
$uploadDir = '../cv/';
$randomNumber = rand(100000, 999999);
$target_file = $uploadDir.$randomNumber.basename($_FILES["file"]["name"]);
$location_file = "/cv/".$randomNumber.basename($_FILES["file"]["name"]);
$fileType = pathinfo($target_file,PATHINFO_EXTENSION);

if($fileType != "pdf") {
    echo "Seul les fichiers PDF sont acceptés!";
    exit();
}

if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
    
    $sql = "INSERT INTO professionnel (nom,email,phone,ville,profile,cv) VALUES ('{$name}','{$email}','{$phone}','{$ville}','{$profile}','{$location_file}')";
    if ($conn->query($sql) === TRUE) {
    	echo "Vos données sont envoyées avec succès!";
    }else{
    	echo "Une erreur est suevenue, veuillez reessayer plutard!". $conn->error;
    }
    

}else{
	echo "Une erreur est suevenue, veuillez reessayer plutard!!";
}
$conn->close();
?>