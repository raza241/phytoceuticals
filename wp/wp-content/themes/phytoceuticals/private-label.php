<?php

/* Template Name: Private-Label */

get_header();
?>
    <div class="banner banner__private">
        <div class="overlay"></div>
        <div class="container">
          <div class="row">
            <div
              class="col-md-12 d-flex align-items-center justify-content-md-center justify-content-lg-start"
            >
              <div class="banner-text">
                <h1>
                 <?php the_excerpt(); ?>
                </h1>
                <p class="paragraph paragraph--light">
                  <?php 
                    while ( have_posts() ) : the_post();
                      the_content();
                    endwhile;
                  ?>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    <main>
      <section class="portfolio portfolio__private bg-color">

        <div class="container">
          <div class="row">
            <?php
              $Portfolio_image = get_post_meta(get_the_ID(), 'ms_Portfolio_image', true);
              $portfolio_designation = get_post_meta(get_the_ID(), 'ms_portfolio_designation', true);
              $portfolio_name = get_post_meta(get_the_ID(), 'ms_portfolio_name', true);
              $portfolio_description = get_post_meta(get_the_ID(), 'ms_portfolio_description', true);
            ?>
            <div
              class="col-md-12 col-lg-6 d-flex justify-content-md-center justify-content-lg-end"
            >
              <div class="dr-image">
                <img
                  class="img-responsive"
                  src="<?php echo $Portfolio_image; ?>"
                  alt="#"
                />
              </div>
            </div>
            <div
              class="col-md-12 col-lg-6 d-flex justify-content-center align-items-center mt-md-4"
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

        <!-- <div class="bg-shape">
          <img src="assets/images/Rectangle 4.svg" alt="#" />
        </div> -->
      </section>
      <section class="phytoprivate">
        <?php
            $formulations_title = get_post_meta(get_the_ID(), 'ms_formulations_title', true);  
            $formulations_detail = get_post_meta(get_the_ID(), 'ms_formulations_detail', true);  
        ?>
        <div class="container">
          <div class="row">
            <div class="col-12 col-md-12 col-lg-6">
              <h1 class="title"><?php echo $formulations_title; ?></h1>
              <p class="paragraph">
               <?php
                  echo $formulations_detail; 
               ?>
              </p>
            </div>
            <div class="col-12 col-md-12 col-lg-6">
              <div class="label-image big-img">
                <img
                  src="<?php bloginfo('template_directory');?>/assets/images/img-2.jpg"
                  alt="#"
                  class="img-responsive"
                />
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="process text-center">
        <div class="container">
          <h1 class="title">
            phytoceuticals inc,. private label process
          </h1>
          <ul>
            <?php
                $process_fields = get_post_meta(get_the_ID(), 'ms_process_fields',true);
                $process_image = get_post_meta(get_the_ID(), 'ms_process_image',true);
                    foreach (
                        (array) $process_fields as $key => $process_fields) {
                        if ( isset( $process_fields['ms_process_number'] ) ) {
                            $process_number = esc_html( $process_fields['ms_process_number'] );
                        }
                        if ( isset( $process_fields['ms_process_detail'] ) ) {
                            $process_detail = esc_html( $process_fields['ms_process_detail'] );
                        }
            ?>
            <li>
              <div class="process__point"><?php echo $process_number; ?></div>
              <p><?php echo $process_detail; ?></p>
            </li>
            <?php }
            ?>
          </ul>
        </div>
        <img
          src="<?php echo $process_image; ?>"
          alt="#"
          class="img-responsive"
        />
      </section>
      <section class="py-100">
        <?php 
          $assurance_title = get_post_meta(get_the_ID(), 'ms_assurance_title', true);
          $assurance_detail = get_post_meta(get_the_ID(), 'ms_assurance_detail', true);
          $advantage_title = get_post_meta(get_the_ID(), 'ms_advantage_title', true);
        ?>
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-lg-6">
              <h1 class="title">
                <?php echo $assurance_title; ?>
              </h1>
              <p class="paragraph">
                <?php echo $assurance_detail; ?>
              </p>
            </div>
            <div class="col-md-12 col-lg-6">
              <div class="advantages">
                <h2 class="title "><?php echo $advantage_title; ?></h2>
                <ul>
                  <?php
                      $advantage_field = get_post_meta(get_the_ID(), 'ms_advantage_field',true);
                          foreach (
                              (array) $advantage_field as $key => $advantage_field) {
                              if ( isset( $advantage_field['ms_advantage_detail'] ) ) {
                                  $advantage_detail = esc_html( $advantage_field['ms_advantage_detail'] );
                              }
                  ?>
                  <li class="paragraph">
                    <?php echo $advantage_detail; ?>
                  </li>
                  <?php } ?>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
  <?php get_footer();