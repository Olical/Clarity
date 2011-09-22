				<div class='pagination'>
					<span class='previous'>
						<?php
							previous_posts_link('&larr; Previous');
							
							if (is_single()) {
								previous_post('&larr; %', false);
							}
						?>
					</span>
					
					<span class='next'>
						<?php
							next_posts_link('Next &rarr;');
							
							if (is_single()) {
								next_post('% &rarr; ', false);
							}
						?>
					</span>
				</div>
			</section>
			
			<aside class='five columns'>
				<?php get_sidebar(); ?>
			</aside>
			
			<footer class='sixteen columns'>
				<p><a href='https://github.com/Wolfy87/Clarity'>Clarity WordPress theme</a> by <a href='http://olivercaldwell.co.uk/'>Oliver Caldwell</a>.</p>
			</footer>
		</div>
		
		<?php wp_footer(); ?>
	</body>
</html>