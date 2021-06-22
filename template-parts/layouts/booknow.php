<div class="uk-section booknow" uk-height-viewport>
    <div class="uk-position-relative">
        <div class="uk-container">
            <div class="box1__margin">
                <div class="uk-flex-center" uk-grid>
                    <div class="uk-width-2-3@m">
                        <div class="uk-text-center">
                            <div class="uk-display-inline-block uk-text-left box1__box">
                                <div class="box1__txt">BÁO GIÁ</div>
                                <h2 class="uk-h2 uk-margin-remove box1__title">Gói giá & ưu đãi</h2>
                            </div>
                            <p class="box1__desc">Bạn có thể chọn lựa cho mình những gói giá trọn gói và khuyến mại có sẵn. Bạn cũng có thể tự tạo gói giá riêng của mình xin vui lòng liên hệ tới chúng tôi</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="uk-child-width-1-3@m uk-grid-match" uk-grid>
                <?php
                $data = array(
                    array(
                        namePack => 'Relax Basic',
                        price => '29',
                        featuresList => array(
                            'Lorem ipsum',
                            'dolor sit',
                            'adipiscing elit',
                            'eiusmod tempor',
                            'dolore magna',
                            'minim veniam',
                        ),
                    ),
                    array(
                        namePack => 'Standard',
                        price => '40',
                        featuresList => array(
                            'Unlimited chats and websites',
                            'Customizable chat in 25 languages',
                            'Desktop, mobile and browser agent apps',
                            '24/7 customer support',
                            '2 month chat history storage',
                            'Basic CRM functions',
                            'Team chats for an unlimited number of staff members',
                        ),
                    ),
                    array(
                        namePack => 'Exclusive',
                        price => '60',
                        featuresList => array(
                            'All the benefits of Basic version, and:',
                            'Unlimited chat history storage',
                            'Proactively start chats and catch leads using Smart Triggers',
                            'Complete visitor info including IP addresses, region, visit source and more',
                            'Canned responses with an automatic helper',
                            'Chat transfer between agents',
                            'Monitor website visitors in real time',
                            'Connect JivoChat with chatbots and don’t miss a single request',
                            'Use built -in CRM to turn new customers into returning ones and grow your business',
                        ),
                    ),
                );
                foreach ($data as $k => $v): ?>
                <div>
                    <div class="uk-card uk-card-default uk-card-body uk-flex uk-flex-column <?= ($k === 1) ? 'uk-active' : '' ?>">
                        <div class="booknow__box1">
                            <h3 class="uk-h3 booknow__title"><?= $v['namePack'] ?></h3>
                            <div>
                                <sup class="booknow__txtDola">$</sup>
                                <span class="booknow__price"><?= $v['price'] ?></span>
                                <span class="booknow__txtDate">/month</span>
                            </div>
                        </div>
                        <div class="uk-flex-auto">
                            <ul class="uk-list booknow__featuresList">
                                <?php foreach ($v['featuresList'] as $key => $value): ?>
                                <li><span class="uk-position-top-left" uk-icon="icon: check; ratio: 0.8"></span><?= $value ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                        <div>
                            <a href="" class="uk-button uk-button-default booknow__btn">Đặt ngay</a>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>