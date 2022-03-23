<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Контакты");
?><?$APPLICATION->IncludeComponent(
	"bitrix:main.feedback",
	"feedback",
	Array(
		"COMPONENT_TEMPLATE" => "feedback",
		"EMAIL_TO" => "roman.popoff1994@yandex.ru",
		"EVENT_MESSAGE_ID" => array(),
		"OK_TEXT" => "Спасибо, ваше сообщение принято.",
		"REQUIRED_FIELDS" => array(0=>"EMAIL",1=>"MESSAGE",),
		"USE_CAPTCHA" => "Y"
	)
);?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>