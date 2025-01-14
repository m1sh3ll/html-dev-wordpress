<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>  
  <meta charset="<?php bloginfo('charset');?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>  
  <title><?php echo the_title() ?></title>
</head>
<body <?php body_class(); ?>>
<div class="hero_area">
    <!-- header section strats -->
    <header class="header_section long_section px-0">
      <nav class="navbar navbar-expand-lg custom_nav-container ">
        <a class="navbar-brand" href="<?php echo site_url() ?>">
          <span>
            Edgecut
          </span>
        </a>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class=""> </span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <div class="d-flex mx-auto flex-column flex-lg-row align-items-center">
            <ul class="navbar-nav  ">
              <li class="nav-item ">
                <a class="nav-link" href="<?php echo site_url() ?>">Home</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="<?php echo site_url('/about-us') ?>"> About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('/furniture') ?>">Furnitures</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('/blog') ?>">Blog</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('/contact-us') ?>">Contact Us</a>
              </li>
            </ul>
          </div>
          <div class="quote_btn-container">
            <a href="">
              <span>
                Login
              </span>
              <i class="fa fa-user" aria-hidden="true"></i>
            </a>
            <form class="form-inline">
              <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
                <i class="fa fa-search" aria-hidden="true"></i>
              </button>
            </form>
          </div>
        </div>
      </nav>
    </header>
    <!-- end header section -->
  </div>