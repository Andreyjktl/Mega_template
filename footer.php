<?IncludeTemplateLangFile(__FILE__);?>
				
				
			</div>
            <!-- // Content -->
            </div>

              <!-- Footer -->

            <footer>
            
				
                <!-- Bottom Block -->
                <div class="bottom-block">
					<div class="brd">

						
						<div class="td shop">
							<div class="title-bottom">О магазине</div>
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
							<div class="title-bottom">Каталоги</div>
							<a href="/tyres">Каталог шин</a><br>
							<a href="/wheels">Каталог дисков</a><br>
							<hr>
							<div class="title-bottom">Подбор шин и дисков</div>
							<a href="tyres/podbor-shin.php">Подбор шин</a><br>
							<a href="wheels/podbor-diskov.php">Подбор дисков</a><br>
							
						</div>

						<div class="td addr">
							<div class="title-bottom">Как с нами связаться: </div>
							<p class="phone"><?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/telephone.php"), false);?></p>
							<br><address>
								<p>Челябинск, пр. Комсомольский 7</p>
								<p>info@мега.онлайн</p>
								<p>Работаем с 9:00 до 19:00, пн — пт</p>

							</address>
							
						</div>

						<div class="clear"></div>
					</div>
                </div>
                <!-- // Bottom Block -->


            </footer>
            <!-- // Footer -->
        
					<div class="copyright">
					<?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/copyright.php"), false);?>
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
					</div>
					
        <div class="overlay"></div>


    </body>
</html>