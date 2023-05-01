<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Credentials:true ");
header("Access-Control-Allow-Methods:PUT,GET,POST,DELETE");
header("Access-Control-Allow-HEADERS:Origin,X-Requested-with,Content-type,Accept");
header("Content-Type: application/json; charset=UTF-8");
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $cardtype = $_POST['cartecrédit'];
    $cardnumber = $_POST['NumCarte'];
    $securitycode = $_POST['CodeSec'];
// Vérification de la validité des données saisies par l'utilisateur
if(!empty($cardtype) && !empty($cardnumber) && !empty($securitycode)){
    // Connexion à la base de données (remplacer les valeurs par les vôtres)
    $host = "localhost";
    $user = "username";
    $password = "password";
    $dbname = "agenceimmobiliére";
    $conn = new mysqli($host, $user, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    // Requête SQL pour insérer les données dans la base de données
    $sql = "INSERT INTO payment (cartecrédit, NumCarte, CodeSec) VALUES ('$cardtype', '$cardnumber', '$securitycode')";
    if($conn->query($sql) === TRUE){
        echo "Paiement effectué avec succès";
    } else {
        echo "Erreur: " . $sql . "<br>" . $conn->error;
    }$conn->close();
} else {
    echo "Veuillez remplir tous les champs";
}
}
?>