<?IncludeTemplateLangFile(__FILE__);?>
				<?if (CSite::InDir(SITE_DIR.'index.php')) {?>
				<!-- News -->
				<div class="block shadow full crop-bottom">
				  <div class="events">
					<div class="news">
					<?$APPLICATION->IncludeComponent("bitrix:news.list", "news_list", array(
						"IBLOCK_TYPE" => "content",
						"IBLOCK_ID" => "2",
						"NEWS_COUNT" => "5",
						"SORT_BY1" => "ACTIVE_FROM",
						"SORT_ORDER1" => "DESC",
						"SORT_BY2" => "SORT",
						"SORT_ORDER2" => "ASC",
						"FILTER_NAME" => "",
						"FIELD_CODE" => array(
							0 => "",
							1 => "",
						),
						"PROPERTY_CODE" => array(
							0 => "",
							1 => "",
						),
						"CHECK_DATES" => "Y",
						"DETAIL_URL" => "",
						"AJAX_MODE" => "N",
						"AJAX_OPTION_SHADOW" => "Y",
						"AJAX_OPTION_JUMP" => "N",
						"AJAX_OPTION_STYLE" => "Y",
						"AJAX_OPTION_HISTORY" => "N",
						"CACHE_TYPE" => "A",
						"CACHE_TIME" => "36000000",
						"CACHE_FILTER" => "N",
						"CACHE_GROUPS" => "Y",
						"PREVIEW_TRUNCATE_LEN" => "",
						"ACTIVE_DATE_FORMAT" => "j F Y",
						"SET_TITLE" => "N",
						"SET_STATUS_404" => "N",
						"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
						"ADD_SECTIONS_CHAIN" => "N",
						"HIDE_LINK_WHEN_NO_DETAIL" => "Y",
						"PARENT_SECTION" => "",
						"PARENT_SECTION_CODE" => "",
						"DISPLAY_TOP_PAGER" => "N",
						"DISPLAY_BOTTOM_PAGER" => "N",
						"PAGER_TITLE" => "",
						"PAGER_SHOW_ALWAYS" => "N",
						"PAGER_TEMPLATE" => "",
						"PAGER_DESC_NUMBERING" => "N",
						"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
						"PAGER_SHOW_ALL" => "N",
						"DISPLAY_DATE" => "Y",
						"DISPLAY_NAME" => "Y",
						"DISPLAY_PICTURE" => "N",
						"DISPLAY_PREVIEW_TEXT" => "N",
						"AJAX_OPTION_ADDITIONAL" => ""
						),
						false
					);?>
					</div>

					<div class="articles">
					<?$APPLICATION->IncludeComponent("bitrix:news.list", "news_list", array(
						"IBLOCK_TYPE" => "content",
						"IBLOCK_ID" => "3",
						"NEWS_COUNT" => "5",
						"SORT_BY1" => "ACTIVE_FROM",
						"SORT_ORDER1" => "DESC",
						"SORT_BY2" => "SORT",
						"SORT_ORDER2" => "ASC",
						"FILTER_NAME" => "",
						"FIELD_CODE" => array(
							0 => "",
							1 => "",
						),
						"PROPERTY_CODE" => array(
							0 => "",
							1 => "",
						),
						"CHECK_DATES" => "Y",
						"DETAIL_URL" => "",
						"AJAX_MODE" => "N",
						"AJAX_OPTION_SHADOW" => "Y",
						"AJAX_OPTION_JUMP" => "N",
						"AJAX_OPTION_STYLE" => "Y",
						"AJAX_OPTION_HISTORY" => "N",
						"CACHE_TYPE" => "A",
						"CACHE_TIME" => "36000000",
						"CACHE_FILTER" => "N",
						"CACHE_GROUPS" => "Y",
						"PREVIEW_TRUNCATE_LEN" => "",
						"ACTIVE_DATE_FORMAT" => "j F Y",
						"SET_TITLE" => "N",
						"SET_STATUS_404" => "N",
						"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
						"ADD_SECTIONS_CHAIN" => "N",
						"HIDE_LINK_WHEN_NO_DETAIL" => "Y",
						"PARENT_SECTION" => "",
						"PARENT_SECTION_CODE" => "",
						"DISPLAY_TOP_PAGER" => "N",
						"DISPLAY_BOTTOM_PAGER" => "N",
						"PAGER_TITLE" => "",
						"PAGER_SHOW_ALWAYS" => "N",
						"PAGER_TEMPLATE" => "",
						"PAGER_DESC_NUMBERING" => "N",
						"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
						"PAGER_SHOW_ALL" => "N",
						"DISPLAY_DATE" => "Y",
						"DISPLAY_NAME" => "Y",
						"DISPLAY_PICTURE" => "N",
						"DISPLAY_PREVIEW_TEXT" => "N",
						"AJAX_OPTION_ADDITIONAL" => ""
						),
						false
					);?>
					</div>
					<div class="clear"></div>
					</div>
				</div>
				<!-- // News -->
				<?}?>
			</div>
            <!-- // Content -->
            <!-- Footer -->
            <footer>
                <!-- Bottom Block -->
                <div class="bottom-block">
					<div class="brd">

						


						<div class="td shop">
							<img src="//srv56340.ht-test.ru.images.1c-bitrix-cdn.ru/upload/medialibrary/ee4/ee41aacf87a75321c14b424bf3859480.png?142899372410555" title="Мега.онлайн" alt="Мега.онлайн" align="top" height="38" width="92">
							<h4><?=GetMessage("SHOP_NAME");?></h4>
							<?$APPLICATION->IncludeComponent('bitrix:menu', "bottom", array(
								"ROOT_MENU_TYPE" => "top",
								"MENU_CACHE_TYPE" => "Y",
								"MENU_CACHE_TIME" => "36000000",
								"MENU_CACHE_USE_GROUPS" => "Y",
								"MENU_CACHE_GET_VARS" => array(),
								"MAX_LEVEL" => "2",
								"USE_EXT" => "N",
								"ALLOW_MULTI_SELECT" => "N"
								)
							);?>
							<div class="clear"></div>
						</div>

						<div class="td infobottom">
							
						</div>

						<div class="td addr">
							<p class="phone"><?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/telephone.php"), false);?></p>
							<address>
								<?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/schedule.php"), false);?><br/><?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/time.php"), false);?><br/><br/><?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/address.php"), false);?>
							</address>
							<?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/copyright.php"), false);?>
					
						</div>

						<div class="clear"></div>
					</div>
                </div>
                <!-- // Bottom Block -->


            </footer>
            <!-- // Footer -->
        </div>
        <div class="overlay"></div>

<!-- Yandex.Metrika counter -->
<script type="text/javascript">
(function (d, w, c) {
    (w[c] = w[c] || []).push(function() {
        try {
            w.yaCounter28686586 = new Ya.Metrika({id:28686586,
                    webvisor:true,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    trackHash:true});
        } catch(e) { }
    });

    var n = d.getElementsByTagName("script")[0],
        s = d.createElement("script"),
        f = function () { n.parentNode.insertBefore(s, n); };
    s.type = "text/javascript";
    s.async = true;
    s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js";

    if (w.opera == "[object Opera]") {
        d.addEventListener("DOMContentLoaded", f, false);
    } else { f(); }
})(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="//mc.yandex.ru/watch/28686586" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
    </body>
</html>