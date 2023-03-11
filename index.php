<?php
require_once('src/function.php');
require_once('src/mock.php');

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