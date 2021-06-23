<div id="about" class="about uk-overflow-hidden">
    <div class="uk-container">
        <div class="uk-grid-match" uk-grid>
            <div class="uk-width-expand">
                <div class="uk-section">
                    <div class="box1__margin">
                        <div class="uk-flex-left" uk-grid>
                            <div class="uk-width-1-1@m">
                                <div class="uk-text-left">
                                    <div class="uk-display-inline-block uk-text-left box1__box">
                                        <div class="box1__txt">GIỚI THIỆU</div>
                                        <h2 class="uk-h2 uk-margin-remove box1__title">Wellness center</h2>
                                    </div>
                                    <p class="box1__desc">Với mong muốn mang đến cho quý khách hàng niềm Hạnh Phúc về làn da Sáng Đẹp, Khỏe Mạnh cùng m ức giá Hợp Lý, cung cấp các liệu trình chăm sóc da chuyên nghiệp, nail, triệt lông và tẩy trắng răng.</p>
                                    <div class="uk-child-width-auto uk-margin" uk-grid>
                                        <?php
                                        $data = array(
                                            array(
                                                'icon' => 'images/massage.png',
                                                'txt' => 'Massage',
                                            ),
                                            array(
                                                'icon' => 'images/therapies.png',
                                                'txt' => 'Therapies',
                                            ),
                                            array(
                                                'icon' => 'images/relaxation.png',
                                                'txt' => 'Relaxation',
                                            ),
                                            array(
                                                'icon' => 'images/facial.png',
                                                'txt' => 'Facial',
                                            ),
                                        );
                                        foreach ($data as $k => $v): ?>
                                        <div>
                                            <div class="uk-text-center">
                                                <div class="about__boxImg">
                                                    <img class="uk-responsive-height" src="<?= $v['icon'] ?>" alt="">
                                                </div>
                                                <div class="about__txt"><?= $v['txt'] ?></div>
                                            </div>
                                        </div>
                                        <?php endforeach; ?>
                                    </div>
                                    <p><a href="" class="uk-button uk-button-default block01__blog__btnLoadmore">XEM THÊM</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="uk-width-1-2@m uk-flex-first@m">
                <img uk-scrollspy="cls: uk-animation-slide-bottom; repeat: true" src="images/about-img.png" alt="">
            </div>
        </div>
    </div>
</div>