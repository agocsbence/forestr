<?php
/*

Template Name: Contact

*/

get_header();

?>

<section class="contact-section">
    <h1 class="lead"><?php the_title(); ?></h1>
    <div class="grid grid-2">
        <div class="left-block">
            <form action="" class="pure">
                <input type="text" placeholder="Name" class="wide" required>
                <input type="email" name="email" id="email" placeholder="Email" class="wide" required>
                <input type="tel" name="phone" id="phone" placeholder="Phone" class="">
                <input type="url" name="website" id="website" placeholder="www.YourPage.com" class="">
                <input type="text" name="subject" id="subject" placeholder="Subject" class="wide">
                <textarea name="message" id="message" rows="10" placeholder="Message"></textarea>
                <div class="policy-wrapper">
                    <label class="checkbox">privacy policy <a href="">(read)</a>
                        <input type="checkbox">
                        <span class="checkmark"></span>
                    </label>
                    <label class="checkbox">terms & conditions <a href="">(read)</a>
                        <input type="checkbox">
                        <span class="checkmark"></span>
                    </label>
                </div>
                <br>
                <br>
                <input type="submit" value="Send" class="submit-white">
            </form>
        </div>
        <div class="right-block">
            <p>For more information please get in touch with us <br>
            <a href="">info@forestRfoundation.com</a></p>
            
            <div class="margin-3"></div>
            
            <img src="<?php bloginfo('template_url') ?>/assets/img/contact.svg" alt="">
        </div>
    </div>
</section>

<?php get_footer(); ?>