<?php get_header(); ?>
<div id="main">
	<?php if(have_posts()) : ?>
		<?php while(have_posts()) : the_post(); ?>
			<div class="post">
				<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				<div class="meta">Written by: <?php the_author(); ?> on <?php the_date('F j, Y'); ?></div>
				<?php the_content(__('Continue Reading')); ?>
			</div>
		<?php endwhile; ?>
	<?php else : ?>
			<?php echo wpautop('Sorry, no posts were found'); ?>
	<?php endif; ?>

</div>


<?php get_sidebar(); ?>
<?php get_footer(); ?>