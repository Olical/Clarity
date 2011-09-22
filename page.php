<?php
	get_header();
	
	if (have_posts())
	{
		while (have_posts())
		{
			the_post();
			
			?>
				<article>
					<h3><a href='<?php the_permalink(); ?>'><?php the_title(); ?></a></h3>
					
					<section class='post'>
						<?php the_content(); ?>
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