<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
if(!empty($arResult["DELIVERY"]))
{
    ?>
    <h4><?=GetMessage("SOA_TEMPL_DELIVERY")?></h4>
    
        <?
        foreach ($arResult["DELIVERY"] as $delivery_id => $arDelivery)
        {
            if ($delivery_id !== 0 && intval($delivery_id) <= 0)
            {
                ?>
                <div class="field">
                        <b><?=$arDelivery["TITLE"]?></b>
                        <table border="0" cellspacing="0" cellpadding="3">
                        <?
                        foreach ($arDelivery["PROFILES"] as $profile_id => $arProfile)
                        {
                            ?>
                            <tr>
                                <td width="20" nowrap="nowrap">&nbsp;</td>
                                <td width="0%" valign="top"><input class="radio" type="radio" id="ID_DELIVERY_<?=$delivery_id?>_<?=$profile_id?>" name="<?=$arProfile["FIELD_NAME"]?>" value="<?=$delivery_id.":".$profile_id;?>" <?=$arProfile["CHECKED"] == "Y" ? "checked=\"checked\"" : "";?> onClick="submitForm();" /></td>
                                <td width="50%" valign="top">
                                    <label for="ID_DELIVERY_<?=$delivery_id?>_<?=$profile_id?>">
                                        &nbsp;<b><?=$arProfile["TITLE"]?></b><?if (strlen($arProfile["DESCRIPTION"]) > 0):?><br />
                                        <?=nl2br($arProfile["DESCRIPTION"])?><?endif;?>
                                    </label>
                                </td>
                                <td width="50%" valign="top" align="right">
                                <?
                                    $APPLICATION->IncludeComponent('bitrix:sale.ajax.delivery.calculator', '', array(
                                        "NO_AJAX" => 'Y',
                                        "DELIVERY" => $delivery_id,
                                        "PROFILE" => $profile_id,
                                        "ORDER_WEIGHT" => $arResult["ORDER_WEIGHT"],
                                        "ORDER_PRICE" => $arResult["ORDER_PRICE"],
                                        "LOCATION_TO" => $arResult["USER_VALS"]["DELIVERY_LOCATION"],
                                        "LOCATION_ZIP" => $arResult["USER_VALS"]["DELIVERY_LOCATION_ZIP"],
                                        "CURRENCY" => $arResult["BASE_LANG_CURRENCY"],
                                    ));
                                ?>
                                
                                </td>
                            </tr>
                            <?
                        } // endforeach
                        ?>
                        </table>
                    </div>
                <?
            }    
            else
            {
                ?>
                <div class="field">
                    <td valign="top" width="0%">
                        <input class="radio" type="radio" id="ID_DELIVERY_ID_<?= $arDelivery["ID"] ?>" name="<?=$arDelivery["FIELD_NAME"]?>" value="<?= $arDelivery["ID"] ?>"<?if ($arDelivery["CHECKED"]=="Y") echo " checked";?> onClick="submitForm();">
                    </td>
                    <td valign="top" width="100%">
                        <label for="ID_DELIVERY_ID_<?= $arDelivery["ID"] ?>">
                        <b><?= $arDelivery["NAME"] ?></b><br />
                        <?
                        if (strlen($arDelivery["PERIOD_TEXT"])>0)
                        {
                            echo $arDelivery["PERIOD_TEXT"];
                            ?><br /><?
                        }
                        ?>
                        <?=GetMessage("SALE_DELIV_PRICE");?> <?=$arDelivery["PRICE_FORMATED"]?><br />
                        <?
                        if (strlen($arDelivery["DESCRIPTION"])>0)
                        {
                            ?>
                            <?=$arDelivery["DESCRIPTION"]?><br />
                            <?
                        }
                        ?>
                        </label>
                    </td>
                </div>
                <?
            }
        }
        ?>
    
    <br /><br />
    <?
}
?>