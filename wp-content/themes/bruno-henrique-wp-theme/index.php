<?php get_header(); ?>

<div class="row">
	<div class="col-md-8">
		<h1>Conteúdo Geral</h1>
		<?php if(have_posts()) : while (have_posts()) : the_post(); ?>
		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		<p><?php the_content(); ?></p>
		<hr>
		<?php endwhile; ?>
			<nav aria-label="Page navigation">
				<ul class="pagination">
					<li><?php next_posts_link('Posts Antigos')?></li>
					<li><?php previous_posts_link('Posts Novos')?></li>
				</ul>
			</nav>
		<?php else: ?>
		<?php endif; ?>
	</div>
	<?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>