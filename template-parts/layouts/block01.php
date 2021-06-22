<div class="uk-section block01">
    <div class="uk-container">
        <div class="box1__marginXlarge">
            <div class="box1__margin">
                <div class="uk-flex-center" uk-grid>
                    <div class="uk-width-2-3@m">
                        <div class="uk-text-center">
                            <div class="uk-display-inline-block uk-text-left box1__box">
                                <div class="box1__txt">CẨM NANG</div>
                                <h2 class="uk-h2 uk-margin-remove box1__title">Cẩm nang làm đẹp</h2>
                            </div>
                            <p class="box1__desc">Chăm sóc da là một công việc không hề đơn giản, không có người hướng dẫn về việc chăm sóc da đúng cách các bạn sẽ loay hoay</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="uk-child-width-1-3 uk-grid-small uk-grid-match" uk-grid uk-scrollspy="cls: uk-animation-scale-up; target: .block01__blog__card; delay: 150; repeat: true">
                <?php
                $data = array(
                    array(
                        'sub' => array(
                            'http://demo.zozothemes.com/eller/wp-content/uploads/sites/35/2019/05/gallery-1.jpg',
                            'http://demo.zozothemes.com/eller/wp-content/uploads/sites/35/2019/05/gallery-5.jpg',
                        ),
                    ),
                    array(
                        'sub' => array(
                            'http://demo.zozothemes.com/eller/wp-content/uploads/sites/35/2019/05/gallery-2.jpg',
                            'http://demo.zozothemes.com/eller/wp-content/uploads/sites/35/2019/05/gallery-4.jpg',
                        ),
                    ),
                    array(
                        'sub' => array(
                            'http://demo.zozothemes.com/eller/wp-content/uploads/sites/35/2019/05/gallery-3.jpg',
                            'http://demo.zozothemes.com/eller/wp-content/uploads/sites/35/2019/05/gallery-6.jpg',
                        ),
                    ),
                );
                foreach ($data as $k => $v): ?>
                <div>
                    <div class="uk-grid-small uk-child-width-1-1" uk-grid>
                        <?php foreach ($v['sub'] as $key => $value): ?>
                        <div>
                            <div class="uk-inline-clip uk-transition-toggle block01__blog__card" tabindex="0">
                                <img src="<?= $value ?>" alt="">
                                <div class="block01__blog__overlay uk-transition-fade uk-position-cover uk-overlay uk-overlay-default uk-flex uk-flex-center uk-flex-middle">
                                    <a href="" class="uk-link-text block01__blog__link"><span uk-icon="icon: link; ratio: 1.2"></span></a>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <?php endforeach; ?>
                <div class="uk-width-1-1">
                    <div class="uk-text-center">
                        <a href="" class="uk-button uk-button-default block01__blog__btnLoadmore">XEM THÊM</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="box1__marginXlarge">

        </div>
        <div class="box1__marginXlarge">
            <div class="box1__margin">
                <div class="uk-flex-center" uk-grid>
                    <div class="uk-width-2-3@m">
                        <div class="uk-text-center">
                            <div class="uk-display-inline-block uk-text-left box1__box">
                                <div class="box1__txt">THƯ VIỆN</div>
                                <h2 class="uk-h2 uk-margin-remove box1__title">Thư viện & Clip</h2>
                            </div>
                            <p class="box1__desc">Chăm sóc da là một công việc không hề đơn giản, không có người hướng dẫn về việc chăm sóc da đúng cách các bạn sẽ loay hoay</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>