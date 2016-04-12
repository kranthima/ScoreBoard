<?php

$team1Name = $_POST['team1Name'];
$team1Score = $_POST['team1Score'];
$team2Name = $_POST['team2Name'];
$team2Score = $_POST['team2Score'];

$response = array();
if ($team1Score == $team2Score) {
	$response[0] = "$team1Name and $team2Name";
	$response[1] = $team2Score;
} else if ($team1Score > $team2Score) {
	$response[0] = "$team1Name";
	$response[1] = $team1Score;
} else  {
	$response[0] = "$team2Name";
	$response[1] = $team2Score;
}
echo json_encode(array("Winner" => $response[0],"Score" => $response[1]));
?>

