<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);?>

<div class="col-lg-5 col-xs-12 hidden-print">
	<form action="<?=$arResult["FORM_ACTION"]?>">
		<div class="input-group-search">
			<input type="text" class="form-control" name="q" value="" size="15" maxlength="50" placeholder="Поиск...">
			<button class="btn btn-link" type="button"><i class="fa fa-search"></i></button>
		</div>
	</form>
</div>