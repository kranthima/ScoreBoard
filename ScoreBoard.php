<?php session_start(); /* Starts the session */

?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Score Board</title>
</head>
<body>
<link href="style.css" rel="stylesheet">
<script type="text/javascript" src="https://ajax.microsoft.com/ajax/jQuery/jquery-1.4.2.min.js"></script>
<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
<script src="Checker.js"></script>
<div id="Frame0">
  <h1>Score Board</h1>
</div>
<br>
<table width="400" border="0" align="center" cellpadding="5" cellspacing="1" class="Table">
    <tr>
      <td align="right" valign="top"></td>
      <td align="center" valign="top">Team Name</td>
      <td align="center" valign="top">Team Score</td>
      <td align="right" valign="top"></td>
    </tr>
    <tr>
      <td align="center" valign="top">Team 1</td>
      <td><input name="Team1Name" id="Team1Name_input" type="text" class="Input"></td>
      <td><input name="Team1Score" id="Team1Score_input" type="text" class="numbersOnly" ></td>
      <td><input name="remove1Score" id="remove1Score" value="Clear Team 1 Score" type="button" ></td>
    </tr>
    <tr>
      <td align="center">Team 2</td>
      <td><input name="Team2Name" id="Team2Name_input" type="text" class="Input"></td>
      <td><input name="Team2Score" id="Team2Score_input"  type="text" class="numbersOnly" ></td>
      <td><input name="remove2Score" id="remove2Score" value="Clear Team 2 Score" type="button" ></td>
    </tr>
  </table>
<div id="div" align="center">
    <input name="Submit" type="button" id="Submit" value="Submit" disabled="disabled" class="Button3">
</div>
<br>
<div id="success" align="center"></div>
</body>
</html>
