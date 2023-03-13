<?php

if (isset($_GET['companyId'])) {
	$companyId = $_GET['companyId'];

  require_once('src/connect-db.php');
  
  $sql = 'DELETE FROM `companies` WHERE `id` = ?';
  $query = $pdo->prepare($sql);
  $query -> execute([$companyId]);
}

header('Location: /');