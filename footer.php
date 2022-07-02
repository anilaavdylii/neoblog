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
