<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
//print '<pre>';
//print_r($arResult);
//print '</pre>';
?>
<?if (!empty($arResult)):?>
<div class="submenu2">
<a href="<?=SITE_DIR?>wheels/podbor-diskov.php"><h4>������ ������</h4></a>
<hr>

<a href="<?=SITE_DIR?>wheels"><h4>������������� ������</h4></a>
    <div class="table">
    
<?
$cnt = count($arResult);
$in_list = ceil($cnt/3);

echo '<ul>';
$i = 0;
foreach($arResult as $arItem){
    if($i%$in_list==0&&$i!=0){
        echo '</ul><ul>';
    }

    if ($arItem["PERMISSION"] > "D"){
            echo '<li><a href="'.$arItem["LINK"].'">'.($arItem["SELECTED"]?'<strong>':'').'<nobr>'.$arItem["TEXT"].'</nobr>'.($arItem["SELECTED"]?'</strong>':'').'</a></li>';
    }
    $i++;
}
echo '</ul>';
?>
        <div class="clear"></div>
</div>
</div>

<?endif?>