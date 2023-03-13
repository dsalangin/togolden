<?php
// require_once('src/const.php');
// $dsn = 'mysql:host=togolden;port=3306;dbname=togolden';
// $pdo = new PDO($dsn, 'root', '');

// foreach($infoCategories as $key => $value) {
//   $sql = 'INSERT INTO categories (`name`) VALUES(?)';
//   $query = $pdo->prepare($sql);
//   $query -> execute([$key]);
// };

require_once('src/functions.php');
getComments('16');
// getCompanies();
// getCompany(11);



// $con = mysqli_connect('togolden', 'root', '', 'togolden');
// mysqli_set_charset($con, 'utf-8');
// $query='SELECT `name`, `email`, `password` FROM users WHERE email=a@a.ru';
// $result = mysqli_query($con, $query);
// $a = mysqli_fetch_all($result, MYSQLI_ASSOC);
// var_dump($a);








// $connect=new mysqli('togolden', 'root', '', 'togolden');
// 	$query='SELECT `name`, `id` FROM users WHERE email = a@a';
// 	$result=$connect->query($query);
// 	$rows=$result->num_rows;
//   var_dump($rows);
// 	if($rows) {

// 	} else {

// 	}














// $email = 'a@a.ru';

// $dsn = 'mysql:host=togolden;dbname=togolden';
// $pdo = new PDO($dsn, 'root', '');

// $sql = 'SELECT `password`, `name`, `email` FROM `users` WHERE `email` = ?';
// $query = $pdo->prepare($sql);
// $query -> execute([$email]);
// $row = $query -> fetch();
// print('<pre>');
// print_r($row);
// print('</pre>');