<?php get_header(); ?>

<?php if ( have_rows('slider_sg_sub') ) : ?>
    <?php while( have_rows('slider_sg_sub') ): the_row(); ?>
        <?php 
            $row_index = get_row_index();
        ?>

        <div id="section-vtr-content-<?php echo $row_index; ?>" class="section section-has-content<?php if ($row_index%2 != 0) echo ' left'; else echo ' right'; ?>">

            <div id="section-vtr-content-slide-<?php echo $row_index; ?>" class="swiper-container slide-desktop" 
                 data-options='{
                 "speed": 1000,
                 "effect": "fade",
                 "autoplay": 3000,
                 "pagination": "#section-vtr-content-slide-<?php echo $row_index; ?> .slide-paginates",
                 "paginationClickable": true,
                 "prevButton": "#section-vtr-content-<?php echo $row_index; ?> .slide-prev",
                 "nextButton": "#section-vtr-content-<?php echo $row_index; ?> .slide-next" }'>
                 <?php  ?>
                 <ul class="swiper-wrapper lsn">
                    <?php while( have_rows('slider_desktop') ): the_row(); ?>
                    <li class="swiper-slide">
                        <img src="<?php echo get_sub_field('image'); ?>" alt="">
                    </li>
                    <?php endwhile; ?>
                </ul>

                <div class="slide-paginates"></div>
            </div>

            <div id="section-vtr-content-slide-mobile-<?php echo $row_index; ?>" class="swiper-container slide-responsive" 
                data-options='{
                "speed": 1000,
                "effect": "fade",
                "autoplay": 3000,
                "pagination": "#section-vtr-content-slide-mobile-<?php echo $row_index; ?> .slide-paginates",
                "paginationClickable": true,
                "prevButton": "#section-vtr-content-mobile-<?php echo $row_index; ?> .slide-prev",
                "nextButton": "#section-vtr-content-mobile-<?php echo $row_index; ?> .slide-next" }'>

                <ul class="swiper-wrapper lsn">
                    <?php while( have_rows('slider_desktop') ): the_row(); ?>
                    <li class="swiper-slide">
                        <img src="<?php echo get_sub_field('image'); ?>" alt="">
                    </li>
                    <?php endwhile; ?>
                </ul>

                <div class="slide-paginates"></div>

            </div>

            <div class="slide-prev"></div>
            <div class="slide-next"></div>

            <div class="data"> 
                <div class="section-vtr-title">
                    <div class="section-vtr-title-inner">
                        <img class="desktop-show" src="<?php echo get_sub_field('image_title_desktop'); ?>" alt="">
                        <img class="mobile-show" src="<?php echo get_sub_field('image_title_mobile'); ?>" alt="">
                        <div class="description" style="padding: 40px 20px 0px;">
                            <?php echo get_sub_field('description'); ?>
                        </div>
                    </div>
            </div>
        </div>
    </div>

    <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>