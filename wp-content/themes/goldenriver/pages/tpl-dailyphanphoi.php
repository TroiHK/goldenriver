<?php
/*
Template Name: Đại Lý Phân Phối
*/
?>
<?php get_header(); ?>

<?php $agency = get_field('agency'); ?>

<div class="innerpager" id="hs-tab">
	<!-- Nav tabs -->
	<ul class="nav nav-tabs text-center news--tab" role="tablist">
		<li role="presentation" class="active"><a href="#tab1" aria-controls="tab1" role="tab" data-toggle="tab"><?php echo get_field('title_tab_left_pp') ?></a></li>
		<li role="presentation"><a href="#tab2" aria-controls="tab2" role="tab" data-toggle="tab"><?php echo get_field('title_tab_right_pp') ?></a></li>
	</ul>


	<!-- Tab panes -->
	<div class="tab-content">
		<?php if ( $agency ) : ?>
			
		<div role="tabpanel" class="tab-pane active" id="tab1">
			<div class="distribution">
				<div class="container">
					<?php $i=0; ?>
	                <?php while ( have_rows('agency') ): the_row(); ?>
		                <?php if($i % 3 == 0) : ?>
							<div class="row">
								<div class="list-items list-items--grip">
						<?php endif; ?>

									<div class=" col-md-4 col-sm-6">
										<div class="item">
											<div class="title">
												<a href="javascript:void(0)"><?php echo get_sub_field('title_pp') ?></a>
											</div>
											<div class="phone">
												<span class="di-table-cell"><i class="fa <?php echo get_sub_field('icon_pp') ?> "></i> </span>
												<span class="di-table-cell"><a href="tel:<?php echo get_sub_field('phone_pp') ?>"> <?php echo get_sub_field('phone_pp') ?></a></span>
											</div>
										</div>
									</div>
						<?php if( ( $i + 1 ) % 3 == 0 || (count($agency) - 1) == $i) : ?> 
								</div>
							</div>
						<?php endif; ?>

						<?php $i++; ?>

	                <?php endwhile; ?>

				</div>
			</div>
		</div>

		<?php endif; ?>

		<div role="tabpanel" class="tab-pane" id="tab2">
			<div class="faqs">
				<div class="container">
					<div class="row">
						<div class="list-items list-items--grip">
							<p style="margin: 80px 0 100px; text-align: center;">Thông tin đang được cập nhật, vui lòng quay trở lại sau!</p>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>

</div>
<?php get_footer(); ?>