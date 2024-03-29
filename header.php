<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo("charset"); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head(); ?>

  </head>
  <body>
    <header class="header-area">
      <div class="container">
        <nav class="nav">
          <a href="#" class="link nav-brand text-light">
           <?php
           if (function_exists("the_custom_logo")) {
            the_custom_logo();
           }
           else {
            bloginfo("name");
           }
         
           ?>
          </a>

          <button class="toggle-button">
            <span class="fas fa-hamburger"></span>
          </button>
          <div class="collapse" id="toggle-collapse">
              <?php
            if(has_nav_menu("primary-menu")){
                wp_nav_menu(array(
                    "theme_location" => "primary-menu",
                    "container" =>'',
                    "items_wrap" => '<ul class="navbar-nav mr-auto">%3$s</ul>'
                ));
            }
              ?>
           

            <div class="search">
                <?php
                get_search_form();
                ?>
            </div>
          </div>
        </nav>
      </div>
    </header>
    
    <main class="main-area">