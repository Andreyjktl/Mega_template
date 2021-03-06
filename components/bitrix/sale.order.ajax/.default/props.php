<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
function PrintPropsForm($arSource=Array()) {
    if (!empty($arSource)) {
        foreach($arSource as $arPropertiesKey => $arProperties) {?>
            <div class="label">
                <label for="<?=$arProperties["FIELD_NAME"]?>"><?=$arProperties["NAME"] ?>: <?if($arProperties["REQUIED_FORMATED"]=="Y"){?><span class="sof-req">*</span><?}?></label>
            </div>
            
            <div class="field">
            <?
            if($arProperties["TYPE"] == "CHECKBOX"){
                ?>
                <input type="hidden" name="<?=$arProperties["FIELD_NAME"]?>" value="">
                <input type="checkbox" name="<?=$arProperties["FIELD_NAME"]?>" id="<?=$arProperties["FIELD_NAME"]?>" value="Y"<?if ($arProperties["CHECKED"]=="Y") echo " checked";?>>
                <?
            }elseif($arProperties["TYPE"] == "TEXT"){
                ?>
                <input class="text1" type="text" maxlength="250" size="<?=$arProperties["SIZE1"]?>" value="<?=$arProperties["VALUE"]?>" name="<?=$arProperties["FIELD_NAME"]?>" id="<?=$arProperties["FIELD_NAME"]?>">
                <?
            }elseif($arProperties["TYPE"] == "SELECT"){
                ?>
                <select class="full" name="<?=$arProperties["FIELD_NAME"]?>" id="<?=$arProperties["FIELD_NAME"]?>" size="<?=$arProperties["SIZE1"]?>">
                <?
                foreach($arProperties["VARIANTS"] as $arVariants)
                {
                    ?>
                    <option value="<?=$arVariants["VALUE"]?>"<?if ($arVariants["SELECTED"] == "Y") echo " selected";?>><?=$arVariants["NAME"]?></option>
                    <?
                }
                ?>
                </select>
                <?
            }elseif ($arProperties["TYPE"] == "MULTISELECT"){
                ?>
                <select multiple name="<?=$arProperties["FIELD_NAME"]?>" id="<?=$arProperties["FIELD_NAME"]?>" size="<?=$arProperties["SIZE1"]?>">
                <?
                foreach($arProperties["VARIANTS"] as $arVariants)
                {
                    ?>
                    <option value="<?=$arVariants["VALUE"]?>"<?if ($arVariants["SELECTED"] == "Y") echo " selected";?>><?=$arVariants["NAME"]?></option>
                    <?
                }
                ?>
                </select>
                <?
            }elseif ($arProperties["TYPE"] == "TEXTAREA"){
                ?>
                <textarea rows="<?=$arProperties["SIZE2"]?>" cols="<?=$arProperties["SIZE1"]?>" name="<?=$arProperties["FIELD_NAME"]?>" id="<?=$arProperties["FIELD_NAME"]?>"><?=$arProperties["VALUE"]?></textarea>
                <?
            }elseif ($arProperties["TYPE"] == "LOCATION"){
                $value = 0;
                foreach ($arProperties["VARIANTS"] as $arVariant) {
                    if ($arVariant["SELECTED"] == "Y") {
                        $value = $arVariant["ID"]; 
                        break;
                    }
                }
                
                $GLOBALS["APPLICATION"]->IncludeComponent(
                    'bitrix:sale.ajax.locations', 
                    '', 
                    array(
                        "AJAX_CALL" => "N", 
                        "COUNTRY_INPUT_NAME" => "COUNTRY_".$arProperties["FIELD_NAME"],
                        "CITY_INPUT_NAME" => $arProperties["FIELD_NAME"],
                        "CITY_OUT_LOCATION" => "Y",
                        "LOCATION_VALUE" => $value,
                        "ONCITYCHANGE" => ($arProperties["IS_LOCATION"] == "Y" || $arProperties["IS_LOCATION4TAX"] == "Y") ? "submitForm()" : "",
                    ),
                    null,
                    array('HIDE_ICONS' => 'Y')
                );
            }elseif ($arProperties["TYPE"] == "RADIO"){
                
                foreach($arProperties["VARIANTS"] as $arVariants){
                    ?>
                    <label for="<?=$arProperties["FIELD_NAME"]?>_<?=$arVariants["VALUE"]?>"><input class="radio" type="radio" name="<?=$arProperties["FIELD_NAME"]?>" id="<?=$arProperties["FIELD_NAME"]?>_<?=$arVariants["VALUE"]?>" value="<?=$arVariants["VALUE"]?>"<?if($arVariants["CHECKED"] == "Y") echo " checked";?>>&nbsp;<?=$arVariants["NAME"]?> </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <?
                }
            }?>
            </div>
            
            <?
            if (strlen($arProperties["DESCRIPTION"]) > 0){
                ?><br /><small><?echo $arProperties["DESCRIPTION"] ?></small><?
            }
        }
        return true;
    }
    return false;
}
?>

<?if(!empty($arResult["ORDER_PROP"]["USER_PROFILES"])){?>
    <div class="label">
        <label><?=GetMessage("SOA_TEMPL_PROP_CHOOSE")?></label>
    </div>
    <div class="field">
        <input type="hidden" name="profile_change" id="profile_change" value="N">
        <select class="full" name="PROFILE_ID" id="ID_PROFILE_ID" onChange="SetContact(this.value)">
            <option value="0"><?=GetMessage("SOA_TEMPL_PROP_NEW_PROFILE")?></option>
            <?
            foreach($arResult["ORDER_PROP"]["USER_PROFILES"] as $arUserProfiles)
            {
                ?>
                <option value="<?= $arUserProfiles["ID"] ?>"<?if ($arUserProfiles["CHECKED"]=="Y") echo " selected";?>><?=$arUserProfiles["NAME"]?></option>
                <?
            }
            ?>
        </select>
    </div>
    <script language="javascript">
        function SetContact(profileId){
            document.getElementById("profile_change").value = "Y";
            submitForm();
        }
    </script>
<?}?>

<?
PrintPropsForm($arResult["ORDER_PROP"]["USER_PROPS_N"]);
PrintPropsForm($arResult["ORDER_PROP"]["USER_PROPS_Y"]);
?>
