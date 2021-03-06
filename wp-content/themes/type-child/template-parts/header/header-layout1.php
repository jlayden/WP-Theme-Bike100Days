<?php
/**
 * Template part for displaying Header.
 *
 * @package Type
 * @since Type 1.0
 */

?>

	<div class="site-title-centered">
		
		<?php if ( get_header_image() ) { ?>
		<div class="header-image" style="background-image: url(<?php echo esc_url( get_header_image() ); ?>)">
			<div class="header-image-container">
		<?php } ?>
			
				<div class="site-branding">
					<?php //type_custom_logo(); //the site title?>
					
					<?php if ( ! get_header_image() ) { 
						get_template_part( 'template-parts/navigation/navigation', 'social' ); // Social Menu
					} ?>
				</div><!-- .site-branding -->
				
				<?php if ( get_header_image() ) { 
					get_template_part( 'template-parts/navigation/navigation', 'social' ); // Social Menu
				} ?>
			
		<?php if ( get_header_image() ) { ?>
			</div>
    </div><!-- .header-image-->

		<?php } ?>
		<div class="main-navbar">
			<div class="container">
        <div class="row">

          <!--site description-->
          <?php $description = get_bloginfo( 'description', 'display' );
            if ( $description || is_customize_preview() ) : ?>
              <p class="site-description"><?php echo $description; ?></p>
          <?php endif; ?>

          <!--main navigation menu-->
          <?php get_template_part( 'template-parts/navigation/navigation', 'main' ); // Main Menu ?>
          
          <!-- search bar-->
          <?php if ( get_theme_mod( 'show_header_search' ) ) { ?>
            <div class="top-search">
              <span id="top-search-button" class="top-search-button"><i class="search-icon"></i></span>
              <?php get_search_form(); ?>
            </div>
          <?php } // Search Icon ?>

        </div>
      </div>
    </div>
		
	</div>
	