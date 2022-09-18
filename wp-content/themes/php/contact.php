<?php include('header.php'); ?>

<?php $video = false; ?>

<section class="hero about-us contact" <?= $video?'':'style="background-image:url(images/hero.png)"'?>>
    <?php if($video): ?>
    <iframe width="100%" height="100%" src="https://www.youtube.com/embed/kJQP7kiw5Fk?autoplay=1&controls=0&mute=1" frameborder="0" allow="autoplay; accelerometer; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    <?php endif ?>
    <!-- <div class="frame" style="background-image:url(images/frame4.png)"></div> -->
    <div class="hero-caption">
        <div class="caption caption-left">
            <h2>Contact Us</h2>
            <span>MICROPOROUS > CONTACT US</span>
        </div>
        <div class="caption caption-right">
            <p>Microporous is a place to explore your potential and expand your capabilities. If you are looking for a long term career, not just a job, be a part of our team!</p>
        </div>
    </div>
</section>

<section class="inquiries">
    <div class="content_area">
        <div class="text_area">
            <h1>General Inquiries</h1>
            <div class="separator"></div>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
        </div>
        <div class="form_area">
            <form action="#">
                <div class="single_line">
                    <select name="related" id="related">
                        <option value="">Enquiry related to</option>
                        <option value="">Test 1</option>
                        <option value="">Test 2</option>
                    </select>
                </div>
                <div class="dual_line">
                    <input type="text" name="First_name" placeholder="First Name">
                    <input type="text" name="First_name" placeholder="Last Name">
                </div>
                <div class="dual_line">
                    <input type="text" name="First_name" placeholder="Email">
                    <input type="text" name="First_name" placeholder="Phone">
                </div>
                <div class="single_line add_bottom">
                    <textarea name="message" id="message" cols="30" rows="4" placeholder="Message"></textarea>
                </div>
                <div class="capcha">
                    <img src="images/no_robot.svg" alt="no_robot">
                </div>
                <div class="single_line submit">
                    <input type="submit" value="send">
                </div>
            </form>
        </div>
    </div>
</section>

<?php include('footer.php'); ?>