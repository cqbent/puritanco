<?php get_header(); ?>
	<?php 
	// get random gallery image and display as background
	do_action('get_page_bk');
	?>
	<div id="primary" class="site-content">
		<div id="content" role="main">
            <div id="homepage_wrapper">
                <div class="inner">
                    <div id="page_content_wrapper">
                        <div class="inner">
                            <div class="sidebar_content">
                                        
                                <h1 class="page_header"><?php the_title(); ?></h1>
                            
                                <!-- Begin main content -->
                                <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>		
                                    
                                    <?php do_shortcode(the_content()); ?>
                            
                                <?php endwhile; ?>
                                
                            <!-- End main content -->
                            </div>
                    </div>
                </div>
            </div>
        </div>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>