<?php include('header.php'); ?>

<?php $video = false; ?>

<section class="hero about-us" <?= $video?'':'style="background-image:url(images/hero.png)"'?>>
    <?php if($video): ?>
    <iframe width="100%" height="100%" src="https://www.youtube.com/embed/kJQP7kiw5Fk?autoplay=1&controls=0&mute=1" frameborder="0" allow="autoplay; accelerometer; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    <?php endif ?>
    <div class="frame" style="background-image:url(images/frame4.png)"></div>
    <div class="hero-caption">
        <div class="caption caption-left">
            <h2>Global Locations</h2>
            <span>MICROPOROUS > Global Locations</span>
        </div>
        <div class="caption caption-right">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
    </div>
</section>

<section class="manufacturing_locations" data-aos="fade">
    <div class="text-area">
        <h2>WORLD-CLASS MANUFACTURING</h2>
        <div class="separator"></div>
        <p>Microporous owns and operates two world-class manufacturing facilities in the U.S. and Europe capable of producing approximately 130 million square meters of separators annually to serve a global customer base. </p>
    </div>
</section>

<section class="image_with_text" data-aos="fade">
    <div class="img-area">
        <img src="images/global-1.jpg" alt="image">
    </div>
    <div class="text-area">
        <h4>Piney Flats, Tennessee</h4>
        <p>Built in 1971, our Piney Flats plant manufactures and distribute Flex-Sil®, Ace-Sil®, CellForce®, DuroForce® and GlassForce® separators, and is the ONLY facility in the world making rubber separators. The facility is ISO 9001 certified and is home to our state-of-the-art R&D lab.</p>
    </div>
    <div class="img-area desktop">
        <img src="images/global-1.jpg" alt="image">
    </div>
</section>

<section class="image_with_text right_img" data-aos="fade">
    <div class="img-area">
        <img src="images/global-2.jpg" alt="image">
    </div>
    <div class="text-area">
        <h4>Feistritz, Austria </h4>
        <p>Our Feistritz facility’s emission and utility consumption rates, are unmatched in the industry. The Feistritz plant is conveniently located near key European customers with convenient access to serve Asian and African markets. This facility is ISO 9001 and ISO 14001 certified.</p>
    </div>
</section>

<section class="capabalities" data-aos="fade">
    <div class="top-area">
        <div class="bg-area" style="background-image: url(images/global-3.png)">
            <div class="text-area" >
                <h2>Capabilities </h2>
                <div class="separator"></div>
                <p>Microporous is continually investing to be the most complete and capable lead-acid battery separator supplier in the world. Our commitment and focus have made us one of the most important and effective partners to help our customers succeed.</p>
                <h3>OVERVIEW</h3>
                <div class="overview_list">
                    <div class="item"><img src="images/checked-icon-global.svg" alt="icon"> <p>Only producer of natural rubber-based separators in the world.</p></div>
                    <div class="item"><img src="images/checked-icon-global.svg" alt="icon"> <p>Five state-of-the-art PE lines with the most advanced controls in the industry</div>
                    <div class="item"><img src="images/checked-icon-global.svg" alt="icon"> <p>Separator capacities over 150mm M2</p></div>
                    <div class="item"><img src="images/checked-icon-global.svg" alt="icon"> <p>Custom options: cut piece, roll stock, profiles, wide range of OA thickness, and multiple options for glass mat</p></div>
                    <div class="item"><img src="images/checked-icon-global.svg" alt="icon"> <p>Internal development and testing of new profiles and material formulations</p></div>
        
                    <div class="item"><img src="images/checked-icon-global.svg" alt="icon"> <p>Ability to create custom <br> solutions for all customers</p></div>
                </div>
            </div>
        </div>
    </div>
    <div class="tooling"  style="background-image: url(images/global-4.jpg)">
        <div class="content">
            <div class="content_area">
                <div class="title_area">
                    <h3>Tooling capabilities </h3>
                </div>
                <div class="tooling_list">
                    <div class="item"> <img src="images/checked-white-icon-global.svg" alt="icon"> <p>BW ranges from 150µm BW to 700µm BW</p></div>
                    <div class="item"> <img src="images/checked-white-icon-global.svg" alt="icon"> <p>Available in a variety of rib pitches</p></div>
                    <div class="item"> <img src="images/checked-white-icon-global.svg" alt="icon"> <p>Mini/negative rib available on most products</p></div>
                </div>
            </div>
            <div class="content_area">
                <div class="title_area d-none d-lg-block"></div>
                <div class="tooling_list">
                    <div class="item"> <img src="images/checked-white-icon-global.svg" alt="icon"> <p>Widest range of overall thickness</p></div>
                    <div class="item"> <img src="images/checked-white-icon-global.svg" alt="icon"> <p>Many positive rib profiles to suit all needs</p></div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include('footer.php'); ?>