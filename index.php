<?php
require_once('src/functions.php');
require_once('src/mock.php');

$isAuth = isAuth();

$pageContent = getTemplate('templates/main.php', [
  'companies' => $companies,
  'isAuth' => $isAuth,
]);
$layoutContent = getTemplate('templates/layout.php', [
  'title' => 'Главная', 
  'content' => $pageContent,
  'isAuth' => $isAuth,
]);

print($layoutContent);