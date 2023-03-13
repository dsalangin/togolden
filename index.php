<?php
require_once('src/functions.php');

$isAuth = isAuth();
$companies = getCompanies();

$pageContent = getTemplate('templates/main.php', [
  'companies' => $companies,
  'isAuth' => $isAuth,
]);
$layoutContent = getTemplate('templates/layout.php', [
  'title' => 'Главная', 
  'content' => $pageContent,
  'isAuth' => $isAuth,
  'script' => false,
]);

print($layoutContent);