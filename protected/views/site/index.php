
<section id="content" class="content">

    <div class="container">
        <div class="wrapper1">
            <div class="row">
                <div class="grid_4 wow fadeInLeft" data-wow-delay="0.2s">
                    <div class="aside-border maxheight">
                        <h2>Events calendar</h2>
                        <ul class="event-list">
                            <?php foreach ($calendars as $calendar) { ?>
                                <li>
                                    <div class="box">
                                        <div class="box_left">
                                            <p class="event_date"><?php echo date('d', strtotime($calendar->EventDate)); ?> <br/><span><?php echo date('M', strtotime($calendar->EventDate)); ?></span></p>
                                        </div>
                                        <div class="box_cnt o__hidden">
                                            <h3>
                                                <a href="#"><?php echo $calendar->Title; ?></a>
                                            </h3>
                                            <p class="off1"><?php echo $calendar->Description; ?></p>
                                            <a class="btn" href="<?php echo Yii::app()->createUrl('site/events'); ?>">more info</a>
                                        </div>
                                    </div>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
                <?php echo $this->renderPartial('_index'); ?>
                <div class="grid_3  wow fadeInRight" data-wow-delay="0.2s">
                    <div style="margin-bottom: 20px">
                        <a href="http://igg.me/at/projecthaibung/x/10971723" target="_blank"><img src="<?php echo Yii::app()->request->baseUrl; ?>/asset/images/donate.jpeg"></a>
                    </div>

                    <div>
                        <h2>Sponsors & Donors:</h2>

                        <ul class="icon-list" style="margin-top: 20px">
                            <li>
                                <div class="box">
                                    <div class="box_cnt o__hidden">
                                        <p>
                                            <span style="font-weight: bold">Surya Ply</span><br>
                                            Donation in kind: Plywood
                                        </p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="box">
                                    <div class="box_cnt o__hidden">
                                        <p>
                                            <span style="font-weight: bold">Sarawagi Rugs</span><br>
                                            Amount: $2080
                                        </p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="box">
                                    <div class="box_cnt o__hidden">
                                        <p>
                                            <span style="font-weight: bold">Pavle Uroda</span><br>
                                            Amount: $500
                                        </p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="box">
                                    <div class="box_cnt o__hidden">
                                        <p>
                                            <span style="font-weight: bold">Fiona Castelino</span><br>
                                            Amount: $500
                                        </p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <hr/>
        <div class="wrapper2">
            <div class="row">
                <div class="grid_3  wow fadeInLeft" data-wow-delay="0.2s">
                    <h2>#ProjectHaibung!</h2>

                    <div class="quote-box">
                        <p>100% of the funds it raises directly to rebuild schools for the benefit of about 720 children in Haibung, Nepal. </p>
                    </div>

                </div>
                <div class="preffix_1 grid_8  wow fadeInRight" data-wow-delay="0.2s">
                    <iframe width="560" height="380" src="http://youtu.be/noFHdM8F-qc" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
        <hr/>
        <div class="wrapper2">
            <div class="row">
                <div class="grid_3  wow fadeInLeft" data-wow-delay="0.2s">
                    <h2>Why Haibung?</h2>

                    <div class="quote-box">
                        <p>Haibung is a village of 576 families in Sindhupalchowk district where 95% of the houses have been collapsed including all of its five schools. Almost 720 children who come from a poor family background now have no access to learning and are out of school. Their only hope for better future is through education and now they are being stripped off this opportunity.</p>
                        <h3>
                            <a href="#">Field Visit</a>
                        </h3>
                    </div>

                    <div class="quote-box">
                        <p>All 5 schools have also collapsed due to the earthquake which means currently about 720 students have no means of learning until schools are rebuilt.</p>

                        <h3>
                            <a href="#">Filed Visit</a>
                        </h3>
                    </div>

                </div>
                <div class="preffix_1 grid_8  wow fadeInRight" data-wow-delay="0.2s">
                    <h2>Who we are?</h2>

                    <p>We are not a registered organization. We are a team of dedicated Nepali youth who have pledged to rebuild three schools in Haibung by leveraging our resources/personal networks and with the help of volunteers in the village.</p> 
                    <a class="btn" href="<?php echo Yii::app()->createUrl('site/about'); ?>">more info</a>
                    <div class="row">
                        <div class="grid_2">
                            <div class="img-wrap">
                                <img class="img-border" src="<?php echo Yii::app()->request->baseUrl; ?>/asset/images/haibung_images/haibung_1_175_125.png" alt=""/>
                                <a data-gal href="<?php echo Yii::app()->request->baseUrl; ?>/asset/images/haibung_images/haibung_1.jpg"></a>
                            </div>
                        </div>
                        <div class="grid_2">
                            <div class="img-wrap">
                                <img class="img-border" src="<?php echo Yii::app()->request->baseUrl; ?>/asset/images/haibung_images/haibung_2_175_125.png" alt=""/>
                                <a data-gal href="<?php echo Yii::app()->request->baseUrl; ?>/asset/images/haibung_images/haibung_2.jpg"></a>
                            </div>
                        </div>
                        <div class="grid_2">
                            <div class="img-wrap">
                                <img class="img-border" src="<?php echo Yii::app()->request->baseUrl; ?>/asset/images/haibung_images/haibung_3_175_125.png" alt=""/>
                                <a data-gal href="<?php echo Yii::app()->request->baseUrl; ?>/asset/images/haibung_images/haibung_3.jpg" width="100px" height="100px"></a>
                            </div>
                        </div>
                        <div class="grid_2">
                            <div class="img-wrap">
                                <img class="img-border" src="<?php echo Yii::app()->request->baseUrl; ?>/asset/images/haibung_images/haibung_4_175_125.png" alt=""/>
                                <a data-gal href="<?php echo Yii::app()->request->baseUrl; ?>/asset/images/haibung_images/haibung_4.jpg"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr/>
    </div>

</section>
