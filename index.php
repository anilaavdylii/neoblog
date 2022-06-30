<?php 
get_header();
?>


      <section class="banner-area">
        <div class="container-fluid">
          <div class="banner">
            <?php
            if (get_theme_mod("header_image")) : ?>
            <img
              src="<?php echo esc_url(get_theme_mod("header_image")) ?>"
              alt="banner-area"
              class="fluid"
            />
            <?php Endif; ?>
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

      <section class="categories">
        <div class="container">
          <div class="flex flex-row flex-wrap">
            <?php
            get_template_part("templates/temp/categories","content")
            ?>
          </div>
        </div>
      </section>

      <section class="post-area">
        <div class="wrapper">
          <div class="row">
            <div class="col-8-lg col-12-md">
              <div class="grid">
                <?php
                get_template_part("templates/temp/post", "content");
                ?>
              </div>

              <div class="row">
                <div class="col-12-lg text-center">
                  <div class="pagination">
                    <?php
                    echo paginate_links(array(
                      'mid-size'=> 3,
                      'prev_text'=> __('<span class="fa fa-arrow-left"></span>'),
                      'next_text'=> __('<span class="fa fa-arrow-right"></span>')
                    ));
                    ?>
                  </div>
                </div>
              </div>
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
    