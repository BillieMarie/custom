<?php get_header();?>
	
	<div class="clear"></div>
    
    <div id="primary" class="site-content">
    <div id="content">
    
    <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
    
    <article class="halfcol left">
    	<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <?php the_post_thumbnail(); ?>
        
        <p><?php the_content(); ?></p>
   </article>      
        <p><small>Posted
   			<time datetime="<?php the_time('Y-m-d'); ?>">
    		<?php the_time('M j'); ?>
    		</time>
    	by <?php the_author(); ?>
    	<?php comments_number("0 comments", "1 comment", "% comments"); ?>
		</small></p>    
	<br /><hr /><br />	
    
	
	<?php endwhile; else: ?>
    	<p>Sorry no posts to display</p>
        
    <?php endif; ?>
   <?php next_posts_link( 'Older Posts', $the_query->max_num_pages );
previous_posts_link( 'Newer Posts' ); ?> 
   <br /><br />
   
   

   
</div><!-- #content -->   
</div><!-- #primary -->

<div id="sidebar">
<?php get_sidebar(right); ?> 
</div><!-- #sidebar -->



<?php get_footer(); ?>
