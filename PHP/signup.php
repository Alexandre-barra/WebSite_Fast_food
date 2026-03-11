<?php 

$servername = "localhost";
$username = "root";
$password = "";
$port = 3306;
$database = "nuevefast-food";

$conn = new mysqli($servername, $username, $password, $database, $port);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  echo "<center></center>";

  $nomUtilisateur = $_POST['nomUtilisateur'];
  $MdpUtilisateur = $_POST['MdpUtilisateur'];
  $mail = $_POST['mail'];

  $query = "select * from utilisateur";
  $result = mysqli_query($conn, $query);
  $sql = "INSERT into utilisateur(nomUtilisateur,MdpUtilisateur,mail) value ('$nomUtilisateur','$MdpUtilisateur','$mail')";
  
$table = "";
  foreach ($result as $row) {
    $nomUtilisateur = $row['nomUtilisateur'];
    $MdpUtilisateur = $row['MdpUtilisateur'];
    $mail = $row['mail'];
    $table = $table."<tr><td>$nomUtilisateur</td><td>$MdpUtilisateur</td></tr><td>$mail</td></tr>";

  }

  if ($conn->query($sql)===true) {
    echo "";
}else {
    echo "erreur".$conn->error;
}

include "Bienvenue.html";

?>
