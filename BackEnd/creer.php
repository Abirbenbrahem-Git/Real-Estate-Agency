<?php
include 'projetweb.php';
$postdata = file_get_contents("php://input");
if(isset($postdata) && !empty($postdata))
{
	$request = json_decode($postdata,true);
	// Validate.
	if(trim($request['nom']) === '' || trim($request['description']) === '' || trim($request['adresse']) === '' || (int)$request['prix'] < 0)
	{
		return http_response_code(400);
	}
	$nom = mysqli_real_escape_string($db, trim($request['nom']));
    $description = mysqli_real_escape_string($db, trim($request['description']));
    $adresse = mysqli_real_escape_string($db, trim($request['adresse']));
	$prix = mysqli_real_escape_string($db, (int)$request['prix']);
	$sql = "INSERT INTO immobiliers (id,nom,description,adresse,prix) VALUES (null,'$nom','$description','$adresse',$prix)";
	if($db->query($sql))
	{
		http_response_code(201);
		$immobilier = [
		'id' => mysqli_insert_id($db),'nom' => $nom,'description' => $descript,'adresse' => $adresse,
		'prix' => $prix];
		echo json_encode($immobilier);
	}
	else
	{
		http_response_code(422);
	}
}
?>