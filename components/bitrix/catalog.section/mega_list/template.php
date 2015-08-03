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
$this->setFrameMode(true);
?>

<div class="catalog-section">
<?if($arParams["DISPLAY_TOP_PAGER"]):?>
	<p><?=$arResult["NAV_STRING"]?></p>
<?endif?>
<table class="data-table" cellspacing="0" cellpadding="0" border="0" width="100%">

<?/*Øàïêà*/?>
	<thead style="border:2px ">
	<tr>
		<td><?=GetMessage("CATALOG_TITLE")?></td>
		<?/*if(count($arResult["ITEMS"]) > 0):
			foreach($arResult["ITEMS"][0]["DISPLAY_PROPERTIES"] as $arProperty):?>
				<td><?=$arProperty["NAME"]?></td>
			<?endforeach;
		endif;*/?>
		<?/*Öåíà*/?>
		<?foreach($arResult["PRICES"] as $code=>$arPrice):?>
			<td><p>Öåíà</p></td>
		<?endforeach?>
		
		<?/*Êîëè÷åñòâî*/?>
		
			<td>&nbsp;</td>
		

		<?/*Çàêàç*/?>
		<?if(count($arResult["PRICES"]) > 0):?>
			<td>&nbsp;</td>
		<?endif?>
	</tr>
	</thead>

<?/*Òåëî*/?>


	<?foreach($arResult["ITEMS"] as $arElement):?>
	<?// echo "<pre>";  print_r($arElement); echo "</pre>"; ?>
	<?
	$this->AddEditAction($arElement['ID'], $arElement['EDIT_LINK'], CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arElement['ID'], $arElement['DELETE_LINK'], CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BCS_ELEMENT_DELETE_CONFIRM')));
	?>
	<tr id="<?=$this->GetEditAreaId($arElement['ID']);?>">
		<td>
			<a href="<?=$arElement["DETAIL_PAGE_URL"]?>">
			<?=$arElement["NAME"]?>

				

			</a>
			<?if(count($arElement["SECTION"]["PATH"])>0):?>
				<br />

				<?/*Íàèìåíîâàíèå*/?>
				<?foreach($arElement["SECTION"]["PATH"] as $arPath):?>
					/ <a href="<?=$arPath["SECTION_PAGE_URL"]?>"><?=$arPath["NAME"]?></a>
				<?endforeach?>
			<?endif?>
		</td>
		<?/*
		<?foreach($arElement["DISPLAY_PROPERTIES"] as $pid=>$arProperty):?>
		<td>
			<?if(is_array($arProperty["DISPLAY_VALUE"]))
				echo implode("&nbsp;/&nbsp;", $arProperty["DISPLAY_VALUE"]);
			elseif($arProperty["DISPLAY_VALUE"] === false)
				echo "&nbsp;";
			else
				echo $arProperty["DISPLAY_VALUE"];?>
		</td>
		<?endforeach?>
		*/?>

		<?/*Öåíà*/?>
		<?foreach($arResult["PRICES"] as $code=>$arPrice):?>
		<td>
			<?if($arPrice = $arElement["PRICES"][$code]):?>
				<?if($arPrice["DISCOUNT_VALUE"] < $arPrice["VALUE"]):?>
					<s><?=$arPrice["PRINT_VALUE"]?></s><br /><span class="catalog-price"><?=$arPrice["PRINT_DISCOUNT_VALUE"]?></span>
				<?else:?>
					<span class="catalog-price"><?=$arPrice["PRINT_VALUE"]?></span>
				<?endif?>
			<?else:?>
				&nbsp;
			<?endif;?>
		</td>

		<?/*Êîëè÷åñòâî*/?>
		<td>
		<?if($arElement['CATALOG_QUANTITY'] < 1):?>
                    <span class="catalog-price"><?=$arPrice["PRINT_VALUE"]?></span>
                <?endif;?>
		
		</td>

		<?/*Çàêàç*/?>
		<?endforeach;?>
		<?if(count($arResult["PRICES"]) > 0):?>
		<td>
			<?if($arElement["CAN_BUY"]):?>
				<noindex>
				<a href="<?echo $arElement["ADD_URL"]?>" rel="nofollow"><?echo GetMessage("CATALOG_ADD")?></a>
				</noindex>
			<?elseif((count($arResult["PRICES"]) > 0) || is_array($arElement["PRICE_MATRIX"])):?>
				<?=GetMessage("CATALOG_NOT_AVAILABLE")?>
				<?$APPLICATION->IncludeComponent("bitrix:sale.notice.product", ".default", array(
							"NOTIFY_ID" => $arElement['ID'],
							"NOTIFY_URL" => htmlspecialcharsback($arElement["SUBSCRIBE_URL"]),
							"NOTIFY_USE_CAPTHA" => "N"
							),
							$component
						);?>
			<?endif?>&nbsp;
		</td>
		<?endif;?>
	</tr>
	<?endforeach;?>
</table>
<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<p><?=$arResult["NAV_STRING"]?></p>
<?endif?>
</div>
