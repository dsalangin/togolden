<?php
require_once('sql-prepare.php');

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
  
  $sql = 'SELECT `password`, `name`, `email` FROM `users` WHERE `email` = ?';
  $query = $pdo->prepare($sql);
  $query -> execute([$email]);
  $row = $query -> fetch();

  return [
    'password' => $row['password'],
    'email' => $row['email'],
    'name' => $row['name'],
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
  // require_once('connect-db.php');
  $dsn = 'mysql:host=togolden;port=3306;dbname=togolden';
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
//   print('<pre>');
// var_dump($result);
// print('</pre>');
}



// print('<pre>');
// var_dump($row);
// print('</pre>');


// `comments.text`, `comments.create_at`, `comments.user_id`


// SELECT o.OrderID, o.OrderDate, c.CustomerName
// FROM Customers AS c, Orders AS o
// WHERE c.CustomerName="Around the Horn" AND c.CustomerID=o.CustomerID;

// $con = mysqli_connect('togolden', 'root', '', 'togolden');
// mysqli_set_charset($con, 'utf-8');

// if(!$con) {
//   $error = mysqli_connect_error();
//   print($error);
//   print('error conection');
// }

// var_dump($con);
// // $sql = 'SELECT `name` `email` `password` FROM users WHERE `email`="' . $email . '"';
// $sql = "SELECT * FROM users WHERE `email` =" . $email . '"';

// $result = mysqli_query($con, $sql);

// if(!$result) {  
//   $error = mysqli_error($con);
//   // print($error);
//   print('the end');
// }

// var_dump($result);





// function searchUserByEmail($email) {
  
  //   mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
//   $mysqli = new mysqli('togolden', 'root', '', 'togolden');
//   $stmt = $mysqli->prepare("SELECT `name` `email` `password` FROM users WHERE email IN (?)");
//   $stmt->bind_param("s", $email);
//   $stmt->execute();
//   $stmt->store_result();
//   printf("найдено строк: %d.\n", $stmt->num_rows());
//   // var_dump($row);
//   die();

//   $con = mysqli_connect('togolden', 'root', '', 'togolden');
//   // $con = mysqli_connect($db['host'], $db['user'], $db['password'], $db['database']);
//   mysqli_set_charset($con, 'utf-8');

//   if(!$con) {
//     $error = mysqli_connect_error();
//     print($error);
//   }

//   $sql = "SELECT `name` `email` `password` FROM users WHERE email=?";
//   // $stmt = db_get_prepare_stmt($con, $sql, [$email]);
//   $stmt = mysqli_prepare($con, $sql);
//   mysqli_stmt_bind_param($stmt, 's', $email);
//   $result = mysqli_stmt_execute($stmt);

//   if(!$result) {  
//     $result = mysqli_error($con);
//     return ($error);
//   }

//   return $result;
// };


// function dbConnect() {
//   $con = mysqli_connect('togolden', 'root', '', 'togolden');
//   // $con = mysqli_connect($db['host'], $db['user'], $db['password'], $db['database']);
//   mysqli_set_charset($con, 'utf-8');

//   $result = $con;

//   if(!$con) {
//     $result = mysqli_connect_error();
//     return $result;
//   }

//   return $result;
// }
