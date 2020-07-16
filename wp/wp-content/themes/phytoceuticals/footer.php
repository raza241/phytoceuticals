<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */
?>
<section class="newsletter">
        <div class="container">
          <div class="row ">
            <div
              class="col-12 col-md-12 col-lg-6 d-flex justify-content-md-center align-items-center mb-0 mb-md-4 mb-lg-0">
              <h1 class="title">subscribe to our Newsletter</h1>
            </div>
            <div
              class="col-12 col-md-12 col-lg-6 d-flex justify-content-md-center "
            >
              <?php echo do_shortcode('[contact-form-7 id="75" title="newsletter"]'); ?>
            </div>
          </div>
        </div>
      </section>
<footer>
      <h1 class="title">contact us</h1>
      <div class="container contact-form">
      <?php echo do_shortcode( '[contact-form-7 id="72" title="Contact form 1"]' ); ?>
        <div class="social">
          <ul>
            <li>
              <a href="<?php echo get_option_tree('social_facebook'); ?>">
                <i class="fab fa-facebook-f"></i>
              </a>
            </li>
            <li>
              <a href="<?php echo get_option_tree('social_twitter'); ?>">
                <i class="fab fa-twitter"></i>
              </a>
            </li>
            <li>
              <a href="<?php echo get_option_tree('social_instagram'); ?>">
                <i class="fab fa-instagram"></i>
              </a>
            </li>
            <li>
              <a href="<?php echo get_option_tree('social_youtube'); ?>">
                <i class="fab fa-youtube"></i>
              </a>
            </li>
            <li>
              <a href="<?php echo get_option_tree('social_linkedin'); ?>">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </li>
          </ul>
        </div>
        <div class="bottom-footer">
          <div class="row">
            <div class="col-12 col-md-6 text-left">
              <p><?php echo get_option_tree('credit'); ?></p>
              <p>
               <?php echo get_option_tree('contact'); ?>
              </p>
            </div>
            <div class="col-12 col-md-6 text-right ">
              <p><?php echo get_option_tree('copyright'); ?></p>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <script src="<?php bloginfo('template_directory')?>/<assets/js/jquery-3.4.1.min.js"></script>
    <script src="<?php bloginfo('template_directory')?>/assets/js/bootstrap.min.js"></script>
    <script src="<?php bloginfo('template_directory')?>/assets/js/custom-js.js"></script>
    <?php wp_footer();?>
  </body>
</html>
