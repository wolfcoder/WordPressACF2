<?php include('header.php'); ?>

<?php $video = false; ?>

<section class="hero about-us" <?= $video?'':'style="background-image:url(images/hero.png)"'?>>
    <?php if($video): ?>
    <iframe width="100%" height="100%" src="https://www.youtube.com/embed/kJQP7kiw5Fk?autoplay=1&controls=0&mute=1" frameborder="0" allow="autoplay; accelerometer; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    <?php endif ?>
    <!-- <div class="frame" style="background-image:url(images/frame4.png)"></div> -->
    <div class="hero-caption">
        <div class="caption caption-left">
            <h2>Automotive</h2>
            <span>MICROPOROUS > Market Segments > AUTOMOTIVE</span>
        </div>
        <div class="caption caption-right">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
        </div>
    </div>
</section>

<section class="market_individual" data-aos="fade">
    <div class="market_container">
        <div class="market_box">
            <a href="#" class="strech_link"></a>
            <div class="img-area">
                <img src="images/market_individual-1.png" alt="market-1">
            </div>
            <div class="text_area">
                <h3>DuroForce<span>®</span> ULTRA™</h3>
                <p>Lorem ipsum dolor eiusmod sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et.</p>
                <a href="#">Learn more <img src="images/icon-market.svg" alt="icon"></a>
            </div>
        </div>
        <div class="market_box">
            <a href="#" class="strech_link"></a>
            <div class="img-area">
                <img src="images/market-individual-2.png" alt="market-1">
            </div>
            <div class="text_area">
                <h3>CellForce<span>®</span> ULR™</h3>
                <p>Lorem ipsum dolor eiusmod sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et.</p>
                <a href="#">Learn more <img src="images/icon-market.svg" alt="icon"></a>
            </div>
        </div>
        <div class="market_box">
            <a href="#" class="strech_link"></a>
            <div class="img-area">
                <img src="images/market-individual-3.png" alt="market-1">
            </div>
            <div class="text_area">
                <h3>GlassForce<span>®</span> AUTOMOTIVE GE™</h3>
                <p>Lorem ipsum dolor eiusmod sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et.</p>
                <a href="#">Learn more <img src="images/icon-market.svg" alt="icon"></a>
            </div>
        </div>
    </div>
    <div class="view_all">
        <a href="#" class="btn-white">< ALL MARKET SEGMENTS</a>
    </div>
</section>

<?php include('footer.php'); ?>