<?php require 'header.php' ?>
<?php $video = false; ?>

<section class="hero about-us customer-commitment" <?= $video?'':'style="background-image:url(images/hero.png)"'?>>
    <?php if($video): ?>
    <iframe width="100%" height="100%" src="https://www.youtube.com/embed/kJQP7kiw5Fk?autoplay=1&controls=0&mute=1" frameborder="0" allow="autoplay; accelerometer; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    <?php endif ?>
    <div class="frame" style="background-image:url(images/frame4.png)"></div>
    <div class="hero-caption">
        <div class="caption caption-left">
            <h2>Customer Commitment</h2>
            <span>MICROPOROUS > ABOUT US > CUSTOMER COMMITMENT</span>
        </div>
        <div class="caption caption-right">
        We are dedicated to creating long-term partnerships with our customers by providing reliable solutions and delivering dependable products and services.
        </div>
    </div>
</section>

<?php require 'footer.php' ?>