<?php
/**
 * Template Name: Home Page
 *
 */

 get_header("color");?>


      <section class="banner-area">
        <div class="container-fluid">
          <div class="banner">
          <header class='masthead-home'>
    <p class='masthead-intro-home'>WELCOME TO MY BLOG!</p>
</header>
          </div>

          <div class="banner-title text-center">
            <?php
            if (get_theme_mod("header_text_field")) : ?>
            <h1 class="text-lg text-light"><?php echo get_theme_mod("header_text_field") ?></h1>
            <?php Endif; ?>
            <?php
            if (get_theme_mod("header_desc_field")) : ?>
            <span class="description text-sm text-light"
              ><?php echo get_theme_mod("header_desc_field") ?></span
            >
            <?php Endif; ?>
          </div>
        </div>
      </section>

    

      <section class="post-area">
        <div class="wrapper">
          <div class="row">
            <div class="col-8-lg col-12-md">
              <div class="grid">
                <p><font style="vertical-align: inherit";>
                    <font style="vertical-align:inherit; color:var(--gray-dark) ; padding-left: 150px">Get inspired by this gallery</font>
                </font></p>
                </div>

                <?php the_content( '<p>', '</p>' ); ?>
    
            </div>
            <div class="col-4-lg col-12-md">
              <?php
              get_sidebar();
              ?>
            </div>
          </div>
        </div>
      </section>

      <?php
      get_footer();
      ?>
    