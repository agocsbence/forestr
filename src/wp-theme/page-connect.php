<?php
/*

Template Name: Connect

*/

get_header();

?>

<section class="connect-section first-section">
    <h1 class="lead"><?php the_title(); ?></h1>
    <div class="grid grid-2">
        <div class="left-block">
            <form action="">
                <input type="text" placeholder="Name" class="wide" required>
                <input type="email" name="email" id="email" placeholder="Email" class="wide" required>
                <input type="tel" name="phone" id="phone" placeholder="Phone" class="">
                <input type="url" name="website" id="website" placeholder="www.YourPage.com" class="">
                <input type="text" name="subject" id="subject" placeholder="Subject" class="wide">
                <textarea name="message" id="message" rows="10" placeholder="Message"></textarea>
                <div class="policy-wrapper">
                    <label class="checkbox">checkbox 1
                        <input type="checkbox">
                        <span class="checkmark"></span>
                    </label>
                    <label class="checkbox">checkbox 2
                        <input type="checkbox">
                        <span class="checkmark"></span>
                    </label>
                    <br>
                    <label for="user_individual" class="radio">radio 1
                        <input type="radio" name="user_type" id="user_individual">
                        <span class="checkmark"></span>
                    </label>
                    <label for="user_company" class="radio">radio 2
                        <input type="radio" name="user_type" id="user_company">
                        <span class="checkmark"></span>
                    </label>
                </div>
                
                <input type="file" name="file" id="file" class="wide">

                <select name="dropdown" id="dropdown" class="wide">
                    <option value="dropdown 1">Dropdown 1</option>
                    <option value="dropdown 2">Dropdown 2</option>
                    <option value="dropdown 3">Dropdown 3</option>
                    <option value="dropdown 4">Dropdown 4</option>
                </select>
                
                <input type="submit" value="Send" class="">
            </form>
        </div>
        <div class="right-block">
            <h2 class="lead">Join us, be a part of the ForestR Foundation.</h2>
            <p>You are welcome to join our international tree planting community.</p>
            <p>Do you have any superpowers? Or just any practical skills? Do you wish to share it with us?</p>
            <p>We are always looking for volunteers and members to join our colorful international community.</p>
            <p>Do you have 1-2 hours a week / month to help us?</p>
            <p>Do you own a piece of land where you wish to plant some trees? We can connect you with our tree planting community.</p>
            <p>Do you have any spare time? Wish to act against climate change?</p>
        </div>
    </div>
</section>

<?php get_footer(); ?>