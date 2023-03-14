<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  session_start();
  $form = $_POST ?: json_decode(file_get_contents("php://input"), true);

  $text = $form['comment'];
  $field_id = $form['fieldId'];
  $company_id = $form['companyId'];
  $user_id = $_SESSION['user']['id'];

  require_once('src/connect-db.php');
  
  $sql = 'INSERT INTO comments (`text`, `field_id`, `company_id`, `user_id`) VALUES(?, ?, ?, ?)';
  $query = $pdo->prepare($sql);
  $query -> execute([$text, $field_id, $company_id, $user_id]);
}


//htmlspecialchars(); экранизация символов
//'$id' = (is_numeric('$id')) ? '$id' : ''; для гет
//

  //composer -package manager
  //guzzle шлёт запрос на сервер вебсокета
  //curl
  //htmlspecialchars