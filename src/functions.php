<?php

function getTemplate($path, $data) {
  if (!file_exists($path)) {
      return 'Ошибка же';
  }

  extract($data);
  ob_start();
  include $path;

  return ob_get_clean();
};

function searchUserByEmail($email, $users) {
  foreach($users as $user) {
    if($user['email'] == $email) {
      return $user;
    }
  }
};

function isAuth() {
  session_start();
  if(isset($_SESSION['user'])) {
    return true;
  } else {
    return false;
  }
}