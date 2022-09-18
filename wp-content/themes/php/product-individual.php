<?php include('header.php'); ?>

<?php $video = false; ?>

<section class="hero about-us individual" <?= $video?'':'style="background-image:url(images/hero.png)"'?>>
    <?php if($video): ?>
    <iframe width="100%" height="100%" src="https://www.youtube.com/embed/kJQP7kiw5Fk?autoplay=1&controls=0&mute=1" frameborder="0" allow="autoplay; accelerometer; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    <?php endif ?>
    <!-- <div class="frame" style="background-image:url(images/frame4.png)"></div> -->
    <div class="hero-caption">
        <div class="caption caption-left">
            <h2>ACE-SIL</h2>
            <span>MICROPOROUS > PRODUCTS > ACE-SIL</span>
        </div>
        <div class="caption caption-right">
            <p>Premium rubber separators for over 80 years with market-leading battery life performance of 20+ years in stationary and specialty applications.</p>
        </div>
    </div>
</section>

<section class="product_features" data-aos="fade">
    <div class="top-area">
        <div class="bg-area">
            <div class="img-thumbnail">
                <img src="images/product-thumb.png" alt="">
            </div>
            <div class="text-area">
                <h2>STATIONARY & MOTIVE APPLICATIONS</h2>
                <div class="separator"></div>
                <div>
                    <div class="row">
                        <div class="col-3 col-md-3 col-sm-3">
                            <img src="images/email.png" alt=""><br>
                            UPS
                        </div>
                        <div class="col-3 col-md-3 col-sm-3">
                            <img src="images/military-rank.png" alt=""><br>
                            Military
                        </div>
                        <div class="col-3 col-md-3 col-sm-3">
                            <img src="images/wifi-signal.png" alt=""><br>
                            Telecom
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-3 col-md-3 col-sm-3">
                            <img src="images/la-energia-nuclear.png" alt=""><br>
                            Nuclear
                        </div>
                        <div class="col-3 col-md-3 col-sm-3">
                            <img src="images/mine-cart.png" alt=""><br>
                            Mining
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="tooling"  style="background-image: url(images/product-individual.png)">
        <div class="content">
            <div class="content_area">
                <h3>Product Features</h3>
                <div class="tooling_list">
                    <div class="item"> <img src="images/checked-white-icon-global.svg" alt="icon"> <p>Formulated from natural <br>rubber, amorphous silica, sulfur</p></div>
                    <div class="item"> <img src="images/checked-white-icon-global.svg" alt="icon"> <p>Glass mat laminate</p></div>
                    <div class="item"> <img src="images/checked-white-icon-global.svg" alt="icon"> <p>Cut piece only</p></div>
                </div>
            </div>
            <div class="content_area">
                <h3>Product advantages</h3>
                <div class="tooling_list">
                    <div class="item"> <img src="images/checked-white-icon-global.svg" alt="icon"> <p>Extremely long cycle life of 20+ years</p></div>
                    <div class="item"> <img src="images/checked-white-icon-global.svg" alt="icon"> <p>Excellent recharge characteristics</p></div>
                    <div class="item"> <img src="images/checked-white-icon-global.svg" alt="icon"> <p>Permanent wettability provides <br> stable, low electrical resistance</p></div>
                </div>
            </div>
        </div>
    </div>
    <div class="technical">
        <div class="technical-brochure">
            <h2>Technical Brochure</h2>
            <img src="images/google-docs.png" alt="">
            <a href="#">DOWNLOAD</a>
        </div>
        <div class="additional-information">
            <h2>Additional Information</h2>
            <img src="images/phone-call.png" alt="">
            <a href="#">CONTACT US</a>
        </div>
    </div>
</section>

<?php include('footer.php'); ?>