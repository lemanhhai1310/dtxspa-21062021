<footer id="footer" class="footer uk-light">
    <div class="uk-section-xsmall footer__top">

    </div>
    <div class="uk-section-xsmall footer__bottom">
        <div class="uk-container">
            <div class="uk-child-width-auto uk-flex-middle uk-flex-center uk-grid-10 uk-grid-40-m" uk-grid>
                <div>
                    <span class="footer__bottom__txt">@ Copyright 2021 - DTX SPA - NHA TRANG</span>
                </div>
                <div>
                    <div class="uk-child-width-auto uk-flex-middle" uk-grid>
                        <div>
                            <!--Code social-->
                            <div class="uk-child-width-auto uk-grid-5" uk-grid>
                                <?php
                                $data = array('facebook','youtube','tiktok','instagram','google','tripadvisor');
                                foreach ($data as $k => $v): ?>
                                <div>
                                    <a href="" uk-icon="icon: <?= $v ?>; ratio: 0.95"></a>
                                </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        <div>
                            <!--Code language-->
                            <div class="uk-child-width-auto uk-grid-5 uk-flex-middle" uk-grid>
                                <div>
                                    <span uk-icon="icon: world; ratio: 1"></span>
                                </div>
                                <div>
                                    <div uk-form-custom="target: > * > span:first-child">
                                        <select>
                                            <option value="1">English</option>
                                            <option value="2">Vietnamese</option>
                                        </select>
                                        <span class="uk-link">
                                            <span></span>
                                            <span uk-icon="icon: chevron-down; ratio: 0.9"></span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
</section>
</body>
</html>