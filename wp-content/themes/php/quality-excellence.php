<?php include('header.php'); ?>

<?php $video = false; ?>

<section class="hero about-us" <?= $video?'':'style="background-image:url(images/hero.png)"'?>>
    <?php if($video): ?>
    <iframe width="100%" height="100%" src="https://www.youtube.com/embed/kJQP7kiw5Fk?autoplay=1&controls=0&mute=1" frameborder="0" allow="autoplay; accelerometer; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    <?php endif ?>
    <!-- <div class="frame" style="background-image:url(images/frame4.png)"></div> -->
    <div class="hero-caption">
        <div class="caption caption-left">
            <h2>Quality Excellence</h2>
            <span>MICROPOROUS > Quality Excellence</span>
        </div>
        <div class="caption caption-right">
            <p>Microporous ensures the highest standards by following strict quality assurance practices. </p>
        </div>
    </div>
</section>


<section class="manufacturing_locations" data-aos="fade">
    <div class="text-area">
        <h2>CONTINUOUS IMPROVEMENT & QUALITY ASSURANCE</h2>
        <div class="separator"></div>
        <p>We provide continuous and reliable services for all of our products. We are committed to exceeding customer requirements and expectations through continuous improvement in our processes, capabilities and quality assurance practices.</p>
    </div>
</section>

<section class="quality-excellence" data-aos="fade">
    <div class="item">
        <a href="" class="thumb">
            <img src="images/q1.png" alt="">
            <img src="images/expand.png" alt="" class="abs-icon">
        </a>
        <div class="text_area">
            <h2>ISO 9001:2015</h2>
            <p><b>Microporous LLC, Piney Flats, TN</b><br>Technical support, manufacturing and sales of battery separators and membranes</p>
            <a href="">DOWNLOAD CERTIFICATE</a>
        </div>
    </div>
    <div class="item">
        <a href="" class="thumb">
            <img src="images/q2.png" alt="">
            <img src="images/expand.png" alt="" class="abs-icon">
        </a>
        <div class="text_area">
            <h2>ISO 9001:2015</h2>
            <p><b>Microporous GmbH, Feistritz im Rosental, Austria</b><br>Technical support, manufacturing and sales of battery separators and membranes</p>
            <a href="">DOWNLOAD CERTIFICATE</a>
        </div>
    </div>
    <div class="item">
        <a href="" class="thumb">
            <img src="images/q2.png" alt="">
            <img src="images/expand.png" alt="" class="abs-icon">
        </a>
        <div class="text_area">
            <h2>ISO 14001:2015</h2>
            <p><b>Microporous GmbH, Feistritz im Rosental, Austria</b><br>Technical support, manufacturing and sales of battery separators and membranes</p>
            <a href="">DOWNLOAD CERTIFICATE</a>
        </div>
    </div>
</section>
<?php include('footer.php'); ?>