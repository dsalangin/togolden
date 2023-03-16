<?php
require_once('src/functions.php');

session_start();

$currentUrl = ((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$Ref = $_SERVER['HTTP_REFERER'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$form = $_POST;

	$required = ['email', 'password'];
	$errors = [];
	foreach ($required as $field) {
    if (empty($form[$field])) {
        $errors[$field] = 'Это поле надо заполнить';
      }
  }

	$user = searchUserByEmail($form['email']);
	if (!count($errors) and !empty($user['email'])) {
		if (password_verify($form['password'], $user['password'])) {
			$_SESSION['user'] = $user;
		}
		else {
			$errors['password'] = 'incorectPassword';
		}
	}
	else {
		$errors['email'] = 'noUser';
	}

	if (count($errors)) {
		header('Location: ' . $Ref.'#'. $errors['email'] . $errors['password']);

	}
	else {
		header('Location: ' . $Ref);
		exit();
	}
}