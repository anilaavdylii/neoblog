<?php 
get_header("color");
?>

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
             <?php echo wpautop("Sorry page Not found"); ?>

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
    