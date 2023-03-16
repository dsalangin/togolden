<?php

function getTemplate($path, $data) {
  if (!file_exists($path)) {
      return 'Error';
  }

  extract($data);
  ob_start();
  include $path;
  
  return ob_get_clean();
};


function isAuth() {
  session_start();
  if(isset($_SESSION['user'])) {
    return true;
  } else {
    return false;
  }
};


function searchUserByEmail($email) {
  require_once('connect-db.php');
  
  $sql = 'SELECT `password`, `name`, `email`, `id` FROM `users` WHERE `email` = ?';
  $query = $pdo->prepare($sql);
  $query -> execute([$email]);
  $row = $query -> fetch();

  return [
    'password' => $row['password'],
    'email' => $row['email'],
    'name' => $row['name'],
    'id' => $row['id'],
  ];
};


function getCompany($companyId) {
  require_once('connect-db.php');

  $sql = 'SELECT * FROM `companies` WHERE `id` = ?';
  $query = $pdo->prepare($sql);
  $query -> execute([$companyId]);

  $result = $query->fetch(PDO::FETCH_ASSOC);

  return $result;
}


function getCompanies() {
  require_once('connect-db.php');

  $sql = 'SELECT * FROM `companies`';
  $query = $pdo->prepare($sql);
  $query -> execute();

  $result = [];

  while($row = $query->fetch(PDO::FETCH_ASSOC)){
    array_push($result, $row);
  }
  return $result;
};

function getComments($companyId) {
  $dsn = 'mysql:host=localhost;port=3306;dbname=togolden';
  $pdo = new PDO($dsn, 'root', '');

  $sql = 'SELECT users.name user_name, comments.text, comments.create_at, fields.name field_name FROM `comments`
    JOIN `companies` ON comments.company_id = companies.id
    JOIN `fields` ON comments.field_id = fields.id
    JOIN `users` ON comments.user_id = users.id 
    WHERE `company_id` = ?';

  $query = $pdo->prepare($sql);
  $query -> execute([$companyId]);

  $response = [];

  while($row = $query->fetch(PDO::FETCH_ASSOC)){
    array_push($response, $row);
  }

  $result = [];

  foreach($response as $comment) {
    array_push($result, [
      'field' => $comment['field_name'],
      'user' => $comment['user_name'],
      'date' => $comment['create_at'],
      'text' => $comment['text'],
    ]);
  }

  return $result;
}
