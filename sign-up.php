<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$form = $_POST;

  $name = $form['name'];
  $email = $form['email'];
  $password = password_hash($form['password'], PASSWORD_DEFAULT);

  require_once('src/connect-db.php');
  
  $sql = 'INSERT INTO users (`create_at`, `name`, `email`, `password`) VALUES(NOW(),?, ?, ?)';
  $query = $pdo->prepare($sql);
  $response = $query -> execute([$name, $email, $password]);
  $error = $response ? '' : '#userExists';
}

header('Location: /'.$error);