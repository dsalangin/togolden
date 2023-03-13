<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$form = $_POST;

  require_once('src/connect-db.php');
  
  $sql = 'INSERT INTO companies (`create_at`, `name`, `inn`, `info`, `ceo`, `address`, `phone_number`) VALUES(NOW(),?, ?, ?, ?, ?, ?)';
  $query = $pdo->prepare($sql);
  $query -> execute([
    $form['name'],
    $form['inn'],
    $form['info'],
    $form['ceo'],
    $form['address'],
    $form['phone_number']
  ]);
}

header('Location: /');