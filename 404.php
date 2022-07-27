<?php
/**
 * Template Name: 404 Page
 *
 */

 get_header("color");?>
 
      <section class="post-area">
        <div class="wrapper">
            <div class="col-12-lg col-12-md" style="text-align: center">
            <br><br>
            <img src="https://i.pinimg.com/originals/a4/62/d1/a462d192479048db0f02f4466b900e0a.gif" height="400px" width="600px">
             <?php echo wpautop("Sorry, page not found"); ?>
          </div>
        </div>
      </section>

      <?php
      get_footer();
      ?>
    