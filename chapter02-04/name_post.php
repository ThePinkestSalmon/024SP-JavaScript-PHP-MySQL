<?php

/*

Class: SP191SP-01
Your Name:
Date:

*/

$firstName = $_POST['firstname'];
$lastName = $_POST['lastname'];
echo 'Welcome to our website, ' .
  htmlspecialchars($firstName, ENT_QUOTES, 'UTF-8') . ' ' .
  htmlspecialchars($lastName, ENT_QUOTES, 'UTF-8') . '!';
?>
