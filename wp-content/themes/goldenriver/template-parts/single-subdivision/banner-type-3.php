<div id="section1" class="section section1 section-luxury" style="height: 656.549px;">
		<img src="<?php echo get_field('image_banner_3'); ?>" alt="">
		<div class="posa txt">
			<div class="container">
				<div class="dtb">
					<div class="dtbc">
						<img src="<?php echo get_field('mage_top_bn_3');?>" alt="">
						<?php if(have_rows('list_text_bn_3')): ?>
						<ul class="lsn clearfix">
							<?php while(have_rows('list_text_bn_3')): the_rows(); ?>
							<li> <?php echo get_sub_field('item_text_bn_3'); ?></li>
						<?php endwhile; ?>
							</ul>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	</div>