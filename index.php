<?php
	get_header();
	
	if (have_posts())
	{
		while (have_posts())
		{
			the_post();
			
			?>
				<article>
					<h3 class='post-title'><a href='<?php the_permalink(); ?>'><?php the_title(); ?></a></h3>
					
					<section class='post'>
						<?php the_content('Read more &rarr;'); ?>
					</section>
					
					<section class='post-meta'>
						<p>Posted on <?php the_time('F jS, Y'); ?> at <?php the_time('g:ia'); ?> by <?php
							the_author_posts_link();
							if (get_the_category())
							{
								echo ' under ';
								the_category(', ');
							}
						?>.<br /><?php the_tags('Tagged with ', ', ', '.'); ?></p>
					</section>
					
					<section>
						<?php comments_template(); ?>
					</section>
				</article>
			<?php
		}
	}
	else
	{
		?>
			<h3>No posts where found.</h3>
			<p>Sorry, no posts matched your criteria. Please check the URL or try searching for what you require.</p>
		<?php
	}
	
	get_footer();
?>