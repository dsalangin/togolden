<?php
require_once('src/functions.php');
require_once('src/const.php');

$isAuth = isAuth();

if (isset($_GET['companyId'])) {
	$companyId = $_GET['companyId'];

	$currentCompany = getCompany($companyId);
	$comments = getComments($companyId);

}

$pageContent = getTemplate('templates/company.php', [
	'comments' => $comments,
  'company' => $currentCompany,
  'isAuth' => $isAuth,
  'fields' => $fields,
]);
$layoutContent = getTemplate('templates/layout.php', [
  'title' => $currentCompany['name'], 
  'content' => $pageContent,
  'isAuth' => $isAuth,
	'script' => true,
]);

print($layoutContent);