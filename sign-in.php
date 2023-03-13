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


	if (!count($errors) and $user = searchUserByEmail($form['email'])) {
		if (password_verify($form['password'], $user['password'])) {
			$_SESSION['user'] = $user;
		}
		else {
			$errors['password'] = 'Неверный пароль';
		}
	}
	else {
		$errors['email'] = 'Такой пользователь не найден';
	}

	if (count($errors)) {
		header('Location: ' . $Ref);

	}
	else {
		header('Location: ' . $Ref);
		exit();
	}
}