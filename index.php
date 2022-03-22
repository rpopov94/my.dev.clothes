<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetTitle('Главная');
?> 

<?$APPLICATION->IncludeFile(
	SITE_DIR."include/mainpage.php",
	array(),
	array(
		"MODE" => "html",
    )
);?>

<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>