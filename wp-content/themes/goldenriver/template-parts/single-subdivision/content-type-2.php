<?php if( have_rows('flexible_content') ): ?>
    <?php while ( have_rows('flexible_content') ) : the_row(); ?>

    <?php  if( get_row_layout() == 'the_aqua' ): ?>
        <div class="section gioithieu" id="gioithieu">
            <div class="wrapper--lg">
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
            </div>
        </div>
    <?php endif; ?>

    <?php  if( get_row_layout() == 'tien_ich' ): ?>
        <div class="section" id="tienich">
            <h3 class="title">
                <span class="lg-text wow fadeInDown"><strong><?php echo get_sub_field('title_t_i_ct'); ?></strong></span>
                <span class="sm-text wow fadeInUp"><?php echo get_sub_field('sub_title_t_i_ct'); ?></span>
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
                        <div class="title"><?php echo get_sub_field('title_list_tien_ich_ct'); ?></div>
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
            </div>
        </div>
    <?php endif; ?>

    <?php  if( get_row_layout() == 'mat_bang' ) : ?>
        <?php echo get_sub_field('html'); ?>
    <?php endif; ?>

    <?php  if( get_row_layout() == 'tam_nhin' ) : ?>
        <div class="section section-visions">
            <div class="posa txt">
                <div class="container">
                    <div class="dtb">
                        <div class="dtbc tac">
                            <h2><img src="<?php echo get_sub_field('image_title'); ?>" alt=""></h2>
                            <p><?php echo get_sub_field('description'); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <?php  if( get_row_layout() == 'cay_xanh' ) : ?>
        <div class="section section-lx-featured">
            <div class="dtb">
                <div class="dtbc grid6">
                    <img src="<?php echo get_sub_field('image_left'); ?>" alt="">
                </div>
                <div class="dtbc grid6 txt-wrap">
                    <div class="dtb">
                        <div class="dtbc txt">
                            <img src="<?php echo get_sub_field('image_title'); ?>" alt="">
                            <p><?php echo get_sub_field('description'); ?></p>
                            <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/ft-bottom-txt.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <?php endwhile; ?>
<?php endif; ?>