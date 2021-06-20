<footer id="footer" class="footer uk-light">
    <div class="uk-section-xsmall footer__top">
        <div class="uk-container">
            <div class="uk-child-width-auto" uk-grid>
                <div class="uk-width-expand">
                    <div class="uk-text-center">
                        <img src="images/Logo.png" alt="">
                    </div>
                </div>
                <div class="uk-width-1-4@m">
                    <h3 class="uk-h3 footer__top__title">Liên hệ</h3>
                    <div class="uk-child-width-1-1 uk-grid-small" uk-grid>
                        <?php
                        $data = array(
                            array(
                                'txt1' => 'Địa chỉ',
                                'txt2' => '3A Quân Trấn, Hùng Vương, Nha Trang',
                            ),
                            array(
                                'txt1' => 'Tel',
                                'txt2' => '+84 1234567890',
                            ),
                            array(
                                'txt1' => 'Hotline',
                                'txt2' => '+84 1234567890',
                            ),
                            array(
                                'txt1' => 'Email',
                                'txt2' => 'email@email.com',
                            ),
                        );
                        foreach ($data as $k => $v): ?>
                        <div>
                            <div class="uk-grid-small" uk-grid>
                                <div class="uk-width-auto">
                                    <span class="footer__top__address__txt1"><?= $v['txt1'] ?></span>
                                </div>
                                <div class="uk-width-expand">
                                    <span class="footer__top__address__txt2"><?= $v['txt2'] ?></span>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="uk-margin">
                        <img src="images/VISA.png" alt="">
                    </div>
                </div>
                <div class="uk-width-expand">
                    <h3 class="uk-h3 footer__top__title">Mạng xã hội</h3>
                    <div class="uk-child-width-auto uk-grid-small" uk-grid>
                        <div>
                            <a href=""><img src="images/social/fb.png" alt=""></a>
                        </div>
                        <div>
                            <a href=""><img src="images/social/youtube.png" alt=""></a>
                        </div>
                        <div>
                            <a href=""><img src="images/social/tiktok.png" alt=""></a>
                        </div>

                        <div>
                            <a href=""><img src="images/social/instagram.png" alt=""></a>
                        </div>
                        <div>
                            <a href=""><img src="images/social/google.png" alt=""></a>
                        </div>
                        <div>
                            <a href=""><img src="images/social/travel.png" alt=""></a>
                        </div>

                        <div class="uk-width-1-1">
                            <a href=""><img src="images/social/bocongthuong.png" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="uk-width-1-3@m">
                    <!--Code plugin page Facebook-->
                    <div class="fb-page" data-href="https://www.facebook.com/quavietnhapkhau/" data-tabs="" data-width="" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/quavietnhapkhau/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/quavietnhapkhau/">Quà Việt - Hộp quà Tết, Giỏ quà Tết nhập khẩu</a></blockquote></div>
                </div>
            </div>
        </div>
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