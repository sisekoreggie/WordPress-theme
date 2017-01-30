<?php get_header(); ?>
<div id="main">
	<?php if(have_posts()) : ?>
		<?php while(have_posts()) : the_post(); ?>
			<div class="post">
				<h2><a href="<?php the_permalink(); ?>" style="color:#b2ade6;font-weight:bold;font-style: italic;"><?php the_title(); ?></a></h2>
				
				<?php the_content(__('Continue Reading')); ?>
			</div>
		<?php endwhile; ?>
	<?php else : ?>
			<?php echo wpautop('Sorry, no posts were found'); ?>
	<?php endif; ?>
</div>


<?php get_sidebar(); ?>
<?php get_footer(); ?>