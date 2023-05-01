<?php
// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $date_depart = $_POST["datedépart"];
    $date_arrivee = $_POST["datearrivée"];
    $cin = $_POST["CIN"];
    $type_carte = $_POST["Type"];

    // Valider les données
    $errors = array();
    if (empty($date_depart)) {
        $errors[] = "Veuillez entrer une date de départ.";
    }
    if (empty($date_arrivee)) {
        $errors[] = "Veuillez entrer une date d'arrivée.";
    }
    if (empty($cin)) {
        $errors[] = "Veuillez entrer un CIN.";
    }
    if (empty($type_carte)) {
        $errors[] = "Veuillez sélectionner un type de carte.";
    }

    // Si des erreurs sont présentes, les afficher
    if (!empty($errors)) {
        echo "<ul>";
        foreach ($errors as $error) {
            echo "<li>$error</li>";
        }
        echo "</ul>";
    } else {
        // Enregistrer les données dans la base de données
        $servername = "localhost";
        $username = "username";
        $password = "password";
        $dbname = "agenceimmobilière";

        // Créer une connexion à la base de données
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Vérifier si la connexion a réussi
        if ($conn->connect_error) {
            die("La connexion à la base de données a échoué : " . $conn->connect_error);
        }

        // Préparer la requête SQL pour insérer les données dans la table "reservations"
        $sql = "INSERT INTO reservations (date_depart, date_arrivee, cin, type_carte) VALUES ('$date_depart', '$date_arrivee', '$cin', '$type_carte')";

        // Exécuter la requête SQL
         if ($conn->query($sql) === TRUE) {
            echo "La réservation a été enregistrée avec succès.";
        } else {
            echo "Erreur lors de l'enregistrement de la réservation : " . $conn->error;
        }

        // Fermer la connexion à la base de données
        $conn->close();
    }
}
?>