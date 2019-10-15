<?php
/**
 * The template part for displaying post
 * @package IT Company
 * @subpackage it_company
 * @since 1.0
 */
?>
<article>
	<h1><?php the_title();?></h1>
	<div class="post-info">
	    <i class="fa fa-calendar" aria-hidden="true"></i><span class="entry-date"><?php the_date(); ?></span>
	    <i class="fa fa-user" aria-hidden="true"></i><span class="entry-author"> <?php the_author(); ?></span>
	    <i class="fa fa-comments" aria-hidden="true"></i><span class="entry-comments"> <?php comments_number( __('0 Comments','it-company'), __('0 Comments','it-company'), __('% Comments','it-company') ); ?></span> 
	</div>
	<?php if(has_post_thumbnail()) { ?>
		<hr>
		<div class="feature-box">	
			<?php the_post_thumbnail(); ?>
		</div>
		<hr>					
	<?php } 
	the_content();

	wp_link_pages( array(
		'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'it-company' ) . '</span>',
		'after'       => '</div>',
		'link_before' => '<span>',
		'link_after'  => '</span>',
		'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'it-company' ) . ' </span>%',
		'separator'   => '<span class="screen-reader-text">, </span>',
	) );
		
	if ( is_singular( 'attachment' ) ) {
		// Parent post navigation.
		the_post_navigation( array(
			'prev_text' => _x( '<span class="meta-nav">Published in</span><span class="post-title">%title</span>', 'Parent post link', 'it-company' ),
		) );
	} 	elseif ( is_singular( 'post' ) ) {
		// Previous/next post navigation.
		the_post_navigation( array(
			'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next', 'it-company' ) . '</span> ' .
				'<span class="screen-reader-text">' . __( 'Next post:', 'it-company' ) . '</span> ' .
				'<span class="post-title">%title</span>',
			'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous', 'it-company' ) . '</span> ' .
				'<span class="screen-reader-text">' . __( 'Previous post:', 'it-company' ) . '</span> ' .
				'<span class="post-title">%title</span>',
		) );
	}

	echo '<div class="clearfix"></div>';

	the_tags(); 

	// If comments are open or we have at least one comment, load up the comment template.
	if ( comments_open() || get_comments_number() ) {
		comments_template();
	}?>
</article>