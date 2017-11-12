<?php
/*
Template Name: Tài Liệu Bán Hàng
*/
?>
    <?php get_header(); ?>
<div class="innerpager section" id="project-update">
    <!-- Nav tabs -->
    <ul class="nav nav-tabs text-center news--tab" role="tablist">
        <li role="presentation" class="active"><a href="#tai-lieu-ban-hang" aria-controls="tai-lieu-ban-hang" role="tab" data-toggle="tab"><?php  echo get_field('title_tab_left_bh'); ?></a></li>
        <li role="presentation"><a href="#chinh-sach-ban-hang" aria-controls="chinh-sach-ban-hang" role="tab" data-toggle="tab"><?php  echo get_field('title_tab_right_bh'); ?></a></li>
    </ul>

    <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="tai-lieu-ban-hang">
            <div class="document">
                <div class="container">
                    <div class="row">
                            <div class="list-items list-items--grip">
                             <?php if(have_rows('document_bh')): ?>
                                <?php while(have_rows('document_bh')): the_row(); ?>
                                <div class="col-md-4 col-sm-6">
                                <div class="item">
                                    <div class="thumb">
                                        <div class="image">
                                            <div class="di-table-cell">
                                                <img src="<?php echo get_sub_field('imge_bh'); ?>" alt="">
                                            </div>
                                        </div>
                                        <div class="title"><?php echo get_sub_field('title_bh'); ?></div>
                                    </div>
                                    <div class="wrapper text-center">
                                        <a href="<?php echo get_sub_field('file_bh'); ?>" class="download" rel="nofollow, noindex">Download</a>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                        <?php endif; ?>



                            </div>
                        <div class="pager">
                    </div>
                    
                    </div>
                </div>
            </div>
        </div>
        <div role="tabpanel" class="tab-pane" id="chinh-sach-ban-hang" style="font-weight: normal;">

            <div class="document">
                <div class="container">
                    <div class="row">

                        
                    <div class="list-items list-items--grip">
                        <?php if(have_rows('polyci')): ?>
                            <?php while(have_rows('polyci')): the_row(); ?>
                            <div class="col-md-4 col-sm-6">
                                <div class="item">
                                    <div class="thumb">
                                        <div class="image">
                                                    <div class="di-table-cell">
                                                        <img src="<?php echo get_sub_field('image_plc'); ?>" alt="">
                                                    </div>
                                                </div>
                                                <div class="title"><?php echo get_sub_field('title_plc'); ?></div>
                                            </div>
                                            <div class="wrapper text-center">
                                                <a href="<?php echo get_sub_field('file_plc'); ?>" class="download" rel="nofollow, noindex">Download</a>
                                            </div>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                                <?php endif; ?>


                                </div>

                            <div class="pager">
                        </div>
                        
                    </div>
                </div>
            </div>

            <!--<div class="container">
                <div class="the-content clearfix">
                                    </div>
            </div>-->
        </div>
    </div>

</div>

    <?php get_footer(); ?>