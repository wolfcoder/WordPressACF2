<?php include('header.php'); ?>

<?php $video = false; ?>

<section class="hero about-us" <?= $video?'':'style="background-image:url(images/hero.png)"'?>>
    <?php if($video): ?>
    <iframe width="100%" height="100%" src="https://www.youtube.com/embed/kJQP7kiw5Fk?autoplay=1&controls=0&mute=1" frameborder="0" allow="autoplay; accelerometer; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    <?php endif ?>
    <!-- <div class="frame" style="background-image:url(images/frame4.png)"></div> -->
    <div class="hero-caption">
        <div class="caption caption-left">
            <h2>Newsroom</h2>
            <span>MICROPOROUS > NEWSROOM > CORPORATE</span>
        </div>
    </div>
</section>

<section class="news">
    <div class="content_area">
        <h3>Sachin Kumar Joins Microporous Family!</h3>
        <span class="date">24th April, 2021</span>

        <div class="featured_img">
            <img src="images/featured_img.jpg" alt="featured_img">
        </div>

        <h4>Piney Flats, TN. May 3, 2021 – Microporous is excited to announce Sachin Kumar as Technical Manager. In his new position, Sachin directly reports to David Mihara, VP of Technology. </h4>
        <p>Sachin has a Bachelor’s degree in Pulp and Paper Technology from IIT-Roorkee, Master’s degree in Paper Science and Engineering and Ph.D. in Analytical Chemistry from Miami University of Ohio.</p>
        <p>He has previously worked as R&D Executive Engineer with BILT (largest paper manufacturer in India) and has also worked as Visiting Assistant Professor in the Chemistry and Biochemistry department at Miami University of Ohio where he instructed senior/graduate level biophysical chemistry, physical chemistry and general chemistry courses. Over the last 20 years, he has carried out fundamental research in the area of fuel-cells utilizing heterogeneous catalysis over metal nanoparticle and applied research in the area of carbon/graphite manufacturing for super capacitor and li-ion battery applications.</p>
        <p>In his spare time, he enjoys nature photography and cooking for his wife Shikha. They both enjoy hiking, traveling, meeting new people and experiencing different cuisines. Sachin and his wife are relocating to Johnson City area and are very excited for the future.</p>


    </div>
    <div class="back_btn">
        <a href="newsroom.php">< BACK TO ALL ARTICLES</a>
    </div>
</section>

<section class="latest_article">
    <div class="title_area">
        <h3>LATEST ARTICLES</h3>
        <div class="separator"></div>
    </div>
    <div class="article">
        <div class="item">
            <a href="news_article.php" class="strecth"></a>
            <div class="img_area">
                <img src="images/article_1.jpg" alt="article_1">
            </div>
            <div class="text_area">
                <span class="date">26th June, 2021</span>
                <h4>Gustavo marques joins microporous family</h4>
                <a href="#">READ MORE ></a>
            </div>
        </div>
        <div class="item">
            <a href="news_article.php" class="strecth"></a>
            <div class="img_area">
                <img src="images/article_2.jpg" alt="article_2">
            </div>
            <div class="text_area">
                <span class="date">6th March, 2021</span>
                <h4>ELBC Milan, April 22-25</h4>
                <a href="#">READ MORE ></a>
            </div>
        </div>
        <div class="item">
            <a href="news_article.php" class="strecth"></a>
            <div class="img_area">
                <img src="images/article_3.jpg" alt="article_3">
            </div>
            <div class="text_area">
                <span class="date">30th Feb, 2021</span>
                <h4>Global partnership with zisun for agm innovation, manufacturing and distribution!</h4>
                <a href="#">READ MORE ></a>
            </div>
        </div>
    </div>
    <div class="view_all">
        <a href="#">VIEW ALL ARTICLES</a>
    </div>
</section>

<?php include('footer.php'); ?>