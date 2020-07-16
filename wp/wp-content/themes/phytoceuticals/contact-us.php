<?php
/* Template Name: Contact-Us */

get_header();
?>
    <div class="banner__inner">
        <h1 class="title ">
          contact us
        </h1>
      </div>
    <main>
      <section class="py-100">
        <div class="container">
          <div class="row">
            <div class="col-md-8 contact-form">
            <?php
              while ( have_posts() ) : the_post();
                  the_content();
              endwhile;
            ?>
              <!-- <form class="contact-form" action="#">
                <div class="form-row mb-3">
                  <div class="col">
                    <input
                      type="text"
                      class="form-control"
                      placeholder="First name"
                    />
                  </div>
                  <div class="col">
                    <input
                      type="text"
                      class="form-control"
                      placeholder="Last name"
                    />
                  </div>
                </div>
                <div class="form-row mb-3">
                  <div class="col">
                    <input
                      type="email"
                      class="form-control"
                      placeholder="E-mail"
                    />
                  </div>
                  <div class="col">
                    <input
                      type="text"
                      class="form-control"
                      placeholder="subject"
                    />
                  </div>
                </div>
                <textarea
                  name="message"
                  id="message"
                  rows="8"
                  class="form-control"
                  placeholder="Write your message here"
                ></textarea>
                <button type="submit" class="button">Submit</button>
              </form> -->
            </div>
            <div class="col-md-4">
              <div style="width: 100%">
                <iframe
                  width="100%"
                  height="400"
                  src="https://maps.google.com/maps?width=100%&amp;height=600&amp;hl=en&amp;q=Abc+(Phyto%20ceuticals)&amp;ie=UTF8&amp;t=&amp;z=14&amp;iwloc=A&amp;output=embed"
                  frameborder="0"
                  scrolling="no"
                  marginheight="0"
                  marginwidth="0"
                  >
                  <a href="https://www.maps.ie/map-my-route/">Plot a route map</a
                  ></iframe
                >
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
   <?php get_footer();
