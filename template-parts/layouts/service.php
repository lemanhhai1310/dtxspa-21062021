<div class="service uk-section">
    <div class="uk-container">
        <div class="box1__margin">
            <div class="uk-flex-center" uk-grid>
                <div class="uk-width-2-3@m">
                    <div class="uk-text-center">
                        <div class="uk-display-inline-block uk-text-left box1__box">
                            <div class="box1__txt">DỊCH VỤ</div>
                            <h2 class="uk-h2 uk-margin-remove box1__title">Services</h2>
                        </div>
                        <p class="box1__desc">Các gói chăm sóc da ngon-bổ-rẻ giúp da khỏe, sạch sâu, thải độc, trắng sáng và tăng cường Collagen.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="uk-child-width-1-3@m uk-grid-match uk-grid-small uk-grid-30-m" uk-grid>
            <?php
            $data = array(
                array(
                    'icon' => 'images/icon1.gif',
                    'title' => 'Detox Làn Da',
                    'desc' => 'Các gói chăm sóc da ngon-bổ-rẻ giúp da khỏe, sạch sâu, thải độc, trắng sáng và tăng cường Collagen. ',
                ),
                array(
                    'icon' => 'images/icon2.gif',
                    'title' => 'Chăm sóc da',
                    'desc' => 'Chúng tôi tin những dịch vụ này sẽ điều trị được hết những khuyết điểm trên da của bạn',
                ),
                array(
                    'icon' => 'images/icon3.gif',
                    'title' => 'Chăm sóc body',
                    'desc' => '1 gương mặt đẹp và body sexy nữa thì bạn có thể tự tin thả dáng ở mọi nơi, không còn e ngại.',
                ),
                array(
                    'icon' => 'images/icon4.gif',
                    'title' => 'Triệt Lông vĩnh viễn',
                    'desc' => 'Lông đôi khi khiến ta phiền toái và mất tự tin... Người nhiều lông - đã có máy triệt lông. Tại sao không triệt?!',
                ),
                array(
                    'icon' => 'images/icon5.gif',
                    'title' => 'Tẩy trắng răng',
                    'desc' => 'Sự kết hợp của tinh chất tẩy trắng răng cùng ánh sáng xanh laser chiếu trực tiếp lên răng.',
                ),
                array(
                    'icon' => 'images/icon6.gif',
                    'title' => 'Nail & Beauty',
                    'desc' => 'Một bộ nail đẹp sẽ luôn giúp bạn trở nên tự tin nổi bật thu hút mọi ánh nhìnv',
                ),
            );
            foreach ($data as $k => $v): ?>
            <div>
                <div class="uk-card uk-background-default uk-text-center uk-position-relative">
                    <div class="service__card uk-card-body uk-height-1-1 uk-position-relative uk-position-z-index">
                        <img src="<?= $v['icon'] ?>" alt="">
                        <h3 class="uk-h3 service__card__title"><?= $v['title'] ?></h3>
                        <p class="box1__desc"><?= $v['desc'] ?></p>
                    </div>
                    <img class="uk-position-bottom-left" src="images/IconDecorService.png" alt="">
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>