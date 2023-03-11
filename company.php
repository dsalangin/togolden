<?php
require_once('src/functions.php');
require_once('src/mock.php');

$isAuth = isAuth();

if (isset($_GET['companyId'])) {
	$companyId = $_GET['companyId'];

	foreach ($companies as $company) {
		if ($company['id'] == $companyId) {
			$currentCompany = $company;
			break;
		}
	}
}

$pageContent = getTemplate('templates/company.php', [
  'company' => $currentCompany,
  'isAuth' => $isAuth,
  'infoCategories' => $infoCategories,
]);
$layoutContent = getTemplate('templates/layout.php', [
  'title' => $currentCompany['name'], 
  'content' => $pageContent,
  'isAuth' => $isAuth,
]);

print($layoutContent);