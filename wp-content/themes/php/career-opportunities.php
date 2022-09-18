<?php include('header.php'); ?>

<?php $video = false; ?>

<section class="hero about-us" <?= $video?'':'style="background-image:url(images/hero.png)"'?>>
    <?php if($video): ?>
    <iframe width="100%" height="100%" src="https://www.youtube.com/embed/kJQP7kiw5Fk?autoplay=1&controls=0&mute=1" frameborder="0" allow="autoplay; accelerometer; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    <?php endif ?>
    <div class="frame" style="background-image:url(images/frame4.png)"></div>
    <div class="hero-caption">
        <div class="caption caption-left">
            <h2>Career Opportunities</h2>
            <span>MICROPOROUS > CAREER OPPORTUNITIES</span>
        </div>
        <div class="caption caption-right">
            <p>Microporous is a place to explore your potential and expand your capabilities. If you are looking for a long term career, not just a job, be a part of our team!</p>
        </div>
    </div>
</section>

<section class="career_testimonials" data-aos="fade">
    <div class="testimonial_container">
        <h3>Employee testimonials</h3>
        <div class="separator"></div>
        <div class="testimonials">
            <div class="box">
                <div class="quote">
                    <div class="icon">
                        <img src="images/icon-testi-career.svg" alt="icon">
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                </div>
                <span class="author">Jane Doe</span>
                <span class="position">Accounting</span>
            </div>
            <div class="box">
                <div class="quote">
                    <div class="icon">
                        <img src="images/icon-testi-career.svg" alt="icon">
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                </div>
                <span class="author">Jane Doe</span>
                <span class="position">Accounting</span>
            </div>
            <div class="box">
                <div class="quote">
                    <div class="icon">
                        <img src="images/icon-testi-career.svg" alt="icon">
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                </div>
                <span class="author">Jane Doe</span>
                <span class="position">Accounting</span>
            </div>
        </div>
    </div>
    <div class="img-area">
        <img src="images/carrer-1.jpg" alt="career">
    </div>
</section>

<section class="careers" data-aos="fade">
    <div class="text-area">
        <h3>CAREERS WITH Microporous </h3>
        <div class="separator"></div>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
    </div>
    <div class="opportunity">
        <div class="box">
            <div class="title">
                <h4>Research & Development Team Leader</h4>
                <h5 class="mobile">Englewood, Chicago, IL</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
            </div>
            <div class="text-area">
                <h5>Englewood, Chicago, IL</h5>
                <a href="#" class="btn-apply">APPLY</a>
            </div>
        </div>
        <div class="box">
            <div class="title">
                <h4>Lab Technician</h4>
                <h5 class="mobile">Wentworth, Chicago, IL</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
            </div>
            <div class="text-area">
                <h5>Wentworth, Chicago, IL</h5>
                <a href="#" class="btn-apply">APPLY</a>
            </div>
        </div>
        <div class="box">
            <div class="title">
                <h4>Sales Manager</h4>
                <h5 class="mobile">Wentworth, Chicago, IL</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
            </div>
            <div class="text-area">
                <h5>Wentworth, Chicago, IL</h5>
                <a href="#" class="btn-apply">APPLY</a>
            </div>
        </div>
        <div class="box">
            <div class="title">
                <h4>Englewood, Chicago, IL</h4>
                <h5 class="mobile">Englewood, Chicago, IL</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
            </div>
            <div class="text-area">
                <h5>Englewood, Chicago, IL</h5>
                <a href="#" class="btn-apply">APPLY</a>
            </div>
        </div>
    </div>
    <div class="load-more">
        <a href="https://www.google.com/" target="_blank">VIEW ALL CAREERS </a>
    </div>
</section>

<section class="career-images" data-aos="fade">
    <div class="content-area">
        <div class="img-container">
            <img src="images/career-2.jpg" alt="career">
        </div>
        <div class="img-container">
            <img src="images/career-3.jpg" alt="career">
        </div>
        <div class="img-container">
            <img src="images/career-4.jpg" alt="career">
        </div>
        <div class="img-container">
            <img src="images/career-5.jpg" alt="career">
        </div>
    </div>
</section>

<?php include('footer.php'); ?>