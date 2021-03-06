<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();

$bIsMainPage = $APPLICATION->GetCurPage(false) == SITE_DIR;

?>
<!DOCTYPE html>
<!--[if lt IE 8]>  <html class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if IE 8]>     <html class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]>  <html class="no-js"><![endif]-->
<head>

    <!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?$APPLICATION->ShowTitle();?></title>
    <?$APPLICATION->ShowHead();?>

	<?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/common-styles.css");?>
    <link rel="icon" href="<?=SITE_TEMPLATE_PATH?>/ico/favicon_bx.png">


    <script src="<?=CUtil::GetAdditionalFileURL(SITE_TEMPLATE_PATH.'/js/vendor/modernizr-html5shiv-respond.min.js');?>"></script>

    <!--[if gte IE 9]><!-->
	<script src="<?=CUtil::GetAdditionalFileURL(SITE_TEMPLATE_PATH.'/js/vendor/modernizr.min.js');?>"></script>
    <!--<![endif]-->
</head>
<body>
	<?$APPLICATION->ShowPanel();?>
    <!--[if lt IE 8]>
    <p class="chromeframe">Вы используете <strong>устаревший </strong> браузер. Пожалуйста <a
            href="http://browsehappy.com/">
        обновите свой браузер</a> или <a href="http://www.google.com/chromeframe/?redirect=true">установите Google Chrome
        Frame</a> чтобы улучшить взаимодействие с сайтом.</p>
    <![endif]-->

    <div class="sticky-wrap">
        <header>
            <div class="header-main">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-xs-12">
							<?if($bIsMainPage):?>
								<span class="logo">
							<?else:?>
                            	<a class="logo" href="/">
							<?endif;?>
									<div class="image">Intervolga.ru</div>
									<div id="slogan-rand" class="slogan">
                                    <noscript>Сайты и реклама в интернете</noscript>
                                </div>
							<?if($bIsMainPage):?>
								</span>
							<?else:?>
                            	</a>
							<?endif;?>
                        </div>
                        <div class="col-sm-6 col-xs-12">
                            <div class="row">
                                <div class="col-lg-7 col-xs-12 hidden-xs">
                                    <ul class="btn-list-inline">
										<?$APPLICATION->IncludeFile(
											SITE_DIR."include/slogan.php",
											array(),
											array(
												"MODE" => "text"
											)
										);?>
                                    </ul>
                                </div>
                                <?$APPLICATION->IncludeComponent(
									"bitrix:search.form",
									"search",
									Array(
										"COMPONENT_TEMPLATE" => ".default",
										"PAGE" => "#SITE_DIR#search/",
										"USE_SUGGEST" => "N"
									)
								);?>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <ul class="phone-list">
								<?$APPLICATION->IncludeFile(
									SITE_DIR."include/phones.php",
									array(),
									array(
										"MODE" => "html",
									)
								);?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </header>
		<?$APPLICATION->IncludeComponent(
		"bitrix:menu",
		"menu",
		Array(
			"ALLOW_MULTI_SELECT" => "N",
			"CHILD_MENU_TYPE" => "left",
			"COMPONENT_TEMPLATE" => ".default",
			"DELAY" => "N",
			"MAX_LEVEL" => "1",
			"MENU_CACHE_GET_VARS" => "",
			"MENU_CACHE_TIME" => "3600",
			"MENU_CACHE_TYPE" => "N",
			"MENU_CACHE_USE_GROUPS" => "Y",
			"ROOT_MENU_TYPE" => "top",
			"USE_EXT" => "N"
		)
		);?>
		<?if($bIsMainPage):?>
			<?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"index", 
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "Y",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "N",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "N",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_DATE" => "N",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(
			0 => "NAME",
			1 => "PREVIEW_TEXT",
			2 => "PREVIEW_PICTURE",
			3 => "",
		),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "1",
		"IBLOCK_TYPE" => "index",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "N",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "50",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(
			0 => "url",
			1 => "",
		),
		"SET_BROWSER_TITLE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_STATUS_404" => "Y",
		"SET_TITLE" => "N",
		"SHOW_404" => "Y",
		"SORT_BY1" => "SORT",
		"SORT_BY2" => "TIMESTAMP_X",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "DESC",
		"STRICT_SECTION_CHECK" => "N",
		"COMPONENT_TEMPLATE" => "index",
		"FILE_404" => ""
	),
	false
);?>
			
		<div class="activities-description-wrap">
			<div class="activities-description">
				<div class="container">
					<div class="activities-inner">
						<h3>Последние посещенные вами страницы</h3>
						<ul>
							<li><a href="#">Мы стали использовать новую ткань</a></li>
							<li><a href="#">Главная страница</a></li>
							<li><a href="#">Контакты</a></li>
						</ul>
					</div>
				</div>
			</div>
    	</div>

		
		<?endif;?>
		<?if (ERROR_404=='Y'):?>
			<div class="page-not-found">
		<?else:?>
        <div class="container">
			<?if(!$bIsMainPage):?>
				<?$APPLICATION->IncludeComponent(
					"bitrix:breadcrumb",
					"breadcrumb1",
					Array()
				);?>
			<?endif;?>
            <h1><?$APPLICATION->ShowTitle(false);?></h1>
        </div>
		<?endif;?>
        <div class="container">
            <hr/>
	
						