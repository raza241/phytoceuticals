<?php
    /** Template Name: Home */

    get_header();
?>
<div class="banner" style="background-image:url('<?php the_post_thumbnail_url(); ?>');">
        <div class="overlay"></div>
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-lg-6 d-flex align-items-center justify-content-md-center justify-content-lg-start">
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
                <a href="<?php the_permalink(); ?>about" class="button">read more</a>
              </div>
            </div>
            <!-- <div class="col-md-6 d-flex align-items-center">
              <img
                class="img-responsive"
                src="assets/images/banner-img-2.png"
                alt="#"
              />
            </div> -->
          </div>
        </div>
      </div>
    </header>
    <main>
      <section class="portfolio">
          <?php
            $private_label_title = get_post_meta(get_the_ID(), 'ms_private_label_title', true);
            $private_label_detail = get_post_meta(get_the_ID(), 'ms_private_label_detail', true);
            $private_lable_image = get_post_meta(get_the_ID(), 'ms_private_lable_image', true);
            $private_after_image = get_post_meta(get_the_ID(), 'ms_private_after_image', true);
            $Portfolio_image = get_post_meta(get_the_ID(), 'ms_Portfolio_image', true);
            $portfolio_designation = get_post_meta(get_the_ID(), 'ms_portfolio_designation', true);
            $portfolio_name = get_post_meta(get_the_ID(), 'ms_portfolio_name', true);
            $portfolio_description = get_post_meta(get_the_ID(), 'ms_portfolio_description', true);
            $after_image = get_post_meta(get_the_ID(), 'ms_after_image', true);
          ?>
        <div class="container">
          <div class="row">
            <div class="col-md-6 d-flex align-items-center">
              <div class="text-center">
                <h1 class="title">
                    <?php
                        echo $private_label_title; 
                    ?>
                </h1>
                <p class="paragraph">
                 <?php
                    echo $private_label_detail;
                 ?>
                </p>
                <a href="<?php the_permalink(); ?>private-label" class="button">read more</a>
              </div>
            </div>
            <div class="col-md-6 d-flex justify-content-end">
              <div class="product-image">
                <img class="img-fluid" src="<?php echo $private_lable_image; ?>" alt="#" />
              </div>
            </div>
          </div>
          <div class="row mt-5">
            <div class="col-md-6">
              <div class="dr-image">
                <img
                  class="img-responsive"
                  src="<?php echo $Portfolio_image; ?>"
                  alt="#"
                />
              </div>
            </div>
            <div class="col-md-6 d-flex align-items-end">
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
        <div class="after-image">
          <img
            src="<?php echo $after_image; ?>"
            alt="#"
            class="img-responsive"
          />
        </div>
        <!-- <div class="bg-shape">
          <img src="assets/images/Rectangle 4.svg" alt="#" />
        </div> -->
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
      <section class="services">
        <div class="container">
            <?php
                 $phytoceuticals_services_title = get_post_meta(get_the_ID(), 'ms_phytoceuticals_services_title',true);
            ?>
          <h1 class="title"><?php echo $phytoceuticals_services_title; ?></h1>
          <div class="row">
          <?php
                $services_fields = get_post_meta(get_the_ID(), 'ms_services_fields',true);
                    foreach (
                        (array) $services_fields as $key => $services_fields) {
                        if ( isset( $services_fields['ms_phytoceuticals_services_image'] ) ) {
                            $phytoceuticals_services_image = esc_html( $services_fields['ms_phytoceuticals_services_image'] );
                        }
                        if ( isset( $services_fields['ms_phytoceuticals_services_detail'] ) ) {
                            $phytoceuticals_services_detail = esc_html( $services_fields['ms_phytoceuticals_services_detail'] );
                        }
                        
            ?>
            <div class="col-12 col-md-3 col-lg-2 mb-4 mb-md-0 mb-lg-0">
              <div class="services__icon">
                <img src="<?php echo $phytoceuticals_services_image; ?>" alt="#" />
              </div>
              <span>
                  <?php echo $phytoceuticals_services_detail; ?>
                  <!-- Quick Product Turn Around Times -->
                </span>
            </div>
            <?php }
            ?>
            <!-- <div class="col-12 col-md-3 col-lg-2 mb-4 mb-md-0 mb-lg-0">
              <div class="services__icon">
                <img src="<?php bloginfo('template_directory'); ?>/assets/images/services-icon-4.png" alt="#" />
              </div>
              <span>Free Product Information & Training</span>
            </div>
            <div class="col-12 col-md-3 col-lg-2 mb-4 mb-md-0 mb-lg-0">
              <div class="services__icon">
                <img src="<?php bloginfo('template_directory'); ?>/assets/images/services-icon-6.png" alt="#" />
              </div>
              <span>E-commerce and Analytics</span>
            </div>
            <div class="col-12 col-md-3 col-lg-2 mb-4 mb-md-0 mb-lg-0">
              <div class="services__icon">
                <img src="<?php bloginfo('template_directory'); ?>/assets/images/services-icon-2.png" alt="#" />
              </div>
              <span>Knowledgeable Skincare Experts</span>
            </div>
            <div class="col-12 col-md-3 col-lg-2 mb-4 mb-md-0 mb-lg-0">
              <div class="services__icon">
                <img src="<?php bloginfo('template_directory'); ?>/assets/images/services-icon-3.png" alt="#" />
              </div>
              <span>In-house Graphic Designer Team</span>
            </div>

            <div class="col-12 col-md-3 col-lg-2 mb-4 mb-md-0 mb-lg-0">
              <div class="services__icon">
                <img src="<?php bloginfo('template_directory'); ?>/assets/images/services-icon-7.png" alt="#" />
              </div>
              <span>online brand Marketing</span>
            </div> -->
          </div>
        </div>
      </section>
      <!-- <section class="phytoprivate">
        <div class="container">
          <div class="row">
            <div class="col-12 col-md-6">
              <h1 class="title">Phytoceuticals Private Label Process:</h1>
              <p>
                Our process is quick and easy with quick turnaround times of 2
                weeks for full production runs.
              </p>
              <ul>
                <li>Explore, Evaluate & Test Products</li>
                <li>Select or Provide Packaging</li>
                <li>Create & Finalize Logo & Product Label</li>
                <li>Be Creative - Name Your Product</li>
                <li>Place Your Order & Start Selling</li>
                <li>Marketing, Collateral Materials & Training</li>
              </ul>
              <p>
                Phytoceuticals, Inc., will also help consult you to help you
                grow and develop your brand by connecting you with digital media
                professionals and sales optimization. We also offer product
                knowledge training to help you understand how to use and
                recommend the products you carry.
              </p>
            </div>
            <div class="col-12 col-md-6">
              <div class="label-image">
                <img
                  src="assets/images/img-2.jpg"
                  alt="#"
                  class="img-responsive"
                />
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="otherservices">
        <div class="container">
          <h1 class="title">other services</h1>
          <span class="sub-tittle">
            Other Services we offer to help you get your brand started:
          </span>
          <div class="row">
            <div class="col-12 col-md-4">
              <div class="services__icon">
                <img src="assets/images/otherservices-icon.png" alt="#" />
              </div>
              <span>Graphic Design and Branding</span>
            </div>
            <div class="col-12 col-md-4">
              <div class="services__icon">
                <img src="assets/images/otherservices-icon-2.png" alt="#" />
              </div>
              <span>E-commerce and Analytics</span>
            </div>
            <div class="col-12 col-md-4">
              <div class="services__icon">
                <img src="assets/images/otherservices-icon-3.png" alt="#" />
              </div>
              <span>Online Brand Marketing</span>
            </div>
          </div>
        </div>
      </section> -->
      
    </main>
<?php get_footer();
