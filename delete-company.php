<?php

if (isset($_GET['companyId'])) {
	$companyId = $_GET['companyId'];

  require_once('src/connect-db.php');
  
  $sql = 'DELETE FROM `companies` WHERE `id` = ?';
  $query = $pdo->prepare($sql);
  $query -> execute([$companyId]);

  $sql = 'DELETE FROM `comments` WHERE `company_id` = ?';
  $query = $pdo->prepare($sql);
  $query -> execute([$companyId]);
}

header('Location: /');