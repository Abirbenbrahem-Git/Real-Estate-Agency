<?php
require 'projetweb.php';
$idimmobilier = ($_GET['idimmobilier'] !== null && (int)$_GET['idimmobilier'] > 0)? mysqli_real_escape_string($db, (int)$_GET['idimmobilier']) : false;
if(!$idimmobilier)
{
	return http_response_code(400);
}

$sql = "DELETE FROM immobiliers WHERE idimmobilier =$idimmobilier";
if($db->query($sql))
{
	http_response_code(204);
}
else
{
	return http_response_code(422);
}
?>