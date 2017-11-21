<?php
/*
Template Name: Thư Viện Ảnh
*/
?>
<?php get_header(); ?>

	<div class="section innerpager" id="media-page">
		<?php 
    $menulibraly = array(
    'menu'  => 'Library sub menu',
    'menu_class'=> 'nav nav-tabs text-center news--tab', 
     );
        wp_nav_menu( $menulibraly);
    ?>
		<div class="tab-content">
			<div id="phoi-canh-du-an" class="tab-pane active" role="tabpanel">
				<div class="container">
					<div class="row">
						<div class="list-items list-items--grip">
							<?php if(have_rows('items_tv')): ?>
							<?php while (have_rows('items_tv')): the_row(); ?>
							<div class="item col-md-4 col-sm-6">
								<div class="thumb">
									<a data-rel="lightbox-gallery" href="<?php echo get_sub_field('image_item_tv') ?>" title="<?php echo get_sub_field('title_item_tv'); ?>">
										<img src="<?php echo get_sub_field('image_item_tv') ?>" alt="" />
									</a>
								</div>
								<div class="wrapper">
									<a class="title text-uppercase" rel="phoi-canh-du-an">
										<?php echo get_sub_field('title_item_tv'); ?> </a>
								</div>
							</div>
							<?php endwhile; ?>
							<?php endif; ?>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>

<?php get_footer(); ?>
