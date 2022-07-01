</main>

    <footer class="footer-area">
      <div class="row">
        <div class="col-4-lg col-4-md col-12-sm">
          <section class="about-me">
            <div class="site-logo">
              <?php
           if (function_exists("the_custom_logo")) {
            the_custom_logo();
           }
           else {
            bloginfo("name");
           }
         
           ?>
            </div>
            <p class="para">
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores,
              expedita! Dicta ipsa debitis quia rerum obcaecati autem facere,
              eaque consectetur.
            </p>
            <div class="social-media">
              <a href="#" class="text-primary"
                ><span class="fab fa-facebook"></span
              ></a>
              <a href="#" class="text-primary"
                ><span class="fab fa-instagram"></span
              ></a>
              <a href="#" class="text-primary"
                ><span class="fab fa-twitter"></span
              ></a>
              <a href="#" class="text-primary"
                ><span class="fab fa-youtube"></span
              ></a>
            </div>
          </section>
        </div>
       
      </div>
      <div class="col-4-lg col-4-md col-12-sm">
        <section class="popular-tags">
          <a href="#" class="text-md text-light">Popular Tags</a>
          <div class="tags flex flex-row flex-wrap">
              <?php
            get_template_part("templates/temp/post", "tags");
               ?>
          </div>
        </section>
      </div>
    
      
    </footer>
 

    
  </body>
</html>
