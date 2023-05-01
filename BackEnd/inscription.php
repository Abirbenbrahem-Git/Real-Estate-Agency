<?php

header("Access-Control-Allow-Origin: *");
header('Access-Control-Allow-Credentials: true');
header("Access-Control-Allow-Methods: PUT, GET, POST, DELETE");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
header("Content-Type: application/json; charset=UTF-8");

if (isset($_POST['register'])) {

    // récupérer les données du formulaire
    $cin = $_POST['CIN'];
    $nom = $_POST['Nom'];
    $prenom = $_POST['Prénom'];
    $email = $_POST['E-mail'];
    $password = $_POST['password'];
    $agent = $_POST['agent'];

    // Détermination de la table de destination
    $table = '';
    if($agent == 'Client'){
        $table = 'client';
    } elseif($agent == 'propriétaire'){
        $table = 'propriétaire';
    }
    
    // connexion à la base de données
    $conn = mysqli_connect("localhost", "root", "1234", "immodb");
    
    // vérifier la connexion
    if (!$conn) {
        die("Connexion échouée: " . mysqli_connect_error());
    }
    
    // requête SQL pour insérer les données dans la table
    $sql = "INSERT INTO $table (cin, nom, prenom, email, password) VALUES ('$cin', '$nom', '$prenom', '$email', '$password')";
    
    if (mysqli_query($conn, $sql)) {
        echo "Enregistrement réussi.";
    } else {
        echo "Erreur: " . $sql . "<br>" . mysqli_error($conn);
    }
    
    // fermer la connexion
    mysqli_close($conn);

    // Redirection vers une page d'authentification
    header("Location: authentification.php");
    exit();
}
?>