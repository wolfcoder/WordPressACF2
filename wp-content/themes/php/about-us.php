<?php require 'header.php' ?>
<?php $video = false; ?>

<section class="hero about-us" <?= $video?'':'style="background-image:url(images/hero.png)"'?>>
    <?php if($video): ?>
    <iframe width="100%" height="100%" src="https://www.youtube.com/embed/kJQP7kiw5Fk?autoplay=1&controls=0&mute=1" frameborder="0" allow="autoplay; accelerometer; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    <?php endif ?>
    <div class="frame" style="background-image:url(images/frame4.png)"></div>
    <div class="hero-caption">
        <div class="caption caption-left">
            <h2>About Us</h2>
            <span>MICROPOROUS > ABOUT US</span>
        </div>
        <div class="caption caption-right">
        Microporous, headquartered in Piney Flats, Tennessee, is a leading international supplier of lead acid battery separators.
        </div>
    </div>
</section>

<section class="summary" data-aos="fade">
    <div class="summary-image" style="background-image:url(images/about-us--new-1.jpg)"></div>
    <div class="summary-content">
        <img src="images/logo.png" height="80px" class="d-inline-block align-top" alt="">
        <h2>DEVELOPING CUTTING EDGE LEAD-ACID BATTERY SEPARATORS FOR OVER 80 YEARS</h2>
        <div class="sparator"></div>
        <p>We are one of the leading designer, manufacturers and marketers of lead acid battery separators in Americas and EMEA. We have been developing cutting-edge products for over 80 years. </p>
        <p>Battery separator is critical to insure the best performance and reliability for lead acid batteries and we will always strive to bring the right solution to every customer.  </p>
    </div>
</section>

<section class="company-timeline" data-aos="fade">
    <h2>Company Timeline</h2>
    <div class="timeline-content desktop">
        <img src="images/about-us-icon-left.svg" class="icon-timeline" alt="left-icon">
        <img src="images/about-us-icon-right.svg" class="icon-timeline-2" alt="right-icon">
        <ul class="timeline">
            <li data-year="2016" data-text="New capacity expansion – Feistritz installs third line to produce CellForce® and DuroForce®">
                <div class="bg-white"></div>
                <div class="bubble"></div>
            </li>
            <li data-year="2018" data-text="Microporous Piney Flats Expansion takes place">
                <div class="bg-white"></div>
                <div class="bubble"></div>
            </li>
            <li data-year="2019" data-text="Established global partnership for developing, manufacturing, and distributing AGM battery separators">
                <div class="bg-white"></div>
                <div class="bubble"></div>
            </li>
            <li data-year="2020" data-text="Microporous Piney Flats new facility becomes operational">
                <div class="bg-white"></div>
                <div class="bubble"></div>
            </li>
        </ul>
    </div>
    <div class="timeline-content mobile" data-aos="fade">
        <ul class="timeline">
            <li>
                <h3>2016</h3>
                <p>New capacity expansion – Feistritz installs third line to produce CellForce® and DuroForce®</p>
            </li>
            <li>
                <h3>2018</h3>
                <p>Microporous Piney Flats Expansion takes place</p>
            </li>
            <li>
                <h3>2019</h3>
                <p>Established global partnership for developing, manufacturing, and distributing AGM battery separators</p>
            </li>
            <li>
                <h3>2020</h3>
                <p>Microporous Piney Flats new facility becomes operational</p>
            </li>
        </ul>
    </div>
    <div class="sparator"></div>
    <h2>Customer Commitment</h2>
    <div class="commitment-content">
        <p>Over our 80+ year history, we have firmly established a reputation for quality and service, with our excellent logistic and technical service teams, we offer the broadest line of high-performance battery separators to a global customer base.</p>
        <div>
            <a href="#" class="learn-more">Learn More</a>
        </div>
    </div>
</section>

<section class="featured about-us" data-aos="fade">
    <?php $i=4; foreach([
        'GLOBAL LOCATIONS' => 'Microporous owns and operates two world-class manufacturing facilities in the U.S. Our commitment and focus have made us one of the most important and effective partners to help our customers succeed.',
        'SCIENCE AND INNOVATIONS' => 'Our new R&D center features a chemical and analytical lab, battery testing equipment, and a state-of-the-art pilot lab to support our commitment to new product development. ',
    ] as $title => $description): ?>
    <a href="" class="featured-list" style="background-image:url(images/f<?=$i++?>.png)">
        <div class="featured-caption">
            <h2><?=$title?></h2>
            <p><?=$description?></p>
            LEARN MORE <span class="float-right"><i class="fa fa-arrow-right"></i></span>
        </div>
    </a>
    <?php endforeach ?>
</section>

<section class="quality-excelence" data-aos="fade" style="background-image:url(images/frame3.png)">
    <div class="quality-excelence-content">
        <div class="qeccontent">
            <h2>Quality Excellence </h2>
            <div class="sparator"></div>
            <p>We are dedicated to creating long-term partnerships with our customers by providing reliable solutions and delivering dependable products and services.</p>
            <a href="#" class="learn-more">Learn More</a>
        </div>
        <div class="quality-excelence-image" style="background-image:url(images/about-us-new-2.jpg)"></div>
    </div>
</section>

<?php require 'footer.php' ?>