<?php
require 'projetweb.php';
$postdata = file_get_contents('php://input');

if(isset($postdata) && !empty($postdata))
{
	$request = json_decode($postdata,true);
	if (trim($request['nomimmobilier']) === '' || trim($request['description']) === ''|| (int)$request['prix'] < 0 ||  trim($request['cin']) === '' ) {
		return http_response_code(400);
	}
	$nomimmobilier = mysqli_real_escape_string($db, trim($request['nomimmobilier']));
    $description = mysqli_real_escape_string($db, trim($request['description']));
    $cin = mysqli_real_escape_string($db, trim($request['cin']));
	$prix = mysqli_real_escape_string($db, (int)$request['prix']);
	$sql = "UPDATE immobiliers SET nomimmobilier='$nomimmobilier',description='$description',prix=$prix , cin=$cin WHERE idimmobilier = $idimmobilier";

	if($db->query($sql))
	{
		http_response_code(204);
	}
	else
	{
		return http_response_code(422);
	}
}
?>