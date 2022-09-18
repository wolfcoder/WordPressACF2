<?php include('header.php'); ?>

<?php $video = false; ?>

<section class="hero about-us science" <?= $video?'':'style="background-image:url(images/hero.png)"'?>>
    <?php if($video): ?>
    <iframe width="100%" height="100%" src="https://www.youtube.com/embed/kJQP7kiw5Fk?autoplay=1&controls=0&mute=1" frameborder="0" allow="autoplay; accelerometer; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    <?php endif ?>
    <!-- <div class="frame" style="background-image:url(images/frame4.png)"></div> -->
    <div class="hero-caption">
        <div class="caption caption-left">
            <h2>Science & Innovation</h2>
            <span>MICROPOROUS > Science & Innovation</span>
        </div>
        <div class="caption caption-right">
            <p>Our new R&D center features a chemical and analytical lab, battery testing equipment, and a state-of-the-art pilot lab to support our commitment to new product development.</p>
        </div>
    </div>
</section>

<section class="science" data-aos="fade">
    <div class="top-area">
        <div class="bg-area">
            <div class="text-area" >
                <h2>RESEARCH & DEVELOPMENT </h2>
                <div class="separator"></div>
                <p>Our R&D investments will ensure that we will be on the forefront of next-generation battery technology to support our customers’ new application demands.</p>
                <img src="images/MP-1.png" width="100%" alt="" class="image-responsive">
                <h3>Battery Testing </h3>
                <div class="overview_list">
                    <div class="item"><img src="images/checked-icon-global.svg" alt="icon"> <p>Multiple cycling circuits <br class="d-none d-lg-block"> over a range of currents</p></div>
                    <div class="item"><img src="images/checked-icon-global.svg" alt="icon"> <p>Controlled temperature battery testing</div>
                    <div class="item"><img src="images/checked-icon-global.svg" alt="icon"> <p>Battery cell manufacturing capability</p></div>
                    <div class="item"><img src="images/checked-icon-global.svg" alt="icon"> <p>Battery teardown area – failure <br class="d-none d-lg-block"> mode analysis</p></div>
                    <div class="item"><img src="images/checked-icon-global.svg" alt="icon"> <p>High rate discharge and <br class="d-none d-lg-block"> CCA test capability</p></div>
                    <div class="item"><img src="images/checked-icon-global.svg" alt="icon"> <p>60+ test circuits over a wide range <br class="d-none d-lg-block"> of currents</p></div>
                    <div class="item"><img src="images/checked-icon-global.svg" alt="icon"> <p>Rapid prototype testing</p></div>
                    <div class="item"><img src="images/checked-icon-global.svg" alt="icon"> <p>Expedited customer qualification test assistance</p></div>
                </div>
            </div>
        </div>
    </div>
    <div class="tooling"  style="background-image: url(images/product-individual.png)">
        <div class="content">
            <div class="content_area">
                <h3>Analytical Lab</h3>
                <div class="tooling_list">
                    <div class="item"> <img src="images/checked-white-icon-global.svg" alt="icon"> <p>BW ranges from 150µm BW to 700µm BW</p></div>
                    <div class="item"> <img src="images/checked-white-icon-global.svg" alt="icon"> <p>Available in a variety of rib pitches</p></div>
                    <div class="item"> <img src="images/checked-white-icon-global.svg" alt="icon"> <p>Mini/negative rib available on most products</p></div>
                    <div class="item"> <img src="images/checked-white-icon-global.svg" alt="icon"> <p>BW ranges from 150µm BW to 700µm BW</p></div>
                    <div class="item"> <img src="images/checked-white-icon-global.svg" alt="icon"> <p>Available in a variety of rib pitches</p></div>
                    <div class="item"> <img src="images/checked-white-icon-global.svg" alt="icon"> <p>Mini/negative rib available on most products</p></div>
                </div>
            </div>
            <div class="content_area">
                <h3>Pilot lab</h3>
                <div class="tooling_list">
                    <div class="item"> <img src="images/checked-white-icon-global.svg" alt="icon"> <p>Brabender torque rheometer</p></div>
                    <div class="item"> <img src="images/checked-white-icon-global.svg" alt="icon"> <p>25 mm twin screw UHMWPE extruder</p></div>
                    <div class="item"> <img src="images/checked-white-icon-global.svg" alt="icon"> <p>Temperature-controlled PE calendar stack</p></div>
                    <div class="item"> <img src="images/checked-white-icon-global.svg" alt="icon"> <p>Automated banbury rubber mixer</p></div>
                    <div class="item"> <img src="images/checked-white-icon-global.svg" alt="icon"> <p>Temperature-controlled strip mill</p></div>
                    <div class="item"> <img src="images/checked-white-icon-global.svg" alt="icon"> <p>Rubber sheet extruder and calendar</p></div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include('footer.php'); ?>