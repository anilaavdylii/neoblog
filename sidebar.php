<aside class="sidebar">
                <section class="latest-post">
                  <a href="#" class="text-md text-dark">Latest Post</a>
                  <div class="flex flex-column">
                    <?php
                    get_template_part("templates/temp/sidebar", "latest-post");
                    ?>
                  </div>
                </section>

                <section class="popular-tags">
                  <h4 class="text-md">
                    Popular Tags
                  </h4>
                  <div class="tags flex flex-row flex-wrap">
                  <?php
            get_template_part("templates/temp/post", "tags");
               ?> 
                  </div>
                </section>
              </aside>