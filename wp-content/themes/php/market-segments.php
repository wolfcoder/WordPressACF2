<?php include('header.php'); ?>

<?php $video = false; ?>

<section class="hero about-us" <?= $video?'':'style="background-image:url(images/hero.png)"'?>>
    <?php if($video): ?>
    <iframe width="100%" height="100%" src="https://www.youtube.com/embed/kJQP7kiw5Fk?autoplay=1&controls=0&mute=1" frameborder="0" allow="autoplay; accelerometer; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    <?php endif ?>
    <!-- <div class="frame" style="background-image:url(images/frame4.png)"></div> -->
    <div class="hero-caption">
        <div class="caption caption-left">
            <h2>Market Segments</h2>
            <span>MICROPOROUS > Market Segments</span>
        </div>
        <div class="caption caption-right">
            <p>As the leading independent provider of quality lead-acid battery separators, Microporous strives to build the best products to match customers’ needs.</p>
        </div>
    </div>
</section>

<section class="market_segments" data-aos="fade">
    <div class="market_container">
        <div class="img_with_text">
            <div class="img-area">
                <img src="images/market-1.jpg" alt="market-1">
            </div>
            <div class="text-area">
                <h2>Automotive</h2>
                <div class="separator"></div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                <a href="market-individual.php" class="btn-white">PRODUCTS</a>
            </div>
        </div>

        <div class="img_with_text left_img">
            <div class="img-area mobile">
                <img src="images/market-2.jpg" alt="market-2">
            </div>
            <div class="text-area">
                <h2>MOTIVE POWER</h2>
                <div class="separator"></div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex.</p>
                <a href="#" class="btn-white">PRODUCTS</a>
            </div>
            <div class="img-area">
                <img src="images/market-2.jpg" alt="market-2">
            </div>
        </div>

        <div class="img_with_text">
            <div class="img-area">
                <img src="images/market-3.jpg" alt="market-3">
            </div>
            <div class="text-area">
                <h2>Stationary</h2>
                <div class="separator"></div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                <a href="#" class="btn-white">PRODUCTS</a>
            </div>
        </div>
    </div>
</section>

<?php include('footer.php'); ?>