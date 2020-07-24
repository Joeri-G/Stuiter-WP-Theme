<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package Stuiter WP Theme
 * @since Twenty Thirteen 1.2.1
 */

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
     <h1>404: Page Not Found</h1>
     <p>It looks like the page you requested could not be found...</p>
     <p>Maybe it was moved or deleted.</p>
   </section>
 </main>
 <?php
 get_footer();
