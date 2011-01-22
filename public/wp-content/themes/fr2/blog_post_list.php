<?php
/**
 * Template Name: Blog Page List
 *
*/
get_header(); ?>

<h1 class="title"><span><?php bloginfo('name')?></span></h1>

<section>
  <div id="content_area" class="section blog_post_list">
    <?php next_posts_link('&laquo; Older Entries');?>
    <?php previous_posts_link('Newer Entries &raquo;');?>
  
  	<?php 
  	$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
  	$args = array(
  	 'paged' => $paged
  	);
  	query_posts($args);
   	if (have_posts()) : while (have_posts()) : the_post(); ?>

    <article>
      <div class="article" id="post-<?php the_ID(); ?>">        
        <div class="info firstchild">
          <h1 class="firstchild"><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h1>
          <p class="metadata">Posted by <?php the_author(); ?> <span><?php the_date(); ?></span></p>
          <p class="summary"><?php the_content();?></p>
        </div>
      </div>    
    </article>
          
    <?php endwhile; else: ?>
    <?php endif; ?>
  
    <?php next_posts_link('&laquo; Older Entries');?>
    <?php previous_posts_link('Newer Entries &raquo;');?>
  </div>
</section> 



<?php get_sidebar(); ?>

<?php get_footer(); ?>