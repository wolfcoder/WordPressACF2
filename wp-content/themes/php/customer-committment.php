<?php include('header.php'); ?>

<?php $video = false; ?>

<section class="hero about-us" <?= $video?'':'style="background-image:url(images/hero.png)"'?>>
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
            <p>We are dedicated to creating long-term partnerships with our customers by providing reliable solutions and delivering dependable products and services.</p>
        </div>
    </div>
</section>

<section class="customer_testimonials" data-aos="fade">
    <div class="bg-area">
        <img src="images/bg-customer-details.jpg" alt="bg">
    </div>
    <div class="customer-testi">
        <div class="title-area">
            <div class="icon-area">
                <img src="images/icon-testi.svg" alt="icon-testi">
            </div>
            <h3>Customer Testimonials</h3>
        </div>
        <div class="testimonials">
            <div class="box">
                <div class="quote">
                    <p>Microporous is reliable and easy to work with, we can always count on them!”</p>
                </div>
                <span class="author">Jane doe</span>
                <span class="position">CEO @ ABC Corp</span>
            </div>
            <div class="box">
                <div class="quote">
                    <p>Microporous is reliable and easy to work with, we can always count on them!”</p>
                </div>
                <span class="author">Jane doe</span>
                <span class="position">CEO @ ABC Corp</span>
            </div>
            <div class="box">
                <div class="quote">
                    <p>Microporous is reliable and easy to work with, we can always count on them!”</p>
                </div>
                <span class="author">Jane doe</span>
                <span class="position">CEO @ ABC Corp</span>
            </div>
        </div>
    </div>
</section>

<section class="quality-assurance">
    <div class="container-area">
        <div class="left-area">
            <h2>Quality Assurance</h2>
            <div class="separator"></div>
            <p>Microporous ensures the highest standards by following strict quality assurance practices. We provide continuous and reliable services for all of our products.</p>
            <p>We are committed to exceeding customer requirements and expectations through continuous improvement in our processes, capabilities and quality assurance practices.</p>
        </div>
        <div class="right-area">
            <h2>First in Class Customer Service</h2>
            <div class="separator"></div>
            <p>Microporous provides customers the world-class services. We have a team of talents that are devoted to increase our customer satisfaction on a daily basis. (a couple more sentences to be added later)</p>
            <div class="img-area">
                <img src="images/customer-1.jpg" alt="images">
            </div>
        </div>
    </div>
</section>

<section class="manufacturing" data-aos="fade">
    <div class="bg-area">
        <img src="images/customer-2.jpg" alt="bg-area">
    </div>
    <div class="text-area">
        <h2>Manufacturing Engineering Excellence</h2>
        <div class="separator"></div>
        <p>Microporous engineers combine a wealth of experience with expertise in design, analysis, and production to ensure that our production lines are running smoothly and products are meeting and exceeding the expectations. </p>
    </div>
</section>

<?php include('footer.php'); ?>