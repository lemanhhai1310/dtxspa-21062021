<div id="qa" class="qa uk-section">
    <div class="uk-container">
        <div class="box1__margin">
            <div class="uk-flex-center" uk-grid>
                <div class="uk-width-2-3@m">
                    <div class="uk-text-center">
                        <div class="uk-display-inline-block uk-text-left box1__box">
                            <div class="box1__txt">Hỏi & đáp thông tin</div>
                            <h2 class="uk-h2 uk-margin-remove box1__title">Hỏi & Đáp</h2>
                        </div>
                        <p class="box1__desc">Tất cả các câu hỏi quan trọng, cần thiết và được nhiều người cùng hỏi trong suốt thời gian qua. Mọi câu hỏi của các bạn sẽ làm những tiêu chí để chúng tôi nâng cao dịch vụ</p>
                    </div>
                </div>
            </div>
        </div>
        <div uk-grid>
            <div class="uk-width-expand">
                <ul uk-accordion>
                    <?php
                    $data = array(
                        array(
                            'title' => 'Bạn đang mang thai?',
                            'desc' => 'Quý khách có thể mua vé tại ... Nếu đoàn đi đông quý khách có thể chủ động liên hệ đặt vé trước để tiện cho việc sắp xếp các dịch vụ khác được chu đáo hơn. Số điện thoại liên hệ Booking: xxx1920304050',
                        ),
                        array(
                            'title' => 'Bạn có bị dị ứng, sử dụng thuốc, hoặc bị chấn thương/ phẫu thuật gần đây không?',
                            'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                        ),
                        array(
                            'title' => 'Bạn đang uống thuốc/ chế phẩm bôi nào hay không?',
                            'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                        ),
                        array(
                            'title' => 'Mục tiều điều trị của bạn là gì và bạn muốn chúng tôi tập trung vào những gì?',
                            'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                        ),
                        array(
                            'title' => 'Bạn thích loại lực massage nào và cần tránh massage ở vị trí nào không?',
                            'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                        ),
                        array(
                            'title' => 'Chế độ chăm sóc da hiện nay của bạn là gì?',
                            'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                        ),
                        array(
                            'title' => 'Bạn đã nghe được những gì về chúng tôi?',
                            'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                        ),
                        array(
                            'title' => 'Hoạt động và sở thích bạn thường xuyên tham gia là gì?',
                            'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                        ),
                        array(
                            'title' => 'Bạn có muốn cung cấp thêm cho chúng tôi thông tin gì nữa không?',
                            'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                        ),
                        array(
                            'title' => 'Tôi phải mang gì theo khi đi spa?',
                            'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                        ),
                    );
                    foreach ($data as $k => $v): ?>
                    <li class="<?= ($k === 0) ? 'uk-open' : '' ?>">
                        <a class="uk-accordion-title qa__title" href="#"><?= $v['title'] ?></a>
                        <div class="uk-accordion-content qa__desc">
                            <p><?= $v['desc'] ?></p>
                        </div>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div class="uk-width-auto@m">
                <div class="uk-text-center">
                    <img src="images/qa/gallery-4.png" alt="">
                </div>
            </div>
        </div>
    </div>
</div>