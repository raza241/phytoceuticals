<?php

/* Template Name:About-Us */

get_header();
?>
    <?php
      $about_us_banner = get_post_meta(get_the_ID(), 'ms_about_us_banner', true);
    ?>
    <div class="banner__inner" style="background-image:url('<?php echo $about_us_banner; ?>')">
        <h1 class="title ">
         <?php the_title(); ?>
        </h1>
      </div>
    
    <main class="about-main">
      <!-- <section class="about-us">
                <div class="container-fluid about-background">
                    <h1 class="title text-center color-white">About us</h1>
                </div>
            </section> -->

      <section class="phytoprivate">
        <div class="container">
          <div class="row">
            <div class="col-12 col-md-6">
              <h1 class="title"><?php the_excerpt(); ?></h1>
              <p class="paragraph">
              <?php
                while ( have_posts() ) : the_post();
                the_content();
                endwhile;
              ?>    
              </p>
            </div>
            <div class="col-12 col-md-6 pull-right">
              <div class="label-image">
                <img
                  src="<?php the_post_thumbnail_url(); ?>"
                  alt="#"
                  class="img-responsive"
                />
              </div>
            </div>
          </div>
        </div>
      </section>
      <?php
        $about_us_field = get_post_meta(get_the_ID(), 'ms_about_us_field', true);
        $count = 1;
          foreach ( (array) $about_us_field as $key => $about_us_field ) {
            if ( isset( $about_us_field['ms_Portfolio_image'] ) ) {
                $Portfolio_image = esc_html( $about_us_field['ms_Portfolio_image'] );
            }
            if ( isset( $about_us_field['ms_portfolio_designation'] ) ) {
              $portfolio_designation = esc_html( $about_us_field['ms_portfolio_designation'] );
            }
            if ( isset( $about_us_field['ms_portfolio_name'] ) ) {
              $portfolio_name = esc_html( $about_us_field['ms_portfolio_name'] );
            }
            if ( isset( $about_us_field['ms_portfolio_description'] ) ) {
              $portfolio_description = esc_html( $about_us_field['ms_portfolio_description'] );
            }
      ?>
      <?php if($count % 2 == 0) { ?>
        <section class="portfolio light">
          <div class="">
            <div class="container">
              <div class="row">
                <div
                  class="col-md-6 d-flex align-items-center justify-content-center"
                >
                  <div class="text-center">
                    <h6 class="designation">
                    <?php echo $portfolio_designation; ?>
                    </h6>
                    <h1 class="name">
                    <?php echo $portfolio_name; ?>
                    </h1>
                    <p class="paragraph">
                      <?php echo $portfolio_description; ?>
                    </p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="dr-image">
                    <img
                      class="img-responsive"
                      src="<?php echo $Portfolio_image; ?>"
                      alt="#"
                    />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
       
      <?php } else { ?>
        <section class="portfolio portfolio__private dark">
          <div class="container">
            <div class="row">
              <div class="col-md-6">
                <div class="dr-image">
                  <img
                    class="img-responsive"
                    src="<?php echo $Portfolio_image; ?>"
                    alt="#"
                  />
                </div>
              </div>
              <div
                class="col-md-6 d-flex align-items-center justify-content-center"
              >
                <div class="text-center">
                  <h6 class="designation">
                  <?php echo $portfolio_designation; ?>
                  </h6>
                  <h1 class="name">
                    <?php echo $portfolio_name; ?>
                  </h1>
                  <p class="paragraph">
                    <?php echo $portfolio_description; ?>
                  </p>
                 
                </div>
              </div>
            </div>
          </div>
        </section>
      <?php }  ?>
                <?php $count++; } ?>
      <!-- <section class="portfolio portfolio__amara dark">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <div class="dr-image">
                <img
                  class="img-responsive"
                  src="<?php bloginfo('template_directory');?>/assets/images/amira.jpg"
                  alt="#"
                />
              </div>
            </div>
            <div
              class="col-md-6 d-flex align-items-center justify-content-center"
            >
              <div class="text-center">
                <h6 class="designation">
                  - Office Manager -
                </h6>
                <h1 class="name">
                  Amira Omar
                </h1>
                <p class="paragraph">
                  is world renowned for being the inventor of topical Vitamin C
                  and manufacturing formulas for many of the largest medical
                  skincare companies in the world since 1995.
                </p>
                <p class="paragraph">
                  At Phytoceuticals, Inc., our focus is on developing natural,
                  safe, and clinically proven skincare are committed to
                  exceeding your expectations every step of the way.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section> -->
    </main>
<?php get_footer();