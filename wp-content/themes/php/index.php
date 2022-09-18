<?php require 'header.php' ?>
<?php $video = false; ?>

<section class="hero" <?= $video?'':'style="background-image:url(images/hero.png)"'?>>
    <?php if($video): ?>
    <iframe width="100%" height="100%" src="https://www.youtube.com/embed/kJQP7kiw5Fk?autoplay=1&controls=0&mute=1" frameborder="0" allow="autoplay; accelerometer; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    <?php endif ?>
    <div class="hero-caption">
        <h2>We are a leading manufacturer of separators for lead-acid batteries.</h2>
    </div>
</section>

<section class="featured" data-aos="fade">
    <?php foreach([
        'Separator Manufacturing',
        'Product Portfolio',
        'Customer Commitment',
        'Join Our Technical Webinar',
    ] as $key => $title): ?>
    <a href="" class="featured-list" style="background-image:url(images/f<?=$key?>.png)">
        <div class="featured-caption">
            <h2><?=$title?></h2>
            Learn More <span class="float-right"><i class="fa fa-arrow-right"></i></span>
        </div>
    </a>
    <?php endforeach ?>
</section>

<section class="work-with-us-container" data-aos="fade">
    <div class="work-with-us" style="background-image:url(images/frame.png)">
        <div class="frame" style="background-image:url(images/work-with-us.png)"></div>
        <div class="work-with-us-caption">
            <h2>WORK WITH US!</h2>
            <div class="sparator"></div>
            <p>
                With talented employees, an exceptional company culture, and a global footprint, Microporous is a great place to work and an outstanding place to build your career.<br><br>

                <b>Come be a part of our team!</b><br>

                <a href="" class="see-job-button">SEE JOBS</a>
            </p>
        </div>
    </div>
</section>

<section class="testimonial desktop" data-aos="fade" style="background-image:url(images/frame2.png)">
    <h2>CUSTOMER TESTIMONIALS</h2>

    <div class="testimonial-content ">
        <div class="testimonial-slider-home">
            <div class="item">
                <div class="testimonial-item">
                    <h2>“</h2>
                    <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam."</p>
                    <b class="author">Jane Doe</b>
                    <span>CEO @ ABC Corp</span>
                </div>
            </div>
            <div class="item">
                <div class="testimonial-item">
                    <h2>“</h2>
                    <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam."</p>
                    <b class="author">Jane Doe</b>
                    <span>CEO @ ABC Corp</span>
                </div>
            </div>
            <div class="item">
                <div class="testimonial-item">
                    <h2>“</h2>
                    <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam."</p>
                    <b class="author">Jane Doe</b>
                    <span>CEO @ ABC Corp</span>
                </div>
            </div>
            <div class="item">
                <div class="testimonial-item">
                    <h2>“</h2>
                    <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam."</p>
                    <b class="author">Jane Doe</b>
                    <span>CEO @ ABC Corp</span>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="testimonial mobile" style="background-image:url(images/frame2.png)">
    <h2>CUSTOMER TESTIMONIALS</h2>

    <div class="testimonial-content testimonial-slider">
        <div class="testimonial-item">
            <h2>“</h2>
            <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam."</p>
            <br>
            <b>Jane Doe</b><br>
            <span>CEO @ ABC Corp</span>
        </div>

        <div class="testimonial-item active-center">
            <h2>“</h2>
            <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam."</p>
            <br>
            <b>Jane Doe</b><br>
            <span>CEO @ ABC Corp</span>
        </div>
        
        <div class="testimonial-item">
            <h2>“</h2>
            <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam."</p>
            <br>
            <b>Jane Doe</b><br>
            <span>CEO @ ABC Corp</span>
        </div>
    </div>
</section>

<section class="video" data-aos="fade" style="background-image:url(images/video.jpeg)">
    <img src="images/play-btn.png" alt="" class="play-btn">

    <div class="popup">
        <iframe class="embed-responsive-item" width="100%" height="100%" src="https://www.youtube.com/embed/QWz6KaXaJFs" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
    </div>
</section>

<?php require 'footer.php' ?>