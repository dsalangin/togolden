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
  $response = $query -> execute([$text, $field_id, $company_id, $user_id]);
  
  $data = [
    'status' =>  $response ? 'ok' : 'error',
    'comment' => [
      'text' => $text,
      'fieldId' => $field_id,
      'companyId' => $company_id,
      'userName' => $_SESSION['user']['name'],
      'createAt' => date("Y-m-d H:i:s")
    ]
  ];
  header('Content-Type: application/json; charset=utf-8');
  echo json_encode($data);
}
