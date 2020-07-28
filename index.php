<?php
get_header();
?>
<main>
  <!-- nav bar -->
  <nav class="BebasNeue">
    <!-- upper side with logo and contact information -->
    <div class="nav-upper">
      <?php
        placeLogo();
      ?>
      <div class="nav-top-text">
        <!-- Add The Bottom Nav Bar To The Menu -->
        <?php
          wp_nav_menu(['theme_location' => 'nav-bar-top']);
        ?>
      </div>
    </div>
    <!-- lower side with links -->
    <div class="nav-lower">
      <!-- Add The Bottom Nav Bar To The Menu -->
      <?php
        wp_nav_menu(['theme_location' => 'nav-bar-bottom']);
      ?>
    </div>
  </nav>
  <!-- side bar with more links -->
  <aside>
    <!-- all links that are on the left side of the page -->
    <div class="aside-links BebasNeue">
      <!-- Add The Side Menu Nav Bar To The Page -->
      <?php
        wp_nav_menu(['theme_location' => 'side-menu']);
      ?>
    </div>
    <!-- links to facebook, twitter, youtube & etc. -->
    <div class="social-links">
      <?php
        wp_nav_menu(['theme_location' => 'social-links']);
      ?>
    </div>
  </aside>
  <!-- main document part -->
  <section>
    <h1 class="BebasNeue">
      <!-- Add The Post Content To The Page Body -->
      <?php
        the_title();
      ?>
    </h1>
    <?php
    while(have_posts()): // if there are posts, show them
      the_post();?>
      <div class="postContent">
        <?php
          the_content();
        ?>
      </div>
    <?php
      endwhile;
    ?>
  </section>
</main>
<?php
get_footer();
