<?php include('header.php'); ?>

<?php $video = false; ?>

<section class="hero about-us newsroom" <?= $video?'':'style="background-image:url(images/hero.png)"'?>>
    <?php if($video): ?>
    <iframe width="100%" height="100%" src="https://www.youtube.com/embed/kJQP7kiw5Fk?autoplay=1&controls=0&mute=1" frameborder="0" allow="autoplay; accelerometer; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    <?php endif ?>
    <!-- <div class="frame" style="background-image:url(images/frame4.png)"></div> -->
    <div class="hero-caption">
        <div class="caption caption-left">
            <h2>Newsroom</h2>
            <span>MICROPOROUS > NEWSROOM</span>
        </div>
        <div class="caption caption-right">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
        </div>
    </div>
</section>

<section class="newsroom">
    <div class="nav">
        <a href="#" class="active">All Articles</a>
        <a href="#">Corporate</a>
        <a href="#">Events</a>
        <a href="#">Innovation</a>
        <a href="#">Industry</a>
        </div>
        <div class="newsroom_area">
            <div class="item" style="display:none;">
                <a href="news_article.php" class="strecth"></a>
                <div class="img_area">
                    <img src="images/news_1.jpg" alt="image">
                </div>
                <div class="text_area">
                    <span class="date">26th June, 2021</span>
                    <h3>Gustavo marques joins microporous family</h3>
                    <p>Microporous, a leading developer and manufacturer of lead acid battery separators, is pleased to welcome Gustavo Marques as Sales Manager. He joined the team in Piney Flats, Tennessee and reports directly to the VP of Sales & Marketing. </p>
                    <a href="news_article.php">read more ></a>
                </div>
            </div>
            <div class="item" style="display:none;">
                <a href="#" class="strecth"></a>
                <div class="img_area">
                    <img src="images/news_2.jpg" alt="image">
                </div>
                <div class="text_area">
                    <span class="date">24th April, 2021</span>
                    <h3>Sachin Kumar joins microporous family!</h3>
                    <p>Piney Flats, TN. May 3, 2021 - Microporous is excited to announce Sachin Kumar as Technical Manager. In his new position, Sachin directly reports to David Mihara, VP of Technology.</p>
                    <a href="#">read more ></a>
                </div>
            </div>
            <div class="item" style="display:none;">
                <a href="#" class="strecth"></a>
                <div class="img_area">
                    <img src="images/news_3.jpg" alt="image">
                </div>
                <div class="text_area">
                    <span class="date">6th March, 2021</span>
                    <h3>ELBC Milan, April 22-25</h3>
                    <p>Over three days, the ELBC Studio will feature a full programme of insights and analysis from over 50 leading industry figures and research experts. Industry Insights sessions will platform leading experts and company executives as they share their analysis and debate…</p>
                    <a href="#">read more ></a>
                </div>
            </div>
            <div class="item " style="display:none;">
                <a href="#" class="strecth"></a>
                <div class="img_area">
                    <img src="images/news_4.jpg" alt="image">
                </div>
                <div class="text_area larger">
                    <span class="date">30th Feb, 2021</span>
                    <h3>Global partnership with zisun for agm innovation, manufacturing and distribution!</h3>
                    <p>Chongqing Zaisheng (Zisun) Technology Corp., Ltd (and its affiliates) and Microporous LLC (and its affiliates) are pleased to announce their Definitive, Exclusive and Immediate Global Partnership.</p>
                    <a href="#">read more ></a>
                </div>
            </div>
            <div class="item" style="display:none;">
                <a href="#" class="strecth"></a>
                <div class="img_area">
                    <img src="images/news_1.jpg" alt="image">
                </div>
                <div class="text_area">
                    <span class="date">26th June, 2021</span>
                    <h3>Gustavo marques joins microporous family</h3>
                    <p>Microporous, a leading developer and manufacturer of lead acid battery separators, is pleased to welcome Gustavo Marques as Sales Manager. He joined the team in Piney Flats, Tennessee and reports directly to the VP of Sales & Marketing. </p>
                    <a href="#">read more ></a>
                </div>
            </div>
        </div>
        <div class="load_more">
            <a href="#">LOAD MORE ARTICLES</a>
        </div>
</section>

<section class="video_img">
    <div class="logo_area">
        <img src="images/logo_micro_news.svg" alt="logo">
    </div>
    <div class="text_area">
        <h1>DEVELOPING CUTTING EDGE LEAD-ACID BATTERY SEPARATORS FOR OVER 80 YEARS</h1>
        <div class="separator"></div>
    </div>
    <div class="video_area">
        <div class="video_wrapper">
            <img src="images/news_thumb_1.jpg" alt="thumb">
            <img src="images/play_btn.svg" alt="play" class="play_video">
            <div class="popup">
                <iframe class="embed-responsive-item" width="100%" height="100%" src="https://www.youtube.com/embed/QWz6KaXaJFs" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </div>
        </div>
        <div class="text_video">
            <h4>Learn more about Microporous in our extended video on our Company page and see why Microporous is the leading manufacturer of battery separators.</h4>
            <a href="#"><img src="images/linkedin_logo.svg" alt="linked"> MORE ABOUT MICROPOROUS ></a>
        </div>
    </div>
</section>

<?php include('footer.php'); ?>