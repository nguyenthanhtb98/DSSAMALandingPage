<?php
/**
 * The template for displaying all pages.
 * @package IT Company
 */
get_header(); ?>

<main id="maincontent" role="main">
    <?php do_action('it_company_page_header'); ?>
    
    <?php while ( have_posts() ) : the_post(); ?>
        <div class="title-box">
        	<div class="container">
        		<h1><?php the_title();?></h1>
        	</div>
        </div>
        <div id="wrapper" class="container">
            <div class="main-wrap-box"> 
                <div class="feature-box">
                    <div class="bradcrumbs">
                        <?php it_company_the_breadcrumb(); ?>
                    </div>
                </div> 
                <div class="feature-box">
                    <?php the_post_thumbnail(); ?>
                </div>
                <?php the_content(); ?> 
                <?php wp_link_pages( array(
                    'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'it-company' ) . '</span>',
                    'after'       => '</div>',
                    'link_before' => '<span class="page-number">',
                    'link_after'  => '</span>',
                    'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'it-company' ) . ' </span>%',
                    'separator'   => '<span class="screen-reader-text">, </span>',
                )   ); ?>       
                <div class="clear"></div>    
            </div>
            <?php
                // If comments are open or we have at least one comment, load up the comment template.
                if ( comments_open() || get_comments_number() ) {
                    comments_template();
                }
            ?>
        </div>
    <?php endwhile; // end of the loop. 
    wp_reset_postdata();?>
</main>

<?php do_action('it_company_page_left_footer'); ?>

<?php get_footer(); ?>