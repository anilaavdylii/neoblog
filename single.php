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
           
          <?php if(have_posts()): ?>
<?php while(have_posts()): the_post();?>

<div class="article">

                  <article class="single-post">
                  <div class="post-title">
                        <a href="<?php the_permalink(); ?>"
                          ><span class="text-lg text-dark"
                            ><?php echo the_title(); ?></span
                          >
                        </a>
                      </div>
                    <div class="post-thumbnail">
                      <?php
                      if (has_post_thumbnail()):?>
                      <img
                        src="<?php echo get_the_post_thumbnail_url(); ?>"
                        alt="article1"
                        class="fluid"
                      />
                      <?php endif; ?>
                    </div>
                    <div class="post-content">
                        <p class="para">
                         <?php echo get_the_content(); ?>
                        </p>
                      </div>
                  </article>
                </div>

<?php endwhile; ?>
<?php else: ?>
    <?php echo wpautop("Sorry No Post were Found");?>
<?php endif; ?>



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
          
          </div>
        </div>
      </section>

      <?php
      get_footer();
      ?>
    