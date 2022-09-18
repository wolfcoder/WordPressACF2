<?php include('header.php'); ?>

<?php $video = false; ?>

<section class="hero about-us individual" <?= $video?'':'style="background-image:url(images/hero.png)"'?>>
    <?php if($video): ?>
    <iframe width="100%" height="100%" src="https://www.youtube.com/embed/kJQP7kiw5Fk?autoplay=1&controls=0&mute=1" frameborder="0" allow="autoplay; accelerometer; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    <?php endif ?>
    <div class="frame" style="background-image:url(images/frame4.png)"></div>
    <div class="hero-caption">
        <div class="caption caption-left">
            <h2>Company Timeline</h2>
            <span>MICROPOROUS > ABOUT US > TIMELINE</span>
        </div>
        <div class="caption caption-right">
            <p>Over our 80+ year history, we have firmly established a reputation for quality and service, with our excellent logistic and technical service teams, we offer the broadest line of <br class="d-none d-lg-block"> high-performance battery separators to a global customer base.</p>
        </div>
    </div>
</section>

<section class="timeline_new">
    <div class="container_area">
        <div class="timeline_area">
            <div class="timeline_line"><img src="images/about-us-icon-left.svg" alt="icon" class="bottom_icon"></div>
            <div class="item">
                <h3>1934</h3>
                <p>American Rubber Company creates and patents the first rubber battery separator, Ace-Sil</p>
            </div>
            <div class="item">
                <h3>1953</h3>
                <p>American Rubber Co. is acquired by Amerace Corp.</p>
            </div>
            <div class="item">
                <h3>1971</h3>
                <p>Piney Flats facility becomes operational</p>
            </div>
            <div class="item">
                <h3>1978</h3>
                <p>Amerace develops and patents Flex-Sil®</p>
            </div>
            <div class="item icon">
                <h3>1991</h3>
                <p>Microporous Products, Inc. <br> (“Microporous”) name is first used</p>
                <div class="img-area">
                    <img src="images/1991-amerace.svg" alt="icon">
                </div>
            </div>
            <div class="item">
                <h3>1999</h3>
                <p>Microporous creates and patents the CellForce® separator</p>
            </div>
            <div class="item">
                <h3>2000</h3>
                <p>Microporous creates and patents the CellForce® separator</p>
            </div>
            <div class="item">
                <h3>2007</h3>
                <p>Microporous begins construction of a separator production facility in Feistritz, Austria</p>
            </div>
            <div class="item with-bg" style="background-image: url(images/timeline-1.jpg);">
                <div class="timeline_line_white"></div>
                <h3>2008</h3>
                <p>Feistritz plant is commissioned <br class="d-none d-lg-block"> and starts production</p>
                <div class="timeline_line_white v2"></div>
            </div>
            <div class="item">
                <h3>2009</h3>
                <p>Piney Flats produces and sells DuroForce™ HD for the first time</p>
            </div>
            <div class="item">
                <h3>2011</h3>
                <p>Feistritz facility reaches a global equivalent capacity of 40 million square <br> meters per year, with CellForce®, DuroForce™ Ultra, and DuroForce™ CL</p>
            </div>
            <div class="item icon v2">
                <h3>2013</h3>
                <p>FTC approves acquisition of Microporous by Seven Mile Capital Partners, making Microporous an independent company again</p>
                <div class="img-area">
                    <img src="images/timeline_icon_2.svg" alt="icon">
                </div>
            </div>
            <div class="item">
                <h3>2014</h3>
                <p>New management team is put in place, focusing on equipment improvement projects</p>
            </div>
            <div class="item">
                <h3>2015</h3>
                <p>EnerSys Outstanding Supplier Performance Award 2015</p>
            </div>
            <div class="item">
                <h3>2016</h3>
                <p>New capacity expansion – Feistritz installs third line to <br> produce CellForce® and DuroForce®</p>
            </div>
            <div class="item with-bg" style="background-image: url(images/timeline-2.jpg);">
                <div class="timeline_line_white"></div>
                <h3>2018</h3>
                <p>Microporous Piney Flats  <br class="d-none d-lg-block"> Expansion takes place</p>
                <div class="timeline_line_white v2"></div>
            </div>
            <div class="item">
                <h3>2019</h3>
                <p>Established global partnership for developing, <br> manufacturing, and distributing AGM battery <br> separators</p>
            </div>
            <div class="item">
                <h3>2020</h3>
                <p>Microporous Piney Flats new facility becomes operational</p>
            </div>
        </div>
    </div>
</section>

<?php include('footer.php'); ?>