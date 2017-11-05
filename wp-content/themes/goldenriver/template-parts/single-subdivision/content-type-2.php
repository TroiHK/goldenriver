<?php if( have_rows('flexible_content') ): ?>
    <?php while ( have_rows('flexible_content') ) : the_row(); ?>

<div class="section gioithieu" id="gioithieu">
    <div class="wrapper--lg">
        <?php  if( get_row_layout() == 'the_aqua' ): ?>
        <h1 class="title wow fadeInDown"><?php echo get_sub_field('title'); ?></h1>
        <ul class="list-unstyled list--float">
            <?php if(have_rows('images') ): ?>
                <?php  $i=1; ?>
                <?php while ( have_rows('images') ) : the_row();?>

            <li class="wow fadeInUp" data-wow-delay="<?php  echo 0.2*$i ?>s">
                <img src="<?php echo get_sub_field('image'); ?>" alt="">
            </li>
                <?php $i++; ?>
            <?php  endwhile; ?>
        <?php endif; ?>
        </ul>
    <?php endif; ?>
    </div>
</div>
<?php endwhile; ?>
<?php endif; ?>


<?php if( have_rows('flexible_content') ): ?>
<?php while ( have_rows('flexible_content') ) : the_row(); ?>
<div class="section" id="tienich">
  <?php  if( get_row_layout() == 'tien_ich' ): ?>
    <h3 class="title">
        <span class="lg-text wow fadeInDown"><?php echo get_field('title_t_i_ct'); ?></span>
        <span class="sm-text wow fadeInUp"><?php echo get_field('sub_title_t_i_ct'); ?></span>
    </h3>
    <div class="wrapper">
        <!-- wSlider -->
        <div id="utilities-slider" class="slider">
            <div class="slider_content">
                <div class="item_wrapper">
                    <!-- Repeat 3 -->
                    <?php if(have_rows('slider_t_i_ct')): ?>
                        <?php while(have_rows('slider_t_i_ct')): the_row(); ?>
                    <div class="item">
                        <img class="thumb" alt="" src="<?php echo get_sub_field('images'); ?>"/>
                    </div>
                    <?php endwhile ?>
                    <?php endif; ?>
                    <!-- end of repeat 3 -->
                </div>
            </div>
            <div class="caption">
                <div class="title"><?php echo get_field('title_list_tien_ich_ct'); ?></div>
            <?php if(have_rows('list_item_ti_ct')) :?>
                <div class="wrapper">
                    <ol style="list-style-type: decimal-leading-zero; padding-left: 25px;" start="01">
                        <?php while(have_rows('list_item_ti_ct')): the_row(); ?>
                        <li><?php echo get_sub_field('item_t_i_ct'); ?></li>
                       <?php endwhile; ?>
                    </ol>
                </div>
                <?php endif;?>
            </div>
        </div>
        <!-- end of wSlider -->
        <script>
        jQuery(document).ready(function($) {
            $('.item_wrapper', $('#utilities-slider')).bxSlider({
                auto: true,
                slideSelector: '.item',
                minSlides: 1,
                maxSlides: 1,
                pager: true
            });
        });
        </script>
        <!-- wSlider -->
    </div>
    <?php endif; ?>
</div>
<?php endwhile; ?>
<?php endif; ?>